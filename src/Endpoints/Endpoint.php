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

namespace KodeKeep\BetsAPI\Endpoints;

use Carbon\Carbon;
use Illuminate\Http\Client\PendingRequest;
use KodeKeep\BetsAPI\Exceptions\RateLimitExceeded;

abstract class Endpoint
{
    private $client;

    public function __construct(PendingRequest $client)
    {
        $this->client = $client;
    }

    protected function sendGET(string $path, array $query = []): array
    {
        $response = $this->client->get($path, $query);

        $remainingRateLimit = intval($response->header('X-RateLimit-Remaining'));

        if ($remainingRateLimit <= 0) {
            $rateLimitTotal = intval($response->header('X-RateLimit-Limit'));
            $rateLimitReset = Carbon::createFromTimestamp($response->header('X-RateLimit-Reset'));

            throw new RateLimitExceeded("You have exceeded your {$rateLimitTotal} requests / per hour. It will reset at {$rateLimitReset->toDateTimeString()}.");
        }

        $response->throw();

        return $response->json();
    }
}
