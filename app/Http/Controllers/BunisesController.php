<?php

namespace App\Http\Controllers;

use App\Http\Requests\Bunises\UpdateRequest;
use App\Models\Bunises;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BunisesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:business.index')->only(['index']);
        $this->middleware('can:business.edit')->only(['update']);
    }
    
    public function index()
    {
        $business = Bunises::where('id', 1)->firstOrFail();
        $imgusers= Auth::user()->image;
        return view('admin.business.index', compact('business','imgusers'));

    }

    public function update(Request $request, $id)
    {
    
        $product = Bunises::findOrFail($id);
        $_name_img ='';
        if($archivo = $request->file('picture')){
          
            $_name_img = time()."-".$archivo->getClientOriginalName();
            $archivo->move(public_path("/images"), $_name_img);

        }else{
            $_name_img ='logo23.svg';
        }
        $product->update($request->all()+[
            'logo'=>$_name_img,
        ]);

        Alert::alert()->success($request->name,'¡Se actualizo los datos de la empresa! ');
        return redirect()->route('business.index');

        //return $request;
    }

   
}
