<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected abstract function model(): Model;

    public function getAll()
    {
        //
    }

    public function store(array $data): Model
    {
        if (!$data) {
            return $this->model();
        }

        return $this->model()::create($data);
    }

    public function getById()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}