<?php

Route::group(['prefix' => 'asistencia', 'as' => 'attendences.'], function () {
    $ctrl = 'AttendenceController';
    Route::get('inicio', usesas($ctrl, 'create'));
    Route::post('crear', usesas($ctrl, 'store'));
    Route::get('{member}', usesas($ctrl, 'show'));
});
