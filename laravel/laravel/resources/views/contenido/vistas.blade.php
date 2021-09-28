@extends('layout.plantilla')
@section('titulo','vistas con Blade en Laravel')
@section('tituloDePagina',' ')
@section('contenido')
<div class="row mt-4">
    <div class="col-sm-12">
        <center><h3>🤷‍♂️¿ Vistas con Blade en Laravel ?💡</h3>
            <br>
        <p>Las vistas en Laravel son la parte pública que el usuario de nuestro sistema va a poder ver, se escriben en HTML junto con un motor de plantillas llamado Blade. 
            Las vistas se encuentran ubicadas en la carpeta resources/views/ y Laravel por defecto trabaja con la idea de que tenemos que escribir la menor cantidad de código repetido, modularizar nuestro código en donde mas se pueda, y si esto lo aplicamos en nuestros modelos, controladores y demás partes de nuestro proyecto, entonces,.
        <br>
        <br>
        Laravel usa unos archivos que se llaman plantillas o
         templates que suelen ser nuestros archivos principales, 
         que tienen los segmentos de código que se repiten en mas de una vista,
          como por ejemplo la barra de navegacion, un menú de opciones, la estructura 
          del acomodo de nuestro proyecto, etc. y como deben de estar practicamente
           presentes en todos lados, no tiene sentido estarlos repitiendo en todas las vistas.
            Por defecto Laravel contiene un template llamado app.blade.php, 
            usualmente los templates contienen el head del HTML,
         las ligas del CSS del sistema y una seccion exclusiva para los archivos Javascript.
         <center><div class="card" style="width: 30rem;">
            <img class="card-img-top" src="{{asset('img/control6.jpg')}}" alt="Card image cap" height="150rem">
            </div></center>
            <br>
            cramos una nueva carpta y la nombramos layout creamos un nuevo documento la nombramos platilla blade
            <center><div class="card" style="width: 60rem;">
                <img class="card-img-top" src="{{asset('img/control7.jpg')}}" alt="Card image cap" height="500rem">
                </div></center>
        </p>
    </div>
</div>
</div>
</div>

    
@endsection
