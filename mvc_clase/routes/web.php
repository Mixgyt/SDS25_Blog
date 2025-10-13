<?php
    use lib\Route;
    use app\controllers\InicioController;

    Route::get("/",[InicioController::class,'index']);
    Route::get("/informacion",[InicioController::class,'informacion']);

    Route::dispatch();
?>