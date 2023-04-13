<?php

namespace App\Http\Controllers;

use App\Http\Requests\Abono\StoreRequest;
use App\Models\Abono;
use App\Models\Bunises;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AbonoController extends Controller
{
   
    public function index()
    {
    

    }

    public function create()
    {
        return view('admin.abonos.create');
    }


    public function store(StoreRequest $request)
    {

        $fechaE = $request->start;
        // $fechaA = Carbon::now()->format('Y-m-d');

        // $datetime1 = date_create($fechaE);
        // $datetime2 = date_create($fechaA);

        // $ch = date_diff($datetime1,$datetime2);

        // $differenceformat = '%a';

        // $dias = $ch->format($differenceformat);

        // dd($dias);

        $total = 0;
        $saldo = $request->saldo;
        $abono = $request->abono;
        $saldo2 = $request->saldo2;
        $total_sale = $request->total_sale;

        if($abono>$saldo ){ 
            Alert::alert()->error("Abono ingresado"." $".$request->abono,'El abano es mayor que el del saldo');
            return redirect()->back();

        }else if($saldo > $total_sale){
                 Alert::alert()->error("Abono ingresado"." $".$request->abono,'el saldo es mayor que el abono');
                return redirect()->back();
        }
        else if ($saldo2 != $saldo){
            
            Alert::alert()->error("Abono ingresado"." $".$request->abono,'el saldo es incorrecto');
            return redirect()->back();

        }else {
             
            $total = $saldo - $abono;
            $id = $request->sale_id;
            $descripcion = $request->descripcion;
         
            Abono::create([
                'sale_id' =>$id,
                'abono' => $abono,
                'saldo' => $total,
                'abono_date' => Carbon::now('America/Guayaquil'),
                'descripcion' => $descripcion,
                'fechaE' => $fechaE,
            ]);
    
            Alert::alert()->success("Abono ingresado"." $".$request->abono);
            DB::select(DB::raw('UPDATE `sales` SET  `abono` =:total, `fechaE` = :fechaE WHERE `sales`.`id` = :id '), array('id'=>$id, 'total'=>$total,'fechaE'=>$fechaE));
            return redirect()->back();
        }
       



    }

  

  
    public function show(Abono $abono)
    {
       
    
    }


    public function edit(Abono $abono)
    {
        
    }

    public function update(Request $request, Abono $abono)
    {

        
    }

    public function destroy($id)
    {
        $delete = Abono::findOrFail($id);
        $delete->delete();
        return redirect()->back();
    }
}
