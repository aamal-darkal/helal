<?php

namespace App\Providers;

use App\Models\Doing;
use App\Models\Setting;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private $locale;

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {

        view()->composer(
            ['layouts.app', 'home.index'],
            function ($view) {
                $view->with('doings', $this->getDoings());
            }
        );
        view()->composer(
            ['layouts.app', 'home.index'],
            function ($view) {
                $view->with(
                    'components',
                    $this->getComponents()
                );
            }
        );
    }

    private function getDoings()
    {
        $locale =   app()->getLocale();

        return Doing::select('id', "title_$locale as title", "icon")->get();
    }

    private function getComponents()
    {
        $locale =   app()->getLocale();

        $settings = Setting::all();
        foreach ($settings as $setting)
            $components[$setting->key_en] = $setting['value_' . $locale];
        return $components;
    }
}
