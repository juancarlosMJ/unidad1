@extends('layout.plantilla')
@section('titulo','vistas con Blade en Laravel')
@section('tituloDePagina',' ')
@section('contenido')
<div class="row mt-4">
    <div class="col-sm-12">
        <center><h3>🤷‍♂️¿ Que Son Los Controladores ?💡</h3>
            <br>
        <p>
            En lugar de definir en su totalidad la lógica de las peticiones en el archivo routes.php, es posible que desee organizar este comportamiento usando clases tipo Controller. 
            Los Controladores puede agrupar las peticiones HTTP relacionada con la manipulación lógica en una clase. Los Controladores normalmente se almacenan en el directorio de aplicación app/Http/Controllers/.
        <br>
        <br>
        Un controller usualmente trabaja con las peticiones:✨
        <br>
        ✔️ GET.
        <br>
        ✔️ POST.
        <br>
        ✔️ PUT.
        <br>
        ✔️ DELETE
        <br>
        ✔️  PATCH.
        </p>
    </div>
</div>
<div class="row">
    <div class="col"></div>
    <div class="col">
        Asociando los métodos de la siguiente forma:😊
       <center> <br>
        ✔️ GET: index, create, show, edit
        <br>
        ✔️ POST: store.
        <br>
        ✔️ PUT: update.
        <br>
        ✔️ DELETE: destroy.
        <br>
        ✔️  PATCH: update..</center>
        <p>
            
        </p>
    </div>

    <div class="col"></div>
</div>
<div class="row sm-5">
    <div class="col-sm-12">
        <br>
        <p>
            📖Los controladores nos ayudan a agrupar estas peticiones en una clase que se liga a las rutas, en el archivo app/Http/routes.php,
             para esto usamos un tipo de ruta llamana resource para contruir un controlador abrimos
             nuestro editor de codigo posterior mete abrimos la terminal y ingrasmos el siguiente codigo vemos cre ya se creo el controlador <br>
        :
        </p>
        <center><div class="card" style="width: 40rem;">
            <img class="card-img-top" src="{{asset('img/control1.jpg')}}" alt="Card image cap" height="280rem">
            </div></center>
            <br>
            <p>
                ✔️ podemos ver que ya se creo nuestro controlador 
                para ver el controlador creado  vamos a
                app->http>Cotroller.php😊
                <br>
                <center><div class="card" style="width: 40rem;">
                    <img class="card-img-top" src="{{asset('img/control2.jpg')}}" alt="Card image cap" height="280rem">
                    </div></center>
                    <br>
                    ✔️  vamos a nuetras rutas cortamos lo seleccioando✨
                    <br>
                    <center><div class="card" style="width: 30rem;">
                        <img class="card-img-top" src="{{asset('img/control3.jpg')}}" alt="Card image cap" height="220rem">
                        </div></center>
                        <br>
                        ✔️pegamos la ruta a nuestro controlador 🔥
                        <br>
                        <center><div class="card" style="width: 30rem;">
                            <img class="card-img-top" src="{{asset('img/control4.jpg')}}" alt="Card image cap" height="220rem">
                            </div></center>
                            <br>
                            ✔️asociamos nuestra ruta 😊
                            <center><div class="card" style="width: 30rem;">
                                <img class="card-img-top" src="{{asset('img/control5.jpg')}}" alt="Card image cap" height="100rem">
                                </div></center>


            </p>
    </div>
</div>
.

    
@endsection
