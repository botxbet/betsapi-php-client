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

class Event extends Endpoint
{
    public function inPlay(int $sportId, array $query = []): array
    {
        return $this->sendGET('v1/events/inplay', array_merge(['sport_id' => $sportId], $query));
    }

    public function upcoming(int $sportId, array $query = []): array
    {
        return $this->sendGET('v2/events/upcoming', array_merge(['sport_id' => $sportId], $query));
    }

    public function ended(int $sportId, array $query = []): array
    {
        return $this->sendGET('v2/events/ended', array_merge(['sport_id' => $sportId], $query));
    }

    public function search(int $sportId, int $homeId, int $awayId, int $time): array
    {
        return $this->sendGET('v1/events/search', [
            'sport_id' => $sportId,
            'home'     => $homeId,
            'away'     => $awayId,
            'time'     => $time,
        ]);
    }

    public function view(int $eventId): array
    {
        return $this->sendGET('v1/events/view', ['event_id' => $eventId]);
    }

    public function history(int $eventId, array $query = []): array
    {
        return $this->sendGET('v1/events/history', array_merge(['event_id' => $eventId], $query));
    }

    public function oddsSummary(int $eventId): array
    {
        return $this->sendGET('v2/events/odds/summary', ['event_id' => $eventId]);
    }

    public function odds(int $eventId, array $query = []): array
    {
        return $this->sendGET('v2/events/odds', array_merge(['event_id' => $eventId], $query));
    }

    public function statsTrends(int $eventId): array
    {
        return $this->sendGET('v1/events/stats_trend', ['event_id' => $eventId]);
    }

    public function lineup(int $eventId): array
    {
        return $this->sendGET('v1/events/lineup', ['event_id' => $eventId]);
    }

    public function videos(int $eventId): array
    {
        return $this->sendGET('v1/events/videos', ['event_id' => $eventId]);
    }

    public function mergeHistory(array $query = []): array
    {
        return $this->sendGET('v1/events/merge_history', $query);
    }
}
