<?php



use Illuminate\Support\Facades\Route;
use App\Http\Requests;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('main');
})->name('main');


Route::get('/users', function () {
    return view('welcome');
})->name('users');

//cataloge
Route::post('/cataloge/submit', [\App\Http\Controllers\TovarisController::class, 'submit'])->name('cataloge-submit');
Route::get('/cataloge/all', [\App\Http\Controllers\TovarisController::class, 'AllData'])->name('cataloge-all');
Route::get('/cataloge/all/{tovar}', [\App\Http\Controllers\TovarisController::class, 'ShowOneTovar'])->name('tovar-data-one');
Route::get('/cataloge/all/{id}/update', [\App\Http\Controllers\TovarisController::class, 'UpdateTovar'])->name('update-tovar');
Route::get('/cataloge/all/{id}/delete', [\App\Http\Controllers\TovarisController::class, 'DeleteTovar'])->name('delete-tovar');
Route::get('/cataloge', [\App\Http\Controllers\MainController::class, 'cataloge'])->name('cataloge');
Route::post('/cataloge/all/{id}/update', [\App\Http\Controllers\TovarisController::class, 'UpdateTovarSubmit'])->name('update-tovar-submit');


//account
Route::post('/account/submit', [\App\Http\Controllers\AccountController::class, 'submit'])->name('account-submit');
Route::get('/account', [\App\Http\Controllers\MainController::class, 'account'])->name('account');
Route::get('/account1', [\App\Http\Controllers\MainController::class, 'account1'])->name('account1');






Route::get('/fav', [\App\Http\Controllers\MainController::class, 'like'])->name('fav');


