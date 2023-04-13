<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Imports\ProductsImport;
use App\Models\Bunises;
use App\Models\Categoria;
use App\Models\Product;
use App\Models\Provider;
use Barryvdh\DomPDF\Facade as PDF;
use Facade\FlareClient\Time\Time;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:products.create')->only(['create','store']);
        $this->middleware('can:products.index')->only(['index']);
        $this->middleware('can:products.edit')->only(['edit','update']);
        $this->middleware('can:products.show')->only(['show']);
        $this->middleware('can:products.destroy')->only(['destroy']);
        $this->middleware('can:change.status.products')->only(['change_status']);
    }
    

    public function index()
    {
        $imgusers= Auth::user()->image;
        $business = Bunises::where('id', 1)->firstOrFail();
        $products = Product::all();
        return view('admin.products.index', compact('products','imgusers','business'));
    }
    public function create()
    {
        $imgusers= Auth::user()->image;
        $categories = Categoria::all();
        $business = Bunises::where('id', 1)->firstOrFail();
        $providers = Provider::all();
        return view ('admin.products.create', compact('categories','providers','imgusers','business'));
    }
    public function store(StoreRequest $request, Product  $product )
    {
        
        
        // if( $archivo = $request->file('picture')){
        //     $_name_img = time()."-".$archivo->getClientOriginalName();
        //     $archivo->move(public_path("/images"), $_name_img);

        // }else{
        //     $_name_img = 'product.png';
        // }
      
        // Product::create($request->all()+[
        //     'image'=>$_name_img,
        // ]);

        $product->my_store($request);

       Alert::alert()->success($request->name,'¡Se registró correctamente el producto!');

        return redirect()->route('products.index');
    }

  
    public function show($id)
    {
        $imgusers= Auth::user()->image;
        $business = Bunises::where('id', 1)->firstOrFail();
        $product = Product::findOrFail($id);
        return view('admin.products.show', compact('product','imgusers','business'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $business = Bunises::where('id', 1)->firstOrFail();
        $imgusers= Auth::user()->image;
        $categories = Categoria::all();
        $providers = Provider::all();
        return view ('admin.products.edit', compact('categories','providers','product','imgusers','business'));
    }

  
    public function update(UpdateRequest $request, Product $product)
    {
       /* $product = Product::findOrFail($id);
        $_name_img ='';
        if($archivo = $request->file('picture')){
            File::delete(public_path('images/'.$product->image));
            $_name_img = time()."-".$archivo->getClientOriginalName();
            $archivo->move(public_path("/images"), $_name_img);

        }else{
            $_name_img = 'product.png';
        }
        
        
        $product->update($request->all()+[
            'image'=>$_name_img,
        ]);*/

   

        $product->my_upddate($request);
        Alert::alert()->success($request->name,'¡Se actualizo correctamente el producto!');
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $delete = Product::findOrFail($id);
        $delete->delete();
        Alert::alert()->success('¡Se elimino correctamente el producto!');
        return redirect()->route('products.index');
    }

    

    public function change_status($id){
        $product = Product::findOrFail($id);

        if($product->status == 'ACTIVE'){
            $product->update(['status'=>'DEACTIVATE']);
            return redirect()->back();
        }else{
            $product->update(['status'=>'ACTIVE']);
            return redirect()->back();
        }
   }

   public function print_barcode(Request $request)
   {
       $de = $request->de;
       $hasta = $request->hasta;
       $products = DB::select( DB::raw('SELECT * FROM products WHERE id >= :from AND id <= :to; '), array('from'=>$de,'to'=>$hasta));
 
       $pdf = PDF::loadView('admin.products.barcode', compact('products'));
       return $pdf->download('codigos_de_barras.pdf');
   }

   public function print_barcode2(Request $request)
   {
        $de = $request->de;
        $hasta = $request->hasta;
        $products = DB::select( DB::raw('SELECT * FROM products WHERE id >= :from AND id <= :to; '), array('from'=>$de,'to'=>$hasta));
       $pdf = PDF::loadView('admin.products.barcode2', compact('products'));
       return $pdf->download('INVENTARIO PRODUCTOS'.time().'.pdf');
   }

   public function print_barcode_all()
   {
      
       $products = Product::all();
 
       $pdf = PDF::loadView('admin.products.barcode', compact('products'));
       return $pdf->download('codigos_de_barras.pdf');
   }

   public function print_barcode2_all()
   {
       
        $products = Product::all();
       $pdf = PDF::loadView('admin.products.barcode2', compact('products'));
       return $pdf->download('INVENTARIO PRODUCTOS'.time().'.pdf');
   }

   

   public function get_products_by_barcode(Request $request){
        if ($request->ajax()) {
            $products = Product::where('code', $request->code)->firstOrFail();
            return response()->json($products);
        }
    }

    public function get_products_by_id(Request $request){
        if ($request->ajax()) {
            $products = Product::where('id', $request->product_id)->firstOrFail();
            return response()->json($products);
        }
    }

    public function export_excel(){

        //return Excel::download(new ProductsExport,'product-list.xlsx');
        return Excel::download(new ProductsExport, 'product-list.xlsx');

    }

    public function import_excel(Request $request){

        try {
            $file = $request->file('file');
            Excel::import( new ProductsImport, $file);
        } catch (ModelNotFoundException $exception) {
            return back()->withErrors($exception->getMessage())->withInput();
        }
        
        Alert::alert()->success($request->name,'Productos subidos con exito');
        return redirect()->route('products.index');

    }

    public function upload_image(Request $request, $id){

       
        $product = Product::findOrFail($id);
        if($request->hasFile('picture')){
                $images = $request->file('picture');
                $nombre = time().'_'.$images->getClientOriginalName();
                $images->move(public_path("/images"), $nombre);
                $urlimages='/images/'.$nombre;
           
    }
        
        $product->images()->create([

            'url'=>$urlimages,
        ]);

    }


}
