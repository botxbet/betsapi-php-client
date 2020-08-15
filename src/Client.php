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

namespace KodeKeep\BetsAPI;

use Illuminate\Support\Facades\Http;
use KodeKeep\BetsAPI\Endpoints\Endpoint;

class Client
{
    private string $baseUrl = 'https://api.b365api.com/';

    private $client;

    public function __construct(string $apiToken)
    {
        $this->client = Http::baseUrl($this->baseUrl)->withHeaders(['X-API-Token' => $apiToken]);
    }

    public function betfair(): Endpoint
    {
        return new Endpoints\Betfair($this->client);
    }

    public function bet365(): Endpoint
    {
        return new Endpoints\Bet365($this->client);
    }

    public function bwin(): Endpoint
    {
        return new Endpoints\Bwin($this->client);
    }

    public function endpoint(): Endpoint
    {
        return new Endpoints\Endpoint($this->client);
    }

    public function event(): Endpoint
    {
        return new Endpoints\Event($this->client);
    }

    public function league(): Endpoint
    {
        return new Endpoints\League($this->client);
    }

    public function onexbet(): Endpoint
    {
        return new Endpoints\ONExBET($this->client);
    }

    public function player(): Endpoint
    {
        return new Endpoints\Player($this->client);
    }

    public function sbobet(): Endpoint
    {
        return new Endpoints\SBOBET($this->client);
    }

    public function team(): Endpoint
    {
        return new Endpoints\Team($this->client);
    }

    public function tennis(): Endpoint
    {
        return new Endpoints\Tennis($this->client);
    }
}
