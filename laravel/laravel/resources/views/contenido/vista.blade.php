@extends('layout.plantilla')
@section('titulo','')
@section('tituloDePagina',' ')
@section('contenido')
<div class="row mt-5">
    <div class="col-sm-8">
        <h3>🤨¿ Que Es Una Vista En Laravel ?🤔</h3>
        <p>Las vistas son una de las capas que tiene el sistema MVC, que trata de la separación del código según sus responsabilidades. 
            En este caso, las vistas mantienen el código de lo que sería la capa de presentación.
        <br>
        Como capa de presentación, las vistas se encargan de
         realizar la salida de la aplicación que generalmente en el
          caso de PHP será código HTML. Por tanto, una vista será un archivo 
          PHP que contendrá mayoritariamente código HTML, que se enviará al navegador
           para que éste renderice la salida para el usuario.(abrimos nuestro editor de codigo)
        </p>
    </div>
<div class="col mt-5">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('img/v1.jpg')}}" alt="Card image cap" height="220rem">
  
</div>
</div>
</div>
<div class="row">
  <div class="col-sm-8">
    <h3>
      ¿Como creamos una vista?💡
    </h3>
    ✔️ Ir al path vistas que esta en: 
    <br>
    💡 resourses/views
    <br>
    ✔️Crearemos un archivo nuevo con la extencion blade y php de la siguiente manera
    <br>
    💡 nuevaVista.blade.php
    <br>
    ✔️ Blade es un motor  de plantilla de laravel,este servirapara poder extender 
        crear estilos y crear plantillas,por que lo que aun que nose usa algunas herencias se recomienda 
        que su use blade en la vista creada
        <br> 
    💡 resourses/views

    <div class="row mt-5">
        <div class="col">
            <p>
                ☑️Crearemos una vista nueva nos vemos a views->nuevo archivo en este caso lo nombrare contacto.
                Hemos creado nuestra vista
            </p>
            <center><div class="card" style="width: 30rem;">
                <img class="card-img-top" src="{{asset('img/v2.jpg')}}" alt="Card image cap" height="220rem">
                </div></center>
                <br>
                <h4>☑️Le agregamos una estructura html como se muestra en la imagen😏 
                </h4>
                <center><div class="card" style="width: 30rem;">
                    <img class="card-img-top" src="{{asset('img/v3.jpg')}}" alt="Card image cap" height="220rem">
                    </div></center>
                <p>☑️Crearemos una ruta -->web creamos una ruta😏</p>
                <center><div class="card" style="width: 30rem;">
                    <img class="card-img-top" src="{{asset('img/v4.jpg')}}" alt="Card image cap" height="220rem">
                    </div></center>
                    <br>
                    <h4>☑️Se pude ver la vista en nuestra direccion que arroja larvael😏</h4>
                    <center><div class="card" style="width: 40rem;">
                        <img class="card-img-top" src="{{asset('img/v4.jpg')}}" alt="Card image cap" height="280rem">
                        </div></center>
                        <br>
                        <h4>☑️Se ya se pude ver la vista creada 😏</h4>
                        <center><div class="card" style="width: 40rem;">
                            <img class="card-img-top" src="{{asset('img/v5.jpg')}}" alt="Card image cap" height="280rem">
                            </div></center>
        </div>
    </div>
    
@endsection
