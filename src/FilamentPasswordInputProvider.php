<?php

namespace Papalardo\FilamentPasswordInput;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentPasswordInputProvider extends PluginServiceProvider
{
    public static string $name = 'filament-password-input';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)->hasViews();
    }

}
