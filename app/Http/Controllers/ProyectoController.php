<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function home()
    {
        
        return view('proyectos.home');
    }
    public function index()
    {
        $proyectos = Proyecto::orderBy('id','desc')->paginate();
        return view('proyectos.index', compact('proyectos'));
    }
    public function create()
    {
        return view('proyectos.create');
    }
    public function store(Request $request){
     $proyecto = new Proyecto();

     $proyecto->nombreproyecto = $request->nombre;
     $proyecto->nombremodulo = $request->modulo;
     $proyecto->opt = $request->opt;
     $proyecto->medio = $request->med;
     $proyecto->pes = $request->pes;
     
     $proyecto->nombremodulo2 = $request->modulo2;
     $proyecto->opt2 = $request->opt2;
     $proyecto->medio2 = $request->med2;
     $proyecto->pes2 = $request->pes2;
     
     $proyecto->nombremodulo3 = $request->modulo3;
     $proyecto->opt3 = $request->opt3;
     $proyecto->medio3 = $request->med3;
     $proyecto->pes3 = $request->pes3;

     $proyecto->tipoproyecto = $request->tipo;
    
     $t = $proyecto->tipoproyecto;
     $n1 =  $proyecto->opt;
     $n2 = $proyecto->medio;
     $n3 = $proyecto->pes;
     $tot= ($n1 + (4 * $n2) + $n3)/6;

     $n11 =  $proyecto->opt2;
     $n22 = $proyecto->medio2;
     $n33 = $proyecto->pes2;
     $tot1= ($n11 + (4 * $n22) + $n33)/6;

     $n111 =  $proyecto->opt3;
     $n222 = $proyecto->medio3;
     $n333 = $proyecto->pes3;
     $tot2= ($n111 + (4 * $n222) + $n333)/6;
 
     $total=$tot + $tot1 + $tot2;
     if ($t ==1){
        $e=2.4*($total**1.05);
        $d=2.5*($e**0.38);
        $p=round(($e/$d));
        
     }
     if ($t ==2){
        $e=3*($total**1.12);
        $d=2.5*($e**0.35);
        $p=round(($e/$d));
        
     }
     if ($t ==3){
        $e=3.6*($total**1.2);
        $d=2.5*($e**0.32);
        $p=round(($e/$d));
        
     }
     $proyecto->esp = $tot;
     $proyecto->esp2 = $tot1;
     $proyecto->esp3 = $tot2;
     $proyecto->esf = $e;
     $proyecto->dur = $d;
     $proyecto->per = $p;

     $proyecto->save();

     return redirect()->route('proyectos.show',$proyecto);
    }
   
    
    
    public function show(Proyecto $proyecto)
    {
        return view('proyectos.show', compact ('proyecto'));
    }
}
