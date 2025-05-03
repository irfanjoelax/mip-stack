<?php

namespace App\Providers;

use Filament\Forms\Form;
use Filament\Support\Enums\ActionAlignment;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
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
    public function boot(): void
    {
        Form::configureUsing(function (Form $form): void {
            $form->actionsAlignment(ActionAlignment::End);
        });
    }
}
