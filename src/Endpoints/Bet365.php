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

class Bet365 extends Endpoint
{
    public function inPlay(array $query = []): array
    {
        return $this->sendGET('v1/bet365/inplay', $query);
    }

    public function inPlayFilter(array $query = []): array
    {
        return $this->sendGET('v1/bet365/inplay_filter', $query);
    }

    public function inPlayEvent(int $fi, array $query = []): array
    {
        return $this->sendGET('v1/bet365/event', array_merge(['FI' => $fi], $query));
    }

    public function upcoming(int $sportId, array $query = []): array
    {
        return $this->sendGET('v1/bet365/upcoming', array_merge(['sport_id' => $sportId], $query));
    }

    public function preMatchOdds(int $fi, array $query = []): array
    {
        return $this->sendGET('v2/bet365/prematch', array_merge(['FI' => $fi], $query));
    }

    public function result(int $eventId): array
    {
        return $this->sendGET('v2/bet365/result', ['event_id' => $eventId]);
    }
}
