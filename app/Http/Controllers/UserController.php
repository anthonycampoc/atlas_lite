<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\Bunises;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('can:users.create')->only(['create','store']);
        $this->middleware('can:users.index')->only(['index']);
        $this->middleware('can:users.edit')->only(['edit','update']);
        $this->middleware('can:users.show')->only(['show']);
        $this->middleware('can:users.destroy')->only(['destroy']);
    }

    public function index()
    {
        $users = User::all();
        $imgusers= Auth::user()->image;
           $business = Bunises::where('id', 1)->firstOrFail();
        return view('admin.users.index', compact('users','imgusers','business'));
    }

 
    public function create()
    {
        $roles = Role::all();
         $imgusers= Auth::user()->image;
           $business = Bunises::where('id', 1)->firstOrFail();
        return view('admin.users.create', compact('roles','imgusers','business'));
    }

    public function store(StoreRequest $request, User $user)
    {
       
        if( $archivo = $request->file('picture')){
            $_name_img = time()."-".$archivo->getClientOriginalName();
            $archivo->move(public_path("/images"), $_name_img);

        }else{
            $_name_img = 'user.png';
        }
        
        $user =User::create($request->all()+[
            'image'=>$_name_img,
        ]);

        $user->update(['password'=>Hash::make($request->password)]);
        $user->roles()->sync($request->get('roles'));
        Alert::alert()->success($request->name,'¡Se registró correctamente el usuario!');
        return redirect()->route('users.index');

    }
    public function show( User $user)
    {  $imgusers= Auth::user()->image;
           $business = Bunises::where('id', 1)->firstOrFail();
        $users = User::all();
        $total_purchases = 0;
        foreach ($user->sales as $key =>  $sale) {
            $total_purchases+=$sale->total;
        }

        $total_amount_sold = 0;
        foreach ($user->purchases as $key =>  $purchase) {
            $total_amount_sold+=$purchase->total;
        }
        return view('admin.users.show', compact('user', 'total_purchases', 'imgusers','total_amount_sold','users','business'));
    }

    
    public function edit( User $user)
    { $imgusers= Auth::user()->image;
           $business = Bunises::where('id', 1)->firstOrFail();
        $users = User::all();
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles','users','imgusers','business'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        
  
        $imgusers= Auth::user()->image;
        
        if( $archivo = $request->file('picture')){
          
            $_name_img = time()."-".$archivo->getClientOriginalName();
            $archivo->move(public_path("/images"), $_name_img);

        }else{
            $_name_img = $imgusers;
        }

       
        if($user->id == 1){
            return redirect()->route('users.index');
        }else{

            $user->update($request->all()+[
                'image'=>$_name_img,

            ]);
            $user->roles()->sync($request->get('roles'));

            Alert::alert()->success($request->name,'¡Se actualizo correctamente el usuario!');
            return redirect()->route('users.index');
        }

    }


    public function destroy(User $user)
    {
        if($user->id == 1){
            return back();
        }else{  
            $user->delete();
            Alert::alert()->success('¡Se elimino correctamente el usuario!');
            return back();
        }
  
    }
}
