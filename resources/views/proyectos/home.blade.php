@extends('layouts.plantilla')
@section('title','ISI')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
@section('content')

<div class="container border">
   
    <h1>INGENIERÍA DE SOFTWARE I</h1>
<P>Técnicas de estimación de costos</P>
<p>Las ecuaciones del modelo COCOMO básico son de la forma: 
    E = a * KLOC^b  --    D = c * E^d   --  P = E/D  </p>
    <p>
E es el esfuerzo aplicado en persona-mes,</p>
<p>D es el tiempo de desarrollo en meses y</p>
    <p>KLOC es el número de miles de líneas de código estimado para el proyecto. </p>
        <p>Los coeficientes a y c y los exponentes b y d se obtienen de la siguiente tabla: 
</p>

</div>
<br>
<br>
<br>
<br>
@endsection