<?php

declare(strict_types=1);

namespace Fkrzski\TestPacakge\Tests;

use Fkrzski\TestPacakge\TestPacakgeServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

final class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            TestPacakgeServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app): array
    {
        return [
            'TestPacakge' => \Fkrzski\TestPacakge\Facades\TestPacakge::class,
        ];
    }

    protected function getEnvironmentSetUp($app): void
    {
        // Setup environment if needed
        // config()->set('database.default', 'testing');
    }
}
