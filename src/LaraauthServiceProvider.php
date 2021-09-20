<?php

namespace Callmehalpha\Laraauth;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Callmehalpha\Laraauth\Commands\LaraauthCommand;

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
    }
}
