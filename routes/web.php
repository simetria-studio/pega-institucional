<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});
Route::get('/sobre', function () {
    return view('sobre');
});

Route::prefix('servicos')->group(function () {
    Route::get('/emolumentos', function () {
        return view('services.1-emolumentos');
    });
    Route::get('/formularios', function () {
        return view('services.2-formularios');
    });
    Route::get('/tecnicos', function () {
        return view('services.3-tecnicos');
    });
    Route::get('/arbitros-oficiais', function () {
        return view('services.4-arbitro-oficiais');
    });
    Route::get('/arbitros-credenciados', function () {
        return view('services.5-arbitro-credenciados');
    });
    Route::get('/credenciamento', function () {
        return view('services.6-credenciamento');
    });
    Route::get('/atendimento', function () {
        return view('services.7-atendimento');
    });
});

Route::get('/novidades', function () {
    return view('novidades');
});
Route::get('/jovem-criador', function () {
    return view('jovem-criador');
});
Route::get('/parceiros', function () {
    return view('parceiros');
});
Route::get('/anuncios', function () {
    return view('anuncios');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
