@extends('layout.plantilla')
@section('titulo','')
@section('tituloDePagina',' ')
@section('contenido')
<div class="row mt-4">
    <div class="col-sm-12">
        <center><h3>✨¿ Base de datos y migraciones (Migrations) ?✨</h3></center>
            <br>
        <p>
            Migraciones nos permite diseñar la estructura de 
            nuestra base de datos y mantener su historial de cambios a lo largo del 
            desarrollo del proyecto. Normalmente los programadores crean tablas y 
            columnas dentro de una base de dato usando lenguaje SQL o utilizando PHPMyAdmin,
             este proceso de tener que diseñar, crear y llevar el control de la base de datos 
             solía resultar bastante tedioso, 
            es aquí que migraciones nos facilita el proceso. 
            <br>
            Las migraciones son un mecanismo proporcionado por 
            Laravel con el que podemos tener una especie de control de 
            versiones sobre los cambios en la estructura de nuestra base de dato. 
            Las migraciones al crear un esquema, las migraciones crearán las tablas 
            para el motor de base de datos que tengamos configurado.
            Por defecto las migraciones se encuentran en el directorio database/
            migrations cada migración es un archivo .php que incluye en 
            el nombre del archivo la fecha y la hora que fue creada 
            (en formato timestamp) y el nombre de la migración.
            <br>
            <br>
            <h2>Migraciones por defecto 💡</h2>
            <br>
            Al crear un proyecto nuevo de Laravel, Laravel incluye por defecto dos migraciones:

            2014_10_12_000000_create_users_table.php
            2014_10_12_100000_create_password_resets_table.php
            Una migración no es mas que una clase de PHP que extiende de la clase Migration el nombre de la clase corresponde al nombre del archivo, en el caso de 2014_10_12_000000_create_users_table.php ,encontramos el nombre en formato "studly case" en lugar de separado por guiones:
            <center><div class="card" style="width: 30rem;">
                <img class="card-img-top" src="{{asset('img/m1.jpg')}}" alt="Card image cap" height="180rem">
                </div></center>
                <br>
                <h4>😊Métodos de una migración</h4>
                <br>
                Dentro de la clase de la migración encontramos dos métodos up() y down()
                <br>
                <br>
                <center><div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="{{asset('img/m2.jpg')}}" alt="Card image cap" height="300rem">
                    </div></center>
                    <br>
                    El método up() vamos a especificar que queremos que 
                    haga nuestra migración. Para crear una tabla llamamos al método 
                    create del Facade Schema pasando como primer argumento el nombre de la tabla que queremos crear ( en este caso users ) y como segundo argumento una función anónima que recibe como argumento un objeto de la clase Blueprint . Con los métodos que nos provee este 
                    objeto diseñaremos la estructura de la tabla:
        </p>
        </div>
    </div>
       @endsection
