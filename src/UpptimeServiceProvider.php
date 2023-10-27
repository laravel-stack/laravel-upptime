<?php

namespace laravel-stack\Upptime;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use laravel-stack\Upptime\Commands\UpptimeCommand;

class UpptimeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-upptime')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-upptime_table')
            ->hasCommand(UpptimeCommand::class);
    }
}
