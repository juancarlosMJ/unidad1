@extends('layout.plantilla')
@section('titulo','antropometicos')
@section('tituloDePagina',' ¿ Que Son rutas en laravel ? 😊')
@section('contenido')
 <div class="container mt-5">
     <div class="row">
         <div class="col-sm-10">
             <p>
                El sistema de Rutas de Laravel es bastante intuitivo y fácil de manejar, pero a la vez muy potente, con éste podemos crear todo tipo de rutas en la aplicación: sencillas o complejas. En esta lección aprenderás cómo crear tus primeras rutas en un proyecto de Laravel.
             <br>
             Se escribe la clase Route que llama al método relacionado con el verbo HTTP, en este caso, get que acepta dos parámetros: el primero es la URL que se llamará desde el navegador y el segundo es una función anónima que devuelve lo que queremos mostrar.
             <br>
             Para ver la ruta en funcionamiento debemos escribir en el navegador algo como: http://tu-proyecto.dev/esta-es-la-url, esto dependiendo de VirtualHost que hayas creado para tu proyecto. Si no lo tienes puedes usar php artisan serve o revisar la primera lección de este curso donde te explicamos cómo preparar tu entorno de desarrollo.
            </p>
         </div>
         ☑️ se visualiza como se crean las rutas
         <br> 
         <br>
         <center><div class="card" style="width: 40rem;">
            <img class="card-img-top" src="{{asset('img/rutas.jpg')}}" alt="Card image cap" height="280rem">
            </div></center>
     </div>
     ☑️ se visualiza como se crean mis metodos mando a llamar a mis vistas 
     <br>

     <center><div class="card" style="width: 20rem;">
        <img class="card-img-top" src="{{asset('img/rutas1.jpg')}}" alt="Card image cap" height="400rem">
        </div></center>
        ☑️ se visualiza como se crean los modulos
        <br>
   
        <center><div class="card" style="width: 20rem;">
           <img class="card-img-top" src="{{asset('img/rutas2.jpg')}}" alt="Card image cap" height="300rem">
           </div></center>
 </div>
@endsection
