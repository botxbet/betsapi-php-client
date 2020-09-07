<?php

declare(strict_types=1);

/*
 * This file is part of BetsAPI PHP Client.PHP Client.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\BetsAPI\Endpoints;

class OneExBet extends Endpoint
{
    public function inPlay(array $query = []): array
    {
        return $this->sendGET('v1/1xbet/inplay', $query);
    }

    public function upcoming(int $sportId, array $query = []): array
    {
        return $this->sendGET('v1/1xbet/upcoming', array_merge(['sport_id' => $sportId], $query));
    }

    public function event(int $eventId): array
    {
        return $this->sendGET('v1/1xbet/event', ['event_id' => $eventId]);
    }

    public function result(int $eventId): array
    {
        return $this->sendGET('v1/1xbet/result', ['event_id' => $eventId]);
    }
}
