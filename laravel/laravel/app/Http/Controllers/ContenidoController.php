<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContenidoController extends Controller
{
    public function informacion(){
        return view('contenido.informacion');
    }
 //nombre de metodo a ruta
        public function vista(){
            $vista = view('contenido.vista');
            return $vista;
        }
        public function vistas(){
            $vista = view('contenido.vistas');
            return $vista;
            }
            public function rutas(){
                $vista = view('contenido.rutas');
                return $vista;
        }
        public function control(){
            $vista = view('contenido.control');
            return $vista;
        }
        public function inicio(){
            $vista = view('contenido.inicio');
            return $vista;
        }
        public function nuevo(){
            $vista = view('contenido.nuevo');
            return $vista;
        }
        }
