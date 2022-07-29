@extends('layouts.plantilla')
@section('title','ISI')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
@section('content')
<div class="container border">
    <h1 class="text-center">PROYECTOS</h1>
    
    <ul>
        @foreach ($proyectos as $proyecto)
        
        <li>
           <a href="{{route('proyectos.show', $proyecto->id)}}" class="link-secondary"> {{$proyecto->nombreproyecto}} </a>
        
        </li>
        
        
        @endforeach

    </ul>
    
    {{$proyectos->links()}}
</div>
@endsection

