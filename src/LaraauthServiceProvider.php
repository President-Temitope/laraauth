<?php

namespace Callmehalpha\Laraauth;

use Callmehalpha\Laraauth\Commands\LaraauthCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaraauthServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laraauth')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laraauth_table')
            ->hasCommand(LaraauthCommand::class);
        $this->loadRoutesFrom(__DIR__.'/routes/laraauth-routes.php');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'Callmehalpha\Laraauth');

    }
}
