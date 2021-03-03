<?php

namespace App\Repositories;

interface GameRepositoryInterface
{
    /**
     * @return mixed
     */
    public function all();

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param array $data
     * @param int $id
     *
     * @return mixed
     */
    public function update(array $data, int $id);

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function delete(int $id);

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function show(int $id);
}
