<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<style>
    body{
      background-color:azure ;
      background-repeat:no-repeat;
      background-size:cover;
     
    }
  </style>

<title>@yield('title')</title>
</head>
<body>
    <div class="container">
      <nav class="btn btn-primary">
        <a href="{{route('proyectos.home')}}" class="btn btn-primary active" aria-current="page">Inicio</a>
        <a href="{{route('proyectos.create')}}" class="btn btn-primary" aria-current="page">Crear nuevo proyecto</a>
        <a href="{{route('proyectos.index')}}" class="btn btn-primary">Todos los proyectos</a>  
    </nav>
    </div>
      
     
    
    
    @yield('content')

    <br>
    <br>
    <br>
    
    <div class="footer-copyright text-center py-3">© 2022 Copyright:
        <a href="https://mdbootstrap.com/"> Elizabet Alejandra Matoso</a>
      </div>
</body>

</html>