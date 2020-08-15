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

class Betfair extends Endpoint
{
    public function sportsbookInPlay(array $query = []): array
    {
        return $this->sendGET('v1/betfair/sb/inplay', $query);
    }

    public function sportsbookUpcoming(array $query = []): array
    {
        return $this->sendGET('v1/betfair/sb/upcoming', $query);
    }

    public function sportsbookEvent(int $eventId): array
    {
        return $this->sendGET('v1/betfair/sb/event', ['event_id' => $eventId]);
    }

    public function exchangeInPlay(array $query = []): array
    {
        return $this->sendGET('v1/betfair/ex/inplay', $query);
    }

    public function exchangeUpcoming(array $query = []): array
    {
        return $this->sendGET('v1/betfair/ex/upcoming', $query);
    }

    public function exchangeEvent(int $eventId): array
    {
        return $this->sendGET('v1/betfair/ex/event', ['event_id' => $eventId]);
    }

    public function timeline(int $eventId): array
    {
        return $this->sendGET('v1/betfair/timeline', ['event_id' => $eventId]);
    }

    public function result(int $eventId): array
    {
        return $this->sendGET('v1/betfair/result', ['event_id' => $eventId]);
    }
}
