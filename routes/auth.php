<?php

Route::get('logueado', function () {
    return 'Logueado';
});

Route::get('products', usesas('AxiosController', 'products'));
