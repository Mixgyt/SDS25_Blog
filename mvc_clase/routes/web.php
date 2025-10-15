<?php
    use lib\Route;
    use app\controllers\InicioController;
    use app\controllers\PostController;

    Route::get("/",[InicioController::class,'index']);
    Route::get("/informacion",[InicioController::class,'informacion']);
    //Rutas para los posts
    Route::get("/post/diauno",[PostController::class,'diauno']);

    Route::dispatch();
?>