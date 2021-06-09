<?php
/**
 *  app/Providers/RepositoryServiceProvider.php
 *
 * Date-Time: 04.06.21
 * Time: 09:42
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Providers;

use App\Repositories\AnswerRepositoryInterface;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\Eloquent\AnswerRepository;
use App\Repositories\Eloquent\Base\BaseRepository;
use App\Repositories\Eloquent\Base\EloquentRepositoryInterface;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Eloquent\FeatureRepository;
use App\Repositories\Eloquent\LanguageRepository;
use App\Repositories\Eloquent\TranslationRepository;
use App\Repositories\FeatureRepositoryInterface;
use App\Repositories\LanguageRepositoryInterface;
use App\Repositories\TranslationRepositoryInterface;
use Carbon\Laravel\ServiceProvider;

/**
 * Class RepositoryServiceProvider
 * @package App\Providers
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(LanguageRepositoryInterface::class, LanguageRepository::class);
        $this->app->bind(TranslationRepositoryInterface::class, TranslationRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(FeatureRepositoryInterface::class, FeatureRepository::class);
        $this->app->bind(AnswerRepositoryInterface::class, AnswerRepository::class);
    }
}