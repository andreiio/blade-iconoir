<?php

declare(strict_types=1);

namespace AndreiIonita\BladeIconoir;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

class BladeIconoirServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('iconoir', [
                'path' => __DIR__ . '/../resources/svg',
                'prefix' => 'iconoir',
            ]);
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-iconoir'),
            ], 'blade-iconoir');
        }
    }
}
