<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IntegrationController as AdminIntegrationController;
use App\Http\Controllers\Admin\ResourceTopicController;
use App\Http\Controllers\Admin\ResourceTypeController;
use App\Http\Controllers\Admin\ContentVaultController;
use App\Http\Controllers\Admin\AdminResourceController;

/* admin */
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::post('login', [AdminController::class, 'login'])->name('login');
    Route::get('login', [AdminController::class, 'loginForm'])->name('login.show');
    Route::middleware(['web', 'auth'])->group(function () {
        Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::get('logout', [AdminController::class, 'logout'])->name('logout');

        /* category */
        Route::prefix('category')->group(function () {
            Route::get('', [CategoryController::class, 'index'])->name('category.index');
            Route::get('list', [CategoryController::class, 'getCategories'])->name('category.list');
            Route::post('store', [CategoryController::class, 'store'])->name('category.store');
            Route::get('delete/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
            Route::get('show/{category}', [CategoryController::class, 'show'])->name('category.show');
            Route::post('update/{category}', [CategoryController::class, 'update'])->name('category.update');
        });

        /* Integration */
        Route::prefix('integration')->group(function () {
            Route::get('list', [AdminIntegrationController::class, 'getIntegrations'])->name('integration.list');
            Route::get('delete/{integration}', [AdminIntegrationController::class, 'destroy'])->name('integration.destroy');
        });
        
        Route::resource('integration', AdminIntegrationController::class)->only(['index', 'create', 'store', 'edit', 'update']);
             
    });
});

/* admin */
Route::group(['prefix' => 'admin/resources', 'as' => 'admin.'], function () {
    /* Resource Type*/
    Route::prefix('resource-type')->group(function () {
        Route::get('list', [ResourceTypeController::class, 'getTypes'])->name('resource.type.list');
        Route::get('delete/{resource_type}', [ResourceTypeController::class, 'destroy'])->name('resource-type.destroy');
    });
    Route::resource('resource-type', ResourceTypeController::class)->only(['index', 'store', 'show', 'update']);

    /* Resource Topic*/
    Route::prefix('resource-topic')->group(function () {
        Route::get('list', [ResourceTopicController::class, 'getTopics'])->name('resource.topic.list');
        Route::get('delete/{resource_topic}', [ResourceTopicController::class, 'destroy'])->name('resource-topic.destroy');
    });
    Route::resource('resource-topic', ResourceTopicController::class)->only(['index', 'store', 'show', 'update']);

    Route::prefix('content-vault')->group(function () {
        Route::get('list', [ContentVaultController::class, 'getContentVaultList'])->name('content-vault.list');
        Route::get('delete/{vault}', [ContentVaultController::class, 'destroy'])->name('content-vault.destroy');
    });

    Route::resource('content-vault', ContentVaultController::class)->only(['index', 'create', 'store', 'edit', 'update']);  

    Route::resource('resource-books', AdminResourceController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update']);
    Route::get('delete/{resource}', [AdminResourceController::class, 'destroy'])->name('books.destroy');
    
});