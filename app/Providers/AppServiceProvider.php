<?php

namespace App\Providers;

use App\Http\Composers\Main;
use App\Services\Words;
use App\Contracts\Generator;
use Illuminate\Support\ServiceProvider;

/**
 * Class AppServiceProvider
 *
 * @package App\Providers
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Generator::class, function () {
            return new Words(config('words', [
                'here',
                'are',
                'some',
                'general',
                'words',
                'yay',
                'we',
                'go',
            ]), config('general.minParagraphSentenceCount', 3), config('general.maxParagraphSentenceCount', 6),
                config('general.minSentenceWordCount', 5), config('general.maxSentenceWordCount', 15));
        });
        $this->app->bind('words', Generator::class);
        view()->composer('main', Main::class);
    }
}
