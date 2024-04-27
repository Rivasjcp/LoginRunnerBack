<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $stringType = "Maria" . " " . 9;
    $numberType = 30;
    $booleanType = false;
    $datos = [
        "nombre" => "Juan",
        "edad" => 25
    ];

    $personas = array(
        array(
            "Nombre" => "Juan",
            "Edad" => 25
        ),
        array(
            "Nombre" => "Maria",
            "Edad" => 30
        )
        );

    // print_r($numberType);
    // echo ($stringType);
    // dd($personas, $stringType, $numberType, $datos, $booleanType);

    $nota = 75;
    if ($nota >= 90){
        $mensaje1 = "Excelente.";
    }elseif($nota >= 70){
        $mensaje1 = "Aprobado.";
    } else {
        $mensaje1 = "Reprobado.";
    }

    $clima = "soleado";
    $mensaje2 = ($clima == "soleado") ? "Hace buen tiempo." : "El clima no es ideal.";
    foreach($personas as $persona){
        echo "Nombre: " . $persona["Nombre"] . ", Edad: " . $persona["Edad"] . "<br>";
    }

    return view('welcome');
});
