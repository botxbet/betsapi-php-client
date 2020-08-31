<?php

declare(strict_types=1);

/*
 * This file is part of BetsAPI PHP Client.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\BetsAPI\Providers;

use Illuminate\Support\ServiceProvider;
use KodeKeep\BetsAPI\Client;

class BetsAPIServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/betsapi.php', 'betsapi');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/betsapi.php' => $this->app->configPath('betsapi.php'),
            ], 'config');
        }

        if (config('betsapi.token')) {
            $this->app->bind('betsapi', function () {
                return new Client(config('betsapi.token'));
            });
        }
    }
}
