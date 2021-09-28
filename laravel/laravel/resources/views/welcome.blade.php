@extends('layout.plantilla')
@section('titulo','wecome')
@section('tituloDePagina','📖"Bienvenido  A Tu Manual De Laravel" 👋')
@section('contenido')
<div class="row mt-5">
    <div class="col-sm-8">
        <h3>¿ Que es Laravel ?🤷‍♂️</h3>
        <p>Laravel es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP 5, PHP 7 y PHP 8
          Su filosofía es desarrollar código PHP de forma elegante y simple, evitando el "código espagueti"
          Fue creado en 2011 y tiene una gran influencia de frameworks como Ruby on Rails, Sinatra y ASP.NET MVC.2</p>
    </div>
<div class="col mt-5">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('img/lara.jpg')}}" alt="Card image cap" height="220rem">
  
</div>
</div>
</div>
<div class="row">
  <div class="col-sm-8">
    <h3>
      ¿Hay varios tipos de Laravel?💡
    </h3>
      <p>       
        Contar con una amplia comunidad (una de las grandes ventajas de Laravel, que veremos más adelante) hace que este programa se mantenga en constante evolución.
     <br>
     Las versiones conocidas de Laravel son las siguientes:
     <br>
     ✔️ Laravel 5.3.
     <br>
     ✔️ Laravel 5.4.
     <br>
     ✔️ Laravel 5.5: a partir de esta versión, son las mejores opciones para dar tus primeros pasos con esta herramienta.
     <br>
     ✔️ Laravel 5.6.
     <br>
      ✔️ Laravel 6.
      <br>
      ✔️ Laravel 7: la versión que dio el salto cualitativo más importantes de todos
      <br>
      ✔️ Laravel 8: la última versión estable. Mejora el sistema de rutas y namespace, la landing de inicio y el sistema de plantillas y maquetación.
      </p>
  </div>
</div>
<div class="row mt-5">
  <div class="col-sm-5">
    <h4><div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{asset('img/la.jpg')}}" alt="Card image cap" height="220rem" >
  </div>
    </div>
    <div class="col-sm-6">
     <h3> ¿Cuándo y por qué elegir Laravel?❤️  </h3>
     <p>
      Antes mencionamos las características que posee esta herramienta de desarrollo web, ahora debemos ver realmente qué es Laravel y por qué destaca por encima de otras herramientas similares.
     <br>
     <h3>Las ventajas de Laravel abarcan: 🙈</h3>
     <br>
     💡 Su integración a otros sistemas y bibliotecas
     <br>
     💡 Su escalabilidad.
     <br>
     💡 Su facilidad en el mantenimiento.
     <br>
     💡 Sirve de forma especial para aquellos que usen un framework por primera vez.
    </p>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <p>Ahora, ¿cuándo elegir Laravel y en qué proyectos encaja mejor? No todos los proyectos funcionan mejor con este framework PHP, por lo que debes estar atento.</p>
        <h4>Laravel es especialmente útil cuando:🙎‍♂️</h4>
        <br>
        ☑️ Requerimos un desarrollo a la medida, seguro, ágil y con escalabilidad y mantenimiento (es decir, todo lo que mencionamos antes 😋).
        <br>
        ☑️ Si los CMS no cumplen con cubrir las necesidades que le pedimos a una aplicación web.
        <br>
        ☑️ Si necesitamos que nuestra solución web esté integrada con más aplicaciones (ERP's, Google, entre otras).
      </div>
      <div class="col-sm-5">
        <h4><div class="card" style="width: 18rem;">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('img/la.jpg')}}" class="d-block w-100" height="200px" width="100px">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/lara.jpg')}}" class="d-block w-100" height="200px " width="100pxs">
              </div>
            </div>
          </div>
      </div>
      <div class="col"></div>
    </div>
</div>
@endsection