<?php

Route::group(['prefix' => 'asistencia', 'as' => 'attendences.'], function () {
    $ctrl = 'AttendenceController';
    //Route::get('/', usesas($ctrl, 'index'));
    Route::get('inicio', usesas($ctrl, 'create'));
    Route::post('crear', usesas($ctrl, 'store'));
    Route::get('fotos', usesas($ctrl, 'edit'));
    Route::post('fotos', usesas($ctrl, 'update'));
    Route::get('{member}', usesas($ctrl, 'show'));
});
