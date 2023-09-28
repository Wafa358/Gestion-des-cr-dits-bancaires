<?php
use Illuminate\Support\Facades\Routes;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployesController;
use App\Http\controllers\AgenceController;
use App\Http\controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\controllers\CreditController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*Route::get('/agence', function () {
    return view('home.agence');
})->middleware(['auth', 'verified'])->name('agence');*/

Route::get('/client', function () {
    return view('home.client');
})->middleware(['auth', 'verified'])->name('client');

Route::get('/credit', function () {
    return view('home.credit');
})->middleware(['auth', 'verified'])->name('credit');

Route::get('/employes', function () {
    return view('home.employes');
})->middleware(['auth', 'verified'])->name('employes');

Route::get('/role', function () {
    return view('home.role');
})->middleware(['auth', 'verified'])->name('role');

Route::get('ajouter-agence',[AgenceController::class, 'ajouterAgence']);
Route::post('save-agence',[AgenceController::class, 'saveAgence']);
Route::get('/agence',[AgenceController::class, 'index'])->name('agence');
Route::get('edit-agence/{id}',[AgenceController::class, 'editAgence']);
Route::post('update-agence',[AgenceController::class, 'updateAgence']);
Route::get('delete-agence/{id}',[AgenceController::class, 'deleteAgence']);

Route::get('ajouter-employes',[EmployesController::class, 'ajouterEmployes']);
Route::post('save-employes',[EmployesController::class, 'saveEmployes']);
Route::get('/employes',[EmployesController::class, 'index'])->name('employes');
Route::get('edit-employes/{id}',[EmployesController::class, 'editEmployes']);
Route::post('update-employes',[EmployesController::class, 'updateEmployes']);
Route::get('delete-employes/{id}',[EmployesController::class, 'deleteEmployes']);

Route::get('/client',[ClientController::class,'index'])->name('client');
Route::get('ajouter-client',[ClientController::class,'ajouterClient']);
Route::post('save-client',[ClientController::class,'saveClient']);
Route::get('edit-client/{id}',[ClientController::class,'editClient']);
Route::post('update-client/{id}',[ClientController::class,'updateClient']);
Route::get('delete-client/{id}',[ClientController::class, 'deleteClient']);





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

 
  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

Route::get('/credit', [CreditController::class, 'liste_credit']);