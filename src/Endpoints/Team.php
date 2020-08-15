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

class Team extends Endpoint
{
    public function all(int $sportId, array $query = []): array
    {
        return $this->sendGET('v1/team', array_merge(['sport_id' => $sportId], $query));
    }

    public function squad(int $teamId): array
    {
        return $this->sendGET('v1/team/squad', ['team_id' => $teamId]);
    }
}
