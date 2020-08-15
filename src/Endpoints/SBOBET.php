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

class SBOBET extends Endpoint
{
    public function inPlay(array $query = []): array
    {
        return $this->sendGET('v1/sbobet/inplay', $query);
    }

    public function upcoming(array $query = []): array
    {
        return $this->sendGET('v1/sbobet/upcoming', $query);
    }

    public function event(int $eventId): array
    {
        return $this->sendGET('v1/sbobet/event', ['event_id' => $eventId]);
    }

    public function result(int $eventId): array
    {
        return $this->sendGET('v1/sbobet/result', ['event_id' => $eventId]);
    }
}
