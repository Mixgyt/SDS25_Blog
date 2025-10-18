<?php
    use lib\Route;
    use app\controllers\InicioController;
    use app\controllers\PostController;

    Route::get("/",[InicioController::class,'index']);
    Route::get("/informacion",[InicioController::class,'informacion']);
    Route::get("/registro",[InicioController::class,'registro']);

    Route::post("/registrar",[InicioController::class,'registrar']);
    //Rutas para los posts
    Route::get("/post/diauno",[PostController::class,'diauno']);
    Route::get("/post/diados",[PostController::class,'diados']);
    Route::get("/post/diatres",[PostController::class,'diatres']);
    Route::get("/post/diacuatro",[PostController::class,'diacuatro']);
    Route::get("/post/diacinco",[PostController::class,'diacinco']);

    Route::dispatch();
?>