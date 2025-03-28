<?php

    require_once "./config/app.php";
    require_once "./controllers/vistasControllador.php";


    $plantilla =  new vistasControllador();
    $plantilla->obtener_plantilla_controlador();