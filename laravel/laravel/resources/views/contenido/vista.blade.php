@extends('layout.plantilla')
@section('titulo','')
@section('tituloDePagina',' ')
@section('contenido')
<div class="row mt-5">
    <div class="col-sm-8">
        <h3>馃え驴 Que Es Una Vista En Laravel ?馃</h3>
        <p>Las vistas son una de las capas que tiene el sistema MVC, que trata de la separaci贸n del c贸digo seg煤n sus responsabilidades. 
            En este caso, las vistas mantienen el c贸digo de lo que ser铆a la capa de presentaci贸n.
        <br>
        Como capa de presentaci贸n, las vistas se encargan de
         realizar la salida de la aplicaci贸n que generalmente en el
          caso de PHP ser谩 c贸digo HTML. Por tanto, una vista ser谩 un archivo 
          PHP que contendr谩 mayoritariamente c贸digo HTML, que se enviar谩 al navegador
           para que 茅ste renderice la salida para el usuario.(abrimos nuestro editor de codigo)
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
      驴Como creamos una vista?馃挕
    </h3>
    鉁旓笍 Ir al path vistas que esta en: 
    <br>
    馃挕 resourses/views
    <br>
    鉁旓笍Crearemos un archivo nuevo con la extencion blade y php de la siguiente manera
    <br>
    馃挕 nuevaVista.blade.php
    <br>
    鉁旓笍 Blade es un motor  de plantilla de laravel,este servirapara poder extender 
        crear estilos y crear plantillas,por que lo que aun que nose usa algunas herencias se recomienda 
        que su use blade en la vista creada
        <br> 
    馃挕 resourses/views

    <div class="row mt-5">
        <div class="col">
            <p>
                鈽戯笍Crearemos una vista nueva nos vemos a views->nuevo archivo en este caso lo nombrare contacto.
                Hemos creado nuestra vista
            </p>
            <center><div class="card" style="width: 30rem;">
                <img class="card-img-top" src="{{asset('img/v2.jpg')}}" alt="Card image cap" height="220rem">
                </div></center>
                <br>
                <h4>鈽戯笍Le agregamos una estructura html como se muestra en la imagen馃槒 
                </h4>
                <center><div class="card" style="width: 30rem;">
                    <img class="card-img-top" src="{{asset('img/v3.jpg')}}" alt="Card image cap" height="220rem">
                    </div></center>
                <p>鈽戯笍Crearemos una ruta -->web creamos una ruta馃槒</p>
                <center><div class="card" style="width: 30rem;">
                    <img class="card-img-top" src="{{asset('img/v4.jpg')}}" alt="Card image cap" height="220rem">
                    </div></center>
                    <br>
                    <h4>鈽戯笍Se pude ver la vista en nuestra direccion que arroja larvael馃槒</h4>
                    <center><div class="card" style="width: 40rem;">
                        <img class="card-img-top" src="{{asset('img/v4.jpg')}}" alt="Card image cap" height="280rem">
                        </div></center>
                        <br>
                        <h4>鈽戯笍Se ya se pude ver la vista creada 馃槒</h4>
                        <center><div class="card" style="width: 40rem;">
                            <img class="card-img-top" src="{{asset('img/v5.jpg')}}" alt="Card image cap" height="280rem">
                            </div></center>
        </div>
    </div>
    
@endsection
