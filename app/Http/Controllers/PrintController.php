<?php

namespace App\Http\Controllers;

use App\Http\Requests\Printer\UpdateRequest;
use App\Models\Bunises;
use App\Models\Printer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PrintController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:printers.index')->only(['index']);
        $this->middleware('can:printers.edit')->only(['update']);
    }
    
    public function index()
    {
            $imgusers= Auth::user()->image;
            $business = Bunises::where('id', 1)->firstOrFail();
            $printer = Printer::where('id', 1)->firstOrFail();

            return view('admin.printers.index', compact('printer','imgusers','business'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $printers = Printer::findOrFail($id);
        $printers->update($request->all());
        Alert::alert()->success($request->name,'Impresora Actualizada');

        return  redirect()->route('printers.index');
    }


}
