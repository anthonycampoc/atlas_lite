<?php

namespace App\Http\Controllers;

use App\Models\Bunises;
use App\Models\Product;
use App\Models\Provider;
use App\Models\Purchase;
use App\Models\PurchaseDetails;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:purchases.create')->only(['create','store']);
        $this->middleware('can:purchases.index')->only(['index']);
        $this->middleware('can:purchases.show')->only(['show']);

        $this->middleware('can:change.status.purchases')->only(['change_status']);
        $this->middleware('can:purchases.pdf')->only(['pdf']);
        $this->middleware('can:upload.purchases')->only(['upload']);
    }
    
    public function index()
    {
        $imgusers= Auth::user()->image;
        $purchases = Purchase::all();
           $business = Bunises::where('id', 1)->firstOrFail();
        return view('admin.purchases.index', compact('purchases','imgusers','business'));

    }

    public function create()
    {
        $imgusers= Auth::user()->image;
        $providers = Provider::all();
        $products = Product::all();
           $business = Bunises::where('id', 1)->firstOrFail();
        return view('admin.purchases.create', compact('providers','products','imgusers','business'));

    }


    public function store(Request $request)
    {
        
        $purchase = Purchase::create($request->all()+[
            'user_id'=>Auth::user()->id,
            'puchase_date'=>Carbon::now('America/Guayaquil'),
        ]
    );

        foreach ($request->product_id as $key => $product) {
            $result[] = array("product_id" => $request->product_id[$key],
            "quantity"=>$request->quantity[$key], "price"=>$request->price[$key]);
        }

            $purchase->parchaseDetails()->createMany($result);
            
            Alert::alert()->success($request->name,'¡Se registro correctamente la compra!');
            return redirect()->route('purchases.index');
    }

    public function show($id)
    {
        $imgusers= Auth::user()->image;
        $purchase = Purchase::findOrFail($id);
        $purchaseDetails = $purchase->parchaseDetails;
           $business = Bunises::where('id', 1)->firstOrFail();
        $subtotal = 0;
       // dd($purchaseDetails);

        foreach($purchaseDetails as $purchaseDetail){
            $subtotal += $purchaseDetail->quantity * $purchaseDetail->price;
        }
        //dd($subtotal);
        return view('admin.purchases.show', compact('purchase','subtotal','purchaseDetails','imgusers','business'));
    }

    public function edit(Purchase $purchase)
    {      $imgusers= Auth::user()->image;
           $business = Bunises::where('id', 1)->firstOrFail();
        return view('admin.purchases.edit', compact('purchase','imgusers','business'));
    }

  
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    public function destroy(Purchase $purchase)
    {
        //
    }

    public function pdf($id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchaseDetails = $purchase->parchaseDetails;
        $subtotal = 0;
       // dd($purchaseDetails);

        foreach($purchaseDetails as $purchaseDetail){
            $subtotal += $purchaseDetail->quantity * $purchaseDetail->price;
        }
        $pdf = PDF::loadView('admin.purchases.pdf', compact('purchase', 'subtotal', 'purchaseDetails'));
        return $pdf->download('Reporte_de_compra_'.$id.'.pdf');
    }

    public function change_status($id){
        $pruchase = Purchase::findOrFail($id);

        if($pruchase->status == 'VALID'){
            $pruchase->update(['status'=>'CANCELED']);
            return redirect()->back();
        }else{
            $pruchase->update(['status'=>'VALID']);
            return redirect()->back();
        }
   }

   public function upload(Request $request,$id)
   {
        $purchase = Purchase::findOrFail($id);
        $purchase->update($request->all());
        return redirect()->route('purchases.index');
   }
}
