<?php

namespace App\Repositories;

interface GameSearchRepositoryInterface
{
    /**
     * @param string $name
     * @return mixed
     */
    public function searchByName(string $name);
}
