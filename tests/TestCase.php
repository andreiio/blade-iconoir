<?php

declare(strict_types=1);

namespace AndreiIonita\BladeIconoir\Tests;

use AndreiIonita\BladeIconoir\BladeIconoirServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            BladeIconsServiceProvider::class,
            BladeIconoirServiceProvider::class,
        ];
    }
}
