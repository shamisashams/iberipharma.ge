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
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TranslationController;
use App\Http\Controllers\Admin\WellnessController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;


Route::prefix('{locale?}')
    ->middleware(['setlocale'])
    ->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('login', [LoginController::class, 'loginView'])->name('loginView');
            Route::post('login', [LoginController::class, 'login'])->name('login');

            Route::redirect('', 'admin/product');

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
//                Route::resource('city', CityController::class);
//                Route::get('city/{city}/destroy', [CityController::class, 'destroy'])->name('city.destroy');

                Route::resource('member', MemberController::class);
                Route::get('member/{member}/destroy', [MemberController::class, 'destroy'])->name('member.destroy');

                Route::resource('blog', BlogController::class);
                Route::get('blog/{blog}/destroy', [BlogController::class, 'destroy'])->name('blog.destroy');

                Route::resource('wellness', WellnessController::class);
                Route::get('wellness/{wellness}/destroy', [WellnessController::class, 'destroy'])->name('wellness.destroy');

                // Project
//                Route::resource('project', ProjectController::class);
//                Route::get('project/{project}/destroy', [ProjectController::class, 'destroy'])->name('project.destroy');

                // Product
                Route::resource('product', ProductController::class);
                Route::get('product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');


                // Slider
                Route::resource('slider', SliderController::class);
                Route::get('slider/{slider}/destroy', [SliderController::class, 'destroy'])->name('slider.destroy');

                // City
                Route::resource('setting', SettingController::class);

                // Certificate
                Route::resource('certificate', CertificateController::class);
                Route::get('certificate/{certificate}/destroy', [CertificateController::class, 'destroy'])->name('certificate.destroy');

            });
        });

        Route::get('', [HomeController::class, 'index'])->name('home.index');

        Route::get('vision', [HomeController::class, 'vision'])->name('home.vision');
        Route::get('values', [HomeController::class, 'value'])->name('home.value');

        Route::get('mission', [HomeController::class, 'mission'])->name('home.mission');

        Route::get('company_history', [HomeController::class, 'company'])->name('home.company');

        Route::get('locations', [HomeController::class, 'location'])->name('home.location');



        Route::get('products', [\App\Http\Controllers\Client\CatalogController::class, 'index'])->name('client.product.index');
        Route::get('products/{product}/show', [\App\Http\Controllers\Client\CatalogController::class, 'show'])->name('client.product.show');

        Route::match(['get','post'],'contact', [\App\Http\Controllers\Client\ContactController::class, 'index'])->name('contact.index');


        Route::get('news',[\App\Http\Controllers\Client\NewsController::class,'index'])->name('news.index');
        Route::get('news/{blog}/show',[\App\Http\Controllers\Client\NewsController::class,'show'])->name('client.news.show');

        Route::get('wellness',[\App\Http\Controllers\Client\WellnessController::class,'index'])->name('client.wellness.index');
        Route::get('news/{wellness}/show',[\App\Http\Controllers\Client\WellnessController::class,'show'])->name('client.wellness.show');

        Route::get('members',[\App\Http\Controllers\Client\TeamController::class,'index'])->name('client.member.index');


    });

