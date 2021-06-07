<?php
/**
 *  routes/web.php
 *
 * Date-Time: 03.06.21
 * Time: 15:41
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\TranslationController;
use Illuminate\Support\Facades\Route;


Route::prefix('{locale?}')
    ->middleware(['setlocale'])
    ->group(function () {
        Route::redirect('', 'admin');
        Route::prefix('admin')->group(function () {
            Route::get('login', [LoginController::class, 'loginView'])->name('loginView');
            Route::post('login', [LoginController::class, 'login'])->name('login');

            Route::redirect('', 'admin/language');

            Route::middleware('auth')->group(function () {
                // Language
                Route::resource('language', LanguageController::class)
                    ->name('index', 'language.index')
                    ->name('create','language.create')
                    ->name('store','language.store')
                    ->name('show', 'language.show')
                    ->name('edit','language.edit')
                    ->name('update','language.update');

                Route::get('language/{language}/destroy',[LanguageController::class,'destroy'])->name('language.destroy');

                Route::resource('translation',TranslationController::class)
                    ->name('index','translation.index')
                    ->name('show','translation.show')
                    ;
            });
        });
    });

