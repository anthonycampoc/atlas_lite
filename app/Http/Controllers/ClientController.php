<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;
use App\Models\Bunises;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:clients.create')->only(['create','store']);
        $this->middleware('can:clients.index')->only(['index']);
        $this->middleware('can:clients.edit')->only(['edit','update']);
        $this->middleware('can:clients.show')->only(['show']);
        $this->middleware('can:clients.destroy')->only(['destroy']);
    }
    public function index()
    {   $imgusers= Auth::user()->image;
        $business = Bunises::where('id', 1)->firstOrFail();
       $clients = Client::all();
       return view('admin.clients.index', compact('clients','imgusers','business'));
    }

   
    public function create()
    {   $imgusers= Auth::user()->image;
        $business = Bunises::where('id', 1)->firstOrFail();
        return view('admin.clients.create', compact('imgusers','business'));
    }

   
    public function store(StoreRequest $request)
    {
        
        if( $archivo = $request->file('picture')){
            $_name_img = time()."-".$archivo->getClientOriginalName();
            $archivo->move(public_path("/images"), $_name_img);

        }else{
            $_name_img = 'product.png';
        }

        Client::create($request->all()+[
            'image'=>$_name_img,
        ]);

        Alert::alert()->success($request->name,'¡Se registró correctamente el cliente! ');
        return redirect()->route('clients.index');
       
    }

    public function flashstore(StoreRequest $request)
    {
        if( $archivo = $request->file('picture')){
            $_name_img = time()."-".$archivo->getClientOriginalName();
            $archivo->move(public_path("/images"), $_name_img);

        }else{
            $_name_img = 'product.png';
        }
        
        Client::create($request->all()+[
            'image'=>$_name_img,
        ]);
        
        Alert::alert()->success($request->name,'¡Se registró correctamente el cliente! ');
        return redirect()->route('sales.create');
       
    }

    public function show( Client $client)
    {   $imgusers= Auth::user()->image;
        $business = Bunises::where('id', 1)->firstOrFail();
        $total_purchases = 0;
        foreach ($client->sales as $key =>  $sale) {
            $total_purchases+=$sale->total;
        }
       
        return view('admin.clients.show', compact('client','total_purchases','imgusers','business'));
    }


    public function edit($id)
    {$imgusers= Auth::user()->image;
        $business = Bunises::where('id', 1)->firstOrFail();
        $client = Client::findOrFail($id);
        return view('admin.clients.edit', compact('client','imgusers','business'));
    }

 
    public function update(UpdateRequest $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->update($request->all());
        Alert::alert()->success($request->name,'¡Se actualizo correctamente el cliente!');
        return redirect()->route('clients.index');
    }

    public function destroy($id)
    {   
        $client = Client::findOrFail($id);
        $client->delete();
        Alert::alert()->success('¡Se elimino correctamente el cliente!');
        return redirect()->back();
    }

    
}
