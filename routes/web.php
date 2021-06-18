<?php
/**
 *  routes/web.php
 *
 * Date-Time: 03.06.21
 * Time: 15:41
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

use App\Http\Controllers\Admin\AnswerController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TranslationController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;


Route::prefix('{locale}')
    ->middleware(['setlocale'])
    ->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('login', [LoginController::class, 'loginView'])->name('loginView');
            Route::post('login', [LoginController::class, 'login'])->name('login');

            Route::redirect('', 'admin/language');

            Route::middleware('auth')->group(function () {
                Route::get('logout', [LoginController::class, 'logout'])->name('logout');


                // Language
                Route::resource('language', LanguageController::class);
                Route::get('language/{language}/destroy', [LanguageController::class, 'destroy'])->name('language.destroy');

                // Translation
                Route::resource('translation', TranslationController::class);

                // Category
                Route::resource('category', CategoryController::class);
                Route::get('category/{category}/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');

                // Feature
                Route::resource('feature', FeatureController::class);
                Route::get('feature/{feature}/destroy', [FeatureController::class, 'destroy'])->name('feature.destroy');

                // Answer
                Route::resource('answer', AnswerController::class);
                Route::get('answer/{answer}/destroy', [AnswerController::class, 'destroy'])->name('answer.destroy');

                // City
                Route::resource('city', CityController::class);
                Route::get('city/{city}/destroy', [CityController::class, 'destroy'])->name('city.destroy');

                // Project
                Route::resource('project', ProjectController::class);
                Route::get('project/{project}/destroy', [ProjectController::class, 'destroy'])->name('project.destroy');

                // Product
                Route::resource('product',ProductController::class);
                Route::get('product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');


                // Slider
                Route::resource('slider',SliderController::class);
                Route::get('slider/{slider}/destroy',[SliderController::class,'destroy'])->name('slider.destroy');

            });
        });

        Route::get('',[HomeController::class,'index'])->name('home.index');
    });

