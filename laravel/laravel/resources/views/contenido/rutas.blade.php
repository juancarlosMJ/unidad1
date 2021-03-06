@extends('layout.plantilla')
@section('titulo','antropometicos')
@section('tituloDePagina',' 驴 Que Son rutas en laravel ? 馃槉')
@section('contenido')
 <div class="container mt-5">
     <div class="row">
         <div class="col-sm-10">
             <p>
                El sistema de Rutas de Laravel es bastante intuitivo y f谩cil de manejar, pero a la vez muy potente, con 茅ste podemos crear todo tipo de rutas en la aplicaci贸n: sencillas o complejas. En esta lecci贸n aprender谩s c贸mo crear tus primeras rutas en un proyecto de Laravel.
             <br>
             Se escribe la clase Route que llama al m茅todo relacionado con el verbo HTTP, en este caso, get que acepta dos par谩metros: el primero es la URL que se llamar谩 desde el navegador y el segundo es una funci贸n an贸nima que devuelve lo que queremos mostrar.
             <br>
             Para ver la ruta en funcionamiento debemos escribir en el navegador algo como: http://tu-proyecto.dev/esta-es-la-url, esto dependiendo de VirtualHost que hayas creado para tu proyecto. Si no lo tienes puedes usar php artisan serve o revisar la primera lecci贸n de este curso donde te explicamos c贸mo preparar tu entorno de desarrollo.
            </p>
         </div>
         鈽戯笍 se visualiza como se crean las rutas
         <br> 
         <br>
         <center><div class="card" style="width: 40rem;">
            <img class="card-img-top" src="{{asset('img/rutas.jpg')}}" alt="Card image cap" height="280rem">
            </div></center>
     </div>
     鈽戯笍 se visualiza como se crean mis metodos mando a llamar a mis vistas 
     <br>

     <center><div class="card" style="width: 20rem;">
        <img class="card-img-top" src="{{asset('img/rutas1.jpg')}}" alt="Card image cap" height="400rem">
        </div></center>
        鈽戯笍 se visualiza como se crean los modulos
        <br>
   
        <center><div class="card" style="width: 20rem;">
           <img class="card-img-top" src="{{asset('img/rutas2.jpg')}}" alt="Card image cap" height="300rem">
           </div></center>
 </div>
@endsection
