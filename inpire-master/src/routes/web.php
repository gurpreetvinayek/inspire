<?php

use Matrixm\Inspire\Controllers;
use Illuminate\Support\Facades\Route;
use Matrixm\Inspire\Controllers\InspireController;
Route::get('inspire', [InspireController::class, 'invoke']);
