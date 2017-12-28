<?php

Route::get('logueado', function () {
    return 'Logueado';
});

Route::get('products', usesas('AxiosController', 'products'));

Route::get('descriptions', usesas('AxiosController', 'descriptions'));
