<?php

use Dcat\Admin\Extension\Proses\Http\Controllers;

Route::get('proses', Controllers\ProsesController::class.'@index');