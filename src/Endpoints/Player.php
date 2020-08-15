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

class Player extends Endpoint
{
    public function view(int $playerId): array
    {
        return $this->sendGET('v1/player', ['player_id' => $playerId]);
    }
}
