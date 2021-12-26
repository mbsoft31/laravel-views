<?php

namespace Mbsoft31\LaravelViews\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Mbsoft31\LaravelViews\LaravelViewsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            static fn (string $modelName) => 'Mbsoft31\\LaravelViews\\Tests\\database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app): array
    {
        return [
            LaravelViewsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');

        dump(__DIR__);
        $migration = include __DIR__.'/database/migrations/create_views_table.php.stub';
        $migration->up();

    }
}
