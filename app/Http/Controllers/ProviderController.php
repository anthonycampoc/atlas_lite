<?php

namespace App\Http\Controllers;

use App\Http\Requests\Provider\StoreRequest;
use App\Http\Requests\Provider\UpdateRequest;
use App\Models\Bunises;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProviderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:providers.create')->only(['create','store']);
        $this->middleware('can:providers.index')->only(['index']);
        $this->middleware('can:providers.edit')->only(['edit','update']);
        $this->middleware('can:providers.show')->only(['show']);
        $this->middleware('can:providers.destroy')->only(['destroy']);
    }
    public function index()
    {  
        $imgusers= Auth::user()->image;
           $business = Bunises::where('id', 1)->firstOrFail();
        $providers = Provider::all();
        return view('admin.providers.index', compact('providers','imgusers','business'));
    }

  
    public function create()
    { 
        $imgusers= Auth::user()->image;
        $business = Bunises::where('id', 1)->firstOrFail();


        return view('admin.providers.create', compact('imgusers','business'));
    }

  
    public function store(StoreRequest $request)
    {
    
        Provider::create($request->all());
        Alert::alert()->success($request->name,'¡Se registró correctamente el proveedor!');

        return redirect()->route('providers.index');
    }

    public function show($id)
    {   $imgusers= Auth::user()->image;
        $provider = Provider::findOrFail($id);
        $business = Bunises::where('id', 1)->firstOrFail();
        return view('admin.providers.show', compact('provider','imgusers','business'));
    }

  
    public function edit($id)

    {   $imgusers= Auth::user()->image;
        $provider = Provider::findOrFail($id);
           $business = Bunises::where('id', 1)->firstOrFail();
        return view('admin.providers.edit', compact('provider','imgusers','business'));
    }

    public function update(UpdateRequest $request,  $id)
    {
            $provider = Provider::findOrFail($id);
            $update = $request->all();
            $provider->update($update);
            Alert::alert()->success($request->name,'¡Se actualizo correctamente el proveedor!');
            return redirect()->route('providers.index');

    }

    public function destroy($id)
    {
        $provider = Provider::findOrFail($id);
        $provider->delete();
        Alert::alert()->success('¡Se elimino correctamente el proveedor!');
        return redirect()->route('providers.index');
    }
}
