@extends('layouts.plantilla')
@section('title','Nuevo proyecto')

@section('content')
<div class="container border">
<h1>Nuevo Proyecto</h1>

<form action="{{route('proyectos.store')}}" method="POST">
@csrf
<label for="">Nombre del Proyecto: 

<input type="text" name="nombre">
</label>
<br>
<br>
<label for="">Nombre del Modulo 1: 
    <input type="text" name="modulo">
    
</label>

<input type="text" name="opt" placeholder="KLOC optimistas">
<input type="text" name="med" placeholder="KLOC media">
<input type="text" name="pes" placeholder="KLOC pesimistas">

<br>
<br>
<label for="">Nombre del Modulo 2: 
    <input type="text" name="modulo2">
    
</label>
<input type="text" name="opt2" placeholder="KLOC optimistas">
<input type="text" name="med2" placeholder="KLOC media">
<input type="text" name="pes2" placeholder="KLOC pesimistas">
<br>
<br>
<label for="">Nombre del Modulo 3: 
    <input type="text" name="modulo3">
    
</label>
<input type="text" name="opt3" placeholder="KLOC optimistas">
<input type="text" name="med3" placeholder="KLOC media">
<input type="text" name="pes3" placeholder="KLOC pesimistas">

<br>
<br>
<label for="">Tipo de proyecto: 
<select name="tipo" id="">
    <option value="1">ORGANICO</option>
    <option value="2">SEMIACOPLADO</option>
    <option value="3">EMPOTRADO</option>
</select>
</label>
<br>
<br>
<button type="submit" class="btn btn-primary active">Calcular</button>
</form>
<div class="container border">
@endsection