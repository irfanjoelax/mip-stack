<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

class WelcomeMessageWidget extends Widget
{
    use \BezhanSalleh\FilamentShield\Traits\HasWidgetShield;
    protected static string $view = 'filament.widgets.welcome-message-widget';
    protected static ?int $sort = -100; // Supaya muncul paling atas (opsional)
    protected static bool $isLazy = false; // langsung dimuat tanpa lazy
    protected int | string | array $columnSpan = 'full';

    protected function getViewData(): array
    {
        return [
            'userName' => Auth::user()?->name ?? 'User',
            'appName' => config('app.name'),
        ];
    }
}
