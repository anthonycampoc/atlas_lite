<?php

namespace App\Http\Controllers;

use App\Models\Abono;
use App\Models\Bunises;
use App\Models\Client;
use App\Models\Estado;
use App\Models\Product;
use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
Use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

class SaleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:sales.create')->only(['create','store']);
        $this->middleware('can:sales.index')->only(['index']);
        $this->middleware('can:sales.show')->only(['show']);

        $this->middleware('can:change.status.sales')->only(['change_status']);
        $this->middleware('can:sales.pdf')->only(['pdf']);
        $this->middleware('can:sales.print')->only(['print']);
    }
    
    public function index()
    {
        $imgusers= Auth::user()->image;
        $business = Bunises::where('id', 1)->firstOrFail();
        $sales = Sale::all();

        return view('admin.sales.index', compact('sales','imgusers','business'));
    }

    public function create()
    {
        $imgusers= Auth::user()->image;
        $clients = DB::select('SELECT * FROM clients ORDER BY ID DESC');
        $business = Bunises::where('id', 1)->firstOrFail();
        $products = Product::where('status', 'ACTIVE')->get();

        return view('admin.sales.create', compact('clients', 'products','imgusers','business'));
    }

    public function store(Request $request)
    {
    
        $sale = Sale::create($request->all()+[
            'user_id'=>Auth::user()->id,
            'sale_date'=>Carbon::now('America/Guayaquil'),
        ]);

       $total_venta = $request->total;
       $abono_date = Carbon::now('America/Guayaquil');
       $total[] = array("saldo"=>$total_venta,"abono_date"=>$abono_date);
       $sale->abonos()->createMany($total);
        
        foreach ($request->product_id as $key => $product) {
            $result[] = array("product_id" => $request->product_id[$key],
            "quantity"=>$request->quantity[$key], "price"=>$request->price[$key], "discount"=>$request->discount[$key], "saldo"=>$request->total[$key] );
        }
            $sale->saleDetails()->createMany($result);
            return redirect()->route('sales.index');
    }

 
    public function show($id)
    {
        $imgusers= Auth::user()->image;
        $subtotal = 0;
        $sale = Sale::findOrFail($id);
           $business = Bunises::where('id', 1)->firstOrFail();
        $saleDetails = $sale->saleDetails;
        foreach ($saleDetails  as $saleDetail) {
            $subtotal += $saleDetail->quantity*$saleDetail->price-$saleDetail->quantity*$saleDetail->price*$saleDetail->descount/100;
        }

        return view('admin.sales.show', compact('sale', 'saleDetails', 'subtotal','imgusers','business'));
        
    }

  
    public function edit(Sale $sale)
    {
        //
    }

    public function update(Request $request, Sale $sale)
    {
        //
    }

    public function destroy(Sale $sale)
    {
        //
    }

    public function pdf($id)
    {
        $sale = Sale::findOrFail($id);
        $empresa = Bunises::where('id', 1)->firstOrFail();
        $saleDetails = $sale->saleDetails;
        $subtotal = 0;
       // dd($purchaseDetails);

       foreach ($saleDetails  as $saleDetail) {
        $subtotal += $saleDetail->quantity*$saleDetail->price-$saleDetail->quantity*$saleDetail->price*$saleDetail->descount/100;
    }
        $pdf = PDF::loadView('admin.sales.pdf', compact('sale', 'empresa', 'saleDetails', 'subtotal'));
        return $pdf->download('Reporte_de_compra_'.$id.'.pdf');
    }

    public function print($id){

        try {
            $sale = Sale::findOrFail($id);
            $saleDetails = $sale->saleDetails;
            $subtotal = 0;
    
            foreach ($saleDetails  as $saleDetail) {
                $subtotal += $saleDetail->quantity*$saleDetail->price-$saleDetail->quantity*$saleDetail->price*$saleDetail->descount/100;
            }
    
        
           $printer_name = DB::select('SELECT p.name from printers p');
        //    dd($printer_name);
           
           $connector = new WindowsPrintConnector($printer_name);
           $printer = new Printer($connector);

           $printer->text("€ 9,95\n");

           $printer->cut();
           $printer->close();       

           

           return redirect()->back();

        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }

    public function change_status($id){
         $sale = Sale::findOrFail($id);

         if($sale->status == 'VALID'){
             $sale->update(['status'=>'CANCELED']);
             return redirect()->back();
         }else{
             $sale->update(['status'=>'VALID']);
             return redirect()->back();
         }
    }


    public function estado($id){
        $sale = Sale::findOrFail($id);

        if($sale->estado == 'PUEDE RETIRAR'){
            $sale->update(['estado'=>'ENTREGADO']);
            return redirect()->back();
        }else{
            $sale->update(['estado'=>'PUEDE RETIRAR']);
            return redirect()->back();
        }

      
   }

    public function abono($id){

        $all_abono2 = DB::select(DB::raw('SELECT fechaE, descripcion FROM abonos WHERE sale_id = :id_sale ORDER BY ID DESC LIMIT 1 '), array('id_sale' =>$id));
        $estados = Estado::all();

        $imgusers= Auth::user()->image;
        $business = Bunises::where('id', 1)->firstOrFail();
        $all_abono = DB::select(DB::raw(' SELECT * FROM abonos WHERE sale_id = :id_sale '), array('id_sale' =>$id));
        
        $total_sale = DB::select(DB::raw(' SELECT c.name as nombre , c.phone as telefono, c.last_name as apellido, s.total as total, s.id as id FROM sales s INNER JOIN clients c ON s.client_id = c.id WHERE s.id = :id_sale '), array('id_sale' =>$id));
        $abonos = DB::select(DB::raw(' SELECT id, sale_id, saldo FROM abonos WHERE sale_id = :id_sale ORDER BY ID DESC LIMIT 1'), array('id_sale' =>$id));
        return view('admin.abonos.index', compact('abonos','total_sale','imgusers','all_abono','business','all_abono2', 'estados'));
    }


   


}
