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

namespace KodeKeep\BetsAPI\Facades;

use Illuminate\Support\Facades\Facade;

class BetsAPI extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'betsapi';
    }
}
