<?php

    require_once "./models/vistasModelo.php";

    class vistasControllador extends vistasModelo{

        /**  Controlador para obtener plantilla */
        public function obtener_plantilla_controlador(){
            return require_once "./views/plantilla.php";
        }
        
        /* Controlador para obtener vistas*/

        public  function obtener_vistas_controlador(){
            if(isset($_GET['views'])){
                $ruta=explode("/", $_GET['views']);
                $respuesta=vistasModelo::obtener_vistas_modelo($ruta[0]);
            }else{
                $respuesta="login";
            }
            return $respuesta;
        }

    }