<?php
use App\Http\Controllers\SaludoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "<h1>Hola bienvenido</h1>";
});

Route::get('/{saludo}/{nombre}/{apellido?}', [SaludoController::class, 'saludo'])
    ->where('nombre', '[A-Za-z]+')->where('apellido', '[A-Za-z]+');

/*Route::get('/{saludo}/{nombre}/{apellido?}', function ($saludo, $nombre, $apellido = null) {
    if ($saludo === "saludo") {
            if ($apellido !== null) {
                return "<h1>Hola " . $nombre . " " . $apellido . "</h1>";
            } else {
                return "<h1>Hola " . $nombre . "</h1>";
            }
    }
})->where('nombre', '[A-Za-z]+')->where('apellido', '[A-Za-z]+');*/

Route::get('/{operacion}/{num1}/{num2}', function ($operacion, $num1, $num2) {
    if (is_numeric($num1) && is_numeric($num2)) {
        if ($operacion === "suma") {
            $resultado = $num1 + $num2;
            return "<h1>Resultado de la suma: $resultado</h1>";
        } elseif ($operacion === "resta") {
            $resultado = $num1 - $num2;
            return "<h1>Resultado de la resta: $resultado</h1>";
        } elseif ($operacion === "multiplicacion") {
            $resultado = $num1 * $num2;
            return "<h1>Resultado de la multiplicación: $resultado</h1>";
        } elseif ($operacion === "division") {
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
                return "<h1>Resultado de la división: $resultado</h1>";
            } else {
                return "No es posible dividir por cero.";
            }
        } else {
            return "Operación no válida. Utilice 'suma', 'resta', 'multiplicacion' o 'division'.";
        }
    } 
});



