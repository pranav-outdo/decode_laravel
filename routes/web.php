<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IntegrationController as AdminIntegrationController;
use App\Http\Controllers\Admin\ResourceTopicController;
use App\Http\Controllers\Admin\ResourceTypeController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\IntegrationController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ContentVaultController;

@include('adminWeb.php');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
 
Route::get('/', function () {
    return view('home');
})->name('/');

// User
// feature
Route::get('features', [FeatureController::class, 'index'])->name('feature.index');

// integrations
Route::get('integrations', [IntegrationController::class, 'index'])->name('integrations.index');
Route::get('integration/{categoryId}', [IntegrationController::class, 'showCategoryIntegrations'])->name('show.category.integrations');

// resources
Route::get('resources', [ResourceController::class, 'index'])->name('resources.index');
Route::get('content-vault-data', [ResourceController::class, 'contentVaultData'])->name('content-vault-data');

// solution-candidate
Route::get('solution-candidate', [UserController::class, 'solutionCandidateIndex'])->name('solution-candidate.index');

// solution-customer
Route::get('solution-customer', [UserController::class, 'solutionCustomerIndex'])->name('solution-customer.index');

// solution-teams
Route::get('solution-teams', [UserController::class, 'solutionTeamsIndex'])->name('solution-teams.index');

Route::get('/cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('optimize:clear');  
    Artisan::call('clear-compiled');

   return "Cleared!";
});

Route::get('/migrate', function() {

    return Artisan::call('migrate',
        array(
        '--path' => 'database/migrations',
        '--database' => 'mysql',
        '--force' => true));
});

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
    return "Storage link generated successfully.";
});
