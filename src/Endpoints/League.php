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

class League extends Endpoint
{
    public function all(int $sportId, array $query = []): array
    {
        return $this->sendGET('v1/league', array_merge(['sport_id' => $sportId], $query));
    }

    public function table(int $leagueId): array
    {
        return $this->sendGET('v2/league/table', ['league_id' => $leagueId]);
    }

    public function topList(int $leagueId): array
    {
        return $this->sendGET('v1/league/toplist', ['league_id' => $leagueId]);
    }
}
