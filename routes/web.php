<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('salir', function () {
    Auth::logout();
    return redirect('/');
})->name('getout');

Route::view('root', 'tests');
Route::view('spa', 'website.root');
Route::view('altroot', 'alternative');

Route::get('tests', 'TestsController@index');

Route::get('enviar', 'TestsController@send')->name('send');

Route::get('correos', function () {
    return new App\Mail\MarkdownMail;
});

Route::group(['prefix' => 'miembros', 'as' => 'members.'], function () {
    $ctrl = 'MemberController';
    Route::get('/', usesas($ctrl, 'index'));
    Route::get('crear', usesas($ctrl, 'create'));
    Route::post('crear', usesas($ctrl, 'store'));
    Route::get('editar/{member}', usesas($ctrl, 'edit'));
    Route::post('editar', usesas($ctrl, 'update'));
    Route::get('{member}', usesas($ctrl, 'show'));
    Route::get('cancelar/{member}', usesas($ctrl, 'destroy'));
});

Route::group(['prefix' => 'entrenadores', 'as' => 'coaches.'], function () {
    $ctrl = 'CoachController';
    Route::get('/', usesas($ctrl, 'index'));
    Route::get('crear', usesas($ctrl, 'create'));
    Route::post('crear', usesas($ctrl, 'store'));
    Route::get('editar/{coach}', usesas($ctrl, 'edit'));
    Route::post('editar/{coach}', usesas($ctrl, 'update'));
});

Route::group(['prefix' => 'horarios', 'as' => 'schedules.'], function () {
    $ctrl = 'ScheduleController';
    Route::get('/', usesas($ctrl, 'index'));
    Route::get('crear', usesas($ctrl, 'create'));
    Route::post('crear', usesas($ctrl, 'store'));
    Route::get('editar/{schedule}', usesas($ctrl, 'edit'));
    Route::post('editar', usesas($ctrl, 'update'));
    Route::post('asignar', usesas($ctrl, 'assign'));
});

Route::group(['prefix' => 'clases', 'as' => 'trainings.'], function () {
    $ctrl = 'TrainingController';
    Route::get('/', usesas($ctrl, 'index'));
    Route::get('crear', usesas($ctrl, 'create'));
    Route::post('crear', usesas($ctrl, 'store'));
    Route::get('editar/{training}', usesas($ctrl, 'edit'));
    Route::post('editar', usesas($ctrl, 'update'));
});

Route::group(['prefix' => 'rutinas', 'as' => 'workouts.'], function () {
    $ctrl = 'WorkoutController';
    Route::get('/', usesas($ctrl, 'index'));
    Route::get('crear', usesas($ctrl, 'create'));
    Route::post('crear', usesas($ctrl, 'store'));
    Route::get('editar/{workout}', usesas($ctrl, 'edit'));
    Route::post('editar', usesas($ctrl, 'update'));
    Route::get('{workout}', usesas($ctrl, 'show'));
});

Route::group(['prefix' => 'productos', 'as' => 'products.'], function () {
    $ctrl = 'ProductController';
    Route::get('/', usesas($ctrl, 'index'));
    Route::get('crear', usesas($ctrl, 'create'));
    Route::post('crear', usesas($ctrl, 'store'));
    Route::get('editar/{product}', usesas($ctrl, 'edit'));
    Route::post('editar', usesas($ctrl, 'update'));
    Route::get('{product}', usesas($ctrl, 'show'));
});

Route::group(['prefix' => 'ventas', 'as' => 'sales.'], function () {
    $ctrl = 'SaleController';
    Route::get('/', usesas($ctrl, 'index'));
    Route::get('crear', usesas($ctrl, 'create'));
    Route::post('crear', usesas($ctrl, 'store'));
    Route::get('editar/{sale}', usesas($ctrl, 'edit'));
    Route::post('editar', usesas($ctrl, 'update'));
    Route::get('{sale}', usesas($ctrl, 'show'));
});

Route::group(['prefix' => 'gastos', 'as' => 'expenses.'], function () {
    $ctrl = 'ExpenseController';
    Route::get('/', usesas($ctrl, 'index'));
    Route::get('crear', usesas($ctrl, 'create'));
    Route::post('crear', usesas($ctrl, 'store'));
    Route::get('editar/{expense}', usesas($ctrl, 'edit'));
    Route::post('editar', usesas($ctrl, 'update'));
    Route::get('{expense}', usesas($ctrl, 'show'));
});

Route::group(['prefix' => 'asistencia', 'as' => 'attendences.'], function () {
    $ctrl = 'AttendenceController';
    Route::get('/', usesas($ctrl, 'index'));
    Route::get('crear', usesas($ctrl, 'create'));
    Route::post('crear', usesas($ctrl, 'store'));
    Route::get('editar/{attendence}', usesas($ctrl, 'edit'));
    Route::post('editar', usesas($ctrl, 'update'));
    Route::get('{member}', usesas($ctrl, 'show'));
});

Route::group(['prefix' => 'membresias', 'as' => 'memberships.'], function () {
    $ctrl = 'MembershipController';
    Route::get('/', usesas($ctrl, 'index'));
    Route::get('crear', usesas($ctrl, 'create'));
    Route::post('crear', usesas($ctrl, 'store'));
    Route::get('editar/{membership}', usesas($ctrl, 'edit'));
    Route::post('editar', usesas($ctrl, 'update'));
    Route::get('{membership}', usesas($ctrl, 'show'));
    Route::get('cancelar/{membership}', usesas($ctrl, 'destroy'));
});

Route::group(['prefix' => 'administracion', 'as' => 'admin.'], function () {
    $ctrl = 'AdminController';
    Route::get('caja', usesas($ctrl, 'cash'));
    Route::post('caja', usesas($ctrl, 'cash'));
    Route::get('membrecias-descuentos', usesas($ctrl, 'indexMD'));
});
