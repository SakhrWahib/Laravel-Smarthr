<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\AssetsController;
use App\Http\Controllers\Api\ClientsController;
use App\Http\Controllers\Api\ContactsController;
use App\Http\Controllers\Api\EmployeesController;
use App\Http\Controllers\Api\DepartmentsController;
use App\Http\Controllers\Api\DesignationsController;
use App\Http\Controllers\Api\EmployeeAttendancesController;
use App\Http\Controllers\Api\ExpensesController;








/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/assets', AssetsController::class);



Route::get('/clients', ClientsController::class);



// Route to store a new contact
Route::post('/contacts', ContactsController::class);



Route::get('/departments', DepartmentsController::class);



Route::get('/designations', DesignationsController::class);



Route::get('/employees', EmployeesController::class);


Route::get('/employee-attendances', EmployeeAttendancesController::class);


Route::post('/expenses', ExpensesController::class);


// Register route
Route::post('/register', [AuthController::class, 'register']);

// Login route
Route::post('/login', [AuthController::class, 'login']);
