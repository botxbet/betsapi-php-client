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

class Bwin extends Endpoint
{
    public function inPlay(int $sportId): array
    {
        return $this->sendGET('v1/bwin/inplay', ['sport_id' => $sportId]);
    }

    public function event(int $eventId): array
    {
        return $this->sendGET('v1/bwin/event', ['event_id' => $eventId]);
    }

    public function preMatchOdds(array $query = []): array
    {
        return $this->sendGET('v1/bwin/prematch', $query);
    }

    public function result(int $eventId): array
    {
        return $this->sendGET('v1/bwin/result', ['event_id' => $eventId]);
    }
}
