@extends('layout.plantilla')
@section('titulo','antropometicos')
@section('tituloDePagina','¿Como Instalar laravel?💁‍♂️')
@section('contenido')
 <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <br>
            <h4>Requerimientos iniciales 📝</h5>
                <br>
                <p>Para empezar a trabajar con Laravel es necesario cumplir
                     con los siguientes requisitos iniciales:✏️
                    <br>
                    <div class="col"></div>
                    ✔️ Un entorno de desarrollo web: Apache, IIS, Nginx PHP 5.3 o superior
                    <br>
                    ✔️ Base de datos: MySQL, Sqlite, Postgresql o sqlserver
                    <br>
                    ✔️ Librerías php : Mcrypt
                    <br>
                    ✔️  Xampp o Lamp 
                    <br>
                    ✔️  Composer

                </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{asset('img/c1.jpg')}}" class="d-block w-100" height="250px" width="100px">
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('img/co.jpg')}}" class="d-block w-100" height="250px " width="100pxs">
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <p><h3>¿Que es Composer?🤷‍♂️</h3></p> 
            <br>
            Es una herramienta para administración de dependencias en PHP. Te permite declarar las librerías de las cuáles tu proyecto depende o necesita y éste las instala en el proyecto por ti.
            <br>
            Composer no es un administrador de paquetes. Sí, él trata con "paquetes" o "librerías", pero las gestiona en función de cada proyecto y no instala nada globalmente en tu equipo, por lo cual solo administra las dependencias del mismo.
        <br>
        Ahora, composer no se limita a su uso unicamente con proyectos Laravel, sino que en Laravel el uso de composer nos facilita el control de dependencias y en la actualización de cada una como se explicó anteriormente. Para este curso se trabajará con este archivo pues es el que se va a crear al momento de instalar Laravel.
        </div>
        <div class="col"></div>
    </div>
    <div class="row mt-5 ">
        <div class="col-sm-12">
            <h2>📀 Instalación de XAMPP (Windows) 📚</h2>
            <p>
                ✔️ Te dirigues a tu navegador en la barra de navegacion escribes "xampp descargar"
                    Das clic en Download XAMPP abriara una ventana nueva verifica el tipo de
                    arquitectura de tu computadora si es de 32bits,64bits clic en descarga
            </p>        
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('img/xa.jpg')}}" alt="Card image cap" height="220rem">
            </div>
        <div class="col-sm-4"></div>
    </div>
 </div>
 <div class="row mt-5">
     <div class="col-sm-12">
         <p>
            ✔️ Una vez descargado el ejecutable, buscarlo en la carpeta de descargas y hacer 
            doble click sobre él y ejecutamos  le damos clic en siguiente 
            
         </p>
     </div>
     <div class="col">
        <center><div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('img/x1.jpg')}}" alt="Card image cap" height="220rem">
            </div></center>
            <br>
            <p> ✔️ Al hacer doble click sobre el ejecutable descargado, comenzará la instalación 
                en sí. En primer lugar saldrá la siguiente pantalla de instalación</p>
            <center><div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('img/x3.jpg')}}" alt="Card image cap" height="220rem">
                </div></center>
            <br>
            <p> ✔️ Al pulsar siguiente:</p>
            <center><div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('img/x5.jpg')}}" alt="Card image cap" height="220rem">
                </div></center>
     </div>
     <p>✔️ Al pulsar siguiente:</p>
     <div class="col">
        <center><div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('img/x2.jpg')}}" alt="Card image cap" height="220rem">
            </div></center>
            <p>✔️ Clic en siguiente </p>
            <br>
            <center><div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('img/x4.jpg')}}" alt="Card image cap" height="220rem">
                </div></center>
     </div>
 </div>
 <div class="row mt-5">
     <div class="col-sm-12"><br>
         <center><h3>📀Instalación de composer (Windows)📀</h3></center>
         <p>La forma más sencilla de instalar Composer en tu ordenador Windows consiste en descargar y ejecutar el archivo Composer-Setup.exe, que instala la versión más reciente de Composer y actualiza el PATH de tu ordenador para que puedas ejecutar Composer simplemente escribiendo el comando composer</p>
        </div>
        <div class="col"><div class="card" style="width:60rem;">
            <img class="card-img-top" src="{{asset('img/c2.jpg')}}"  height="350rem"  >
            <p> ✔️ Clic en Download abrira una nueva ventana nos dirigimos en laparte que dice 
                Composer-Setup exe clic se descargara el archivo una vez descargado abrimos y ejecutamos 
                <center><div class="card" style="width: 27rem;">
                    <img class="card-img-top" src="{{asset('img/c2.jpg')}}" alt="Card image cap" height="260rem">
                    </div></center>
                    <br>
                    <p>     ✔️ Clic abrira un ejecutable le damos clic</p>
                    <center><div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('img/c3.jpg')}}" alt="Card image cap" height="220rem">
                        </div></center>
                        <br>
                        <p>  ✔️ Clic ejecutar</p>
                        <center><div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('img/c5.jpg')}}" alt="Card image cap" height="220rem">
                            </div></center>
                            <br>
                            <p>
                                ✔️ Clic en la primera opción
                            </p>
                            <center><div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{asset('img/c6.jpg')}}" alt="Card image cap" height="220rem">
                                </div></center>
                                <br>
                                <p>
                                    ✔️ Clic siguiente tal cual esta 
                                </p>
                                <center><div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="{{asset('img/c7.jpg')}}" alt="Card image cap" height="220rem">
                                    </div></center>
                                    <br>
                                    <p>
                                        ✔️ Clic siguiente
                                    </p>
                                    <center><div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="{{asset('img/c8.jpg')}}" alt="Card image cap" height="220rem">
                                        </div></center>
                                        <br>
                                        <p>
                                            ✔️Clic siguiente
                                        </p>
                                        <center><div class="card" style="width: 18rem;">
                                            <img class="card-img-top" src="{{asset('img/c9.jpg')}}" alt="Card image cap" height="220rem">
                                            </div></center>
                                            <br>
                                            <p>
                                                ✔️ Clic siguiente
                                            </p>
                                            <center><div class="card" style="width: 18rem;">
                                                <img class="card-img-top" src="{{asset('img/c10.jpg')}}" alt="Card image cap" height="220rem">
                                                </div></center>
                                                <br>
                                            <p>
                                                ✔️ En este punto ya inicia la instalacion 
                                            </p>
                                            <center><div class="card" style="width: 18rem;">
                                                <img class="card-img-top" src="{{asset('img/C11.jpg')}}" alt="Card image cap" height="220rem">
                                                </div></center>
                                                <br>
                                                <p>
                                                    ✔️ Finaliza la instalación
                                                </p>
                                                <center><div class="card" style="width: 18rem;">
                                                    <img class="card-img-top" src="{{asset('img/c12.jpg')}}" alt="Card image cap" height="220rem">
                                                    </div></center>
                                                </div>
                                                    <div class="row mt-5">
                                                        <div class="col-sm-12">
                                                            <center><h3>📃 Inicamos a la Instalacion de laravel ❤️</h3></center>
                                                            <br>
                                                            <p>
                                                                📂 Dirigete a tu carpeta en este caso es ✔️ Xampp ->> ✔️ htdocs->> ✔️creas una nueva carpeta✔️abres una terminal
                                                                le pondras lo siguientes comandos 
                                                            <br>
                                                            <center><div class="card" style="width: 18rem;">
                                                                <img class="card-img-top" src="{{asset('img/l1.jpg')}}" alt="Card image cap" height="220rem">
                                                                </div></center>
                                                            </p>
                                                            <br>
                                                            <p>
                                                                ✔️ Con el comando que se muestra es para crear el proyecto
                                                            </p>
                                                            <center><div class="card" style="width: 50rem;">
                                                                <img class="card-img-top" src="{{asset('img/l2.jpg')}}" alt="Card image cap" height="220rem">
                                                                </div></center>
                                                                <br>
                                                            <p>
                                                                ✔️ Con el comando que se muestra es para darle vida a nuestro proyecto 
                                                                mostrara una direccion -->clic abrira laravel podemos ver qque ya se instalo correcta mente 😬
                                                            </p>
                                                            <center><div class="card" style="width: 40rem;">
                                                                <img class="card-img-top" src="{{asset('img/l3.jpg')}}" alt="Card image cap" height="220rem">
                                                                </div></center>
                                                                <br>
                                                            <p>
                                                                ✔️ laravel esta instalado correctamente 😜lito para trabajar 😬
                                                            </p>
                                                            <center><div class="card" style="width: 30rem;">
                                                                <img class="card-img-top" src="{{asset('img/l4.jpg')}}" alt="Card image cap" height="220rem">
                                                                </div></center>
                                                        </div>
                                                    </div>
            </p>    
        </div>
        </div>
 </div>
@endsection
