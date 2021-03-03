<?php

namespace App\Services;

use App\Repositories\GameRepositoryInterface;
use App\Repositories\GameSearchRepositoryInterface;
use Illuminate\Http\JsonResponse;

class GameService
{
    /**
     * @var GameRepositoryInterface
     */
    protected $gameRepositoryInterface;

    /**
     * @var GameSearchRepositoryInterface
     */
    protected $gameSearchRepositoryInterface;

    /**
     * @param GameRepositoryInterface $gameRepositoryInterface
     * @param GameSearchRepositoryInterface $gameSearchRepositoryInterface
     */
    public function __construct(
        GameRepositoryInterface $gameRepositoryInterface,
        GameSearchRepositoryInterface $gameSearchRepositoryInterface
    ) {
        $this->gameRepositoryInterface = $gameRepositoryInterface;
        $this->gameSearchRepositoryInterface = $gameSearchRepositoryInterface;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->gameRepositoryInterface->all();
    }

    /**
     * @param string $name
     *
     * @return array
     */
    public function search(string $name): array
    {
        return $this->gameSearchRepositoryInterface->searchByName($name);
    }
}
