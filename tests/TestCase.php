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

namespace KodeKeep\BetsAPI\Tests;

use KodeKeep\BetsAPI\Facades\BetsAPI;
use KodeKeep\BetsAPI\Providers\BetsAPIServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [BetsAPIServiceProvider::class];
    }

    protected function getPackageAliases($app): array
    {
        return ['BetsAPI' => BetsAPI::class];
    }
}
