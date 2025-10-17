<?php
    use lib\Route;
    use app\controllers\InicioController;
    use app\controllers\PostController;

    Route::get("/",[InicioController::class,'index']);
    Route::get("/informacion",[InicioController::class,'informacion']);
    //Rutas para los posts
    Route::get("/post/diauno",[PostController::class,'diauno']);
    Route::get("/post/diados",[PostController::class,'diados']);
    Route::get("/post/diatres",[PostController::class,'diatres']);
    Route::get("/post/diacuatro",[PostController::class,'diacuatro']);

    Route::dispatch();
?>