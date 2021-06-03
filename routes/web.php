<?php
/**
 *  routes/web.php
 *
 * Date-Time: 03.06.21
 * Time: 15:41
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'loginView'])->name('loginView');
    Route::post('login', [LoginController::class, 'login'])->name('login');
});