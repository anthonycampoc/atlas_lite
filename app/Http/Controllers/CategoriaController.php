<?php

namespace App\Http\Controllers;

use App\Http\Requests\Categoria\StoreRequest;
use App\Http\Requests\Categoria\UpdateRequest;
use App\Models\Bunises;
use App\Models\Categoria;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:categories.create')->only(['create','store']);
        $this->middleware('can:categories.index')->only(['index']);
        $this->middleware('can:categories.edit')->only(['edit','update']);
        $this->middleware('can:categories.show')->only(['show']);
        $this->middleware('can:categories.destroy')->only(['destroy']);
    }
    public function index()
    {
        $imgusers= Auth::user()->image;
        $categoria = Categoria::all();
        $business = Bunises::where('id', 1)->firstOrFail();
       
        return view('admin.categories.index', compact('categoria','imgusers','business'));
    }

  
    public function create()
    {
        $imgusers= Auth::user()->image;
        $business = Bunises::where('id', 1)->firstOrFail();
        return view('admin.categories.create', compact('imgusers','business'));
    }

   
    public function store(StoreRequest $request)
    {
        Categoria::create($request->all());
        Alert::alert()->success($request->name,'Categoria Registrada');
        return redirect()->route('categories.index');
    }

  
    public function show($id)
    {
        $imgusers= Auth::user()->image;
        $business = Bunises::where('id', 1)->firstOrFail();
        $categoria = Categoria::findOrFail($id);
        return view('admin.categories.show', compact('categoria','imgusers','business'));
    }

   
    public function edit($id)
    {   
        $imgusers= Auth::user()->image;
        $business = Bunises::where('id', 1)->firstOrFail();
        $categoria = Categoria::findOrFail($id);
        return view('admin.categories.edit', compact('categoria','imgusers','business'));
    }

    
    public function update(UpdateRequest $request, $id)
    {
        //dd($request);
        $categoria = Categoria::findOrFail($id);
        $update = $request->all();
        Alert::alert()->success($request->name,'Categoria Actualizada');
        $categoria->update($update);
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        Alert::alert()->success('Eliminada','Categoria ');
        return redirect()->route('categories.index');
    }
}
