<?php

namespace App\Repositories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Collection;

class GameRepository implements GameRepositoryInterface
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
     * @return Game[]|Collection
     */
    public function all()
    {
        return $this->game->all();
    }

    /**
     * @param array $data
     *
     * @return mixed|void
     */
    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    /**
     * @param array $data
     * @param int $id
     *
     * @return mixed|void
     */
    public function update(array $data, int $id)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param int $id
     *
     * @return mixed|void
     */
    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param int $id
     *
     * @return mixed|void
     */
    public function show(int $id)
    {
        // TODO: Implement show() method.
    }
}
