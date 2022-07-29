@extends('layouts.plantilla')
@section('title','ISI')

@section('content')
<div class="container border">
<h1> Proyecto: {{$proyecto->nombreproyecto}} </h1>

<div class="container">
    <div class="row">
      <div class="col">
        <p><strong>Módulo: </strong>{{$proyecto->nombremodulo}}</p>
        <p> <strong> Cantidad de KLOC optimistas: </strong>{{$proyecto->opt}}</p>
        <p> <strong> Cantidad de KLOC medio: </strong>{{$proyecto->medio}}</p>
        <p> <strong> Cantidad de KLOC pesimistas: </strong>{{$proyecto->pes}}</p>
        <p> <strong> Total de lineas esperadas: </strong>{{$proyecto->esp}}</p>
       <br>
      </div>
      <div class="col">
        <p><strong>Módulo: </strong>{{$proyecto->nombremodulo2}}</p>
        <p> <strong> Cantidad de KLOC optimistas: </strong>{{$proyecto->opt2}}</p>
        <p> <strong> Cantidad de KLOC medio: </strong>{{$proyecto->medio2}}</p>
        <p> <strong> Cantidad de KLOC pesimistas: </strong>{{$proyecto->pes2}}</p>
        <p> <strong> Total de lineas esperadas: </strong>{{$proyecto->esp2}}</p>
        <br>
      </div>
      <div class="col">
        <p><strong>Módulo: </strong>{{$proyecto->nombremodulo3}}</p>
        <p> <strong> Cantidad de KLOC optimistas: </strong>{{$proyecto->opt3}}</p>
        <p> <strong> Cantidad de KLOC medio: </strong>{{$proyecto->medio3}}</p>
        <p> <strong> Cantidad de KLOC pesimistas: </strong>{{$proyecto->pes3}}</p>
        <p> <strong> Total de lineas esperadas: </strong>{{$proyecto->esp3}}</p>
        <br>
        <br>
      </div>
    </div>
  </div>
  

  

    <div class="row">
        <div class="col-5">
    <p class="text-success"><strong>Aplicación de COCOMO BÁSICO</strong></p>
    <p class="text-success"> <strong> Esfuerzo en personas mes: </strong>{{$proyecto->esf}}</p>
    <p class="text-success"> <strong> Duración en meses: </strong>{{$proyecto->dur}}</p>
    <p class="text-success"> <strong> Cantidad de personas necesarias: </strong>{{$proyecto->per}}</p>
    <br>
        </div>
    </div>
   
</div>

@endsection
    