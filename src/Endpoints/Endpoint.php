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

use Illuminate\Http\Client\PendingRequest;

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

        $response->throw();

        return $response->json();
    }
}
