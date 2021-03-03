<?php

namespace App\Repositories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Http;

class GameSearchRepository implements GameSearchRepositoryInterface
{
    /**
     * @var Game
     */
    protected $game;

    /**
     * @param Game $game
     */
    public function __construct(Game $game)
    {
        $this->game = $game;
    }

    /**
     * @param string $name
     *
     * @return array
     */
    public function searchByName(string $name): array
    {
        $games = [];
        $response = Http::get(config('game.api_url') . '/games', [
            'search' => $name,
            'key' => config('game.api_key'),
        ]);

        if ($response->successful()) {
            return $response['results'];
        }

        return $games;
    }
}
