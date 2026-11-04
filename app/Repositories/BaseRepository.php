<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected abstract function model(): Model;

    /**
     * @return Collection<int, \stdClass>|\Illuminate\Database\Eloquent\Collection<int, TModel>
     */
    public function getAll(): Collection
    {
        return $this->model()->where('user_id', auth()->user()->id)->get();
    }

    /**
     * Summary of store
     * @param array $data
     * @return Model
     */
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

    /**
     * Summary of update
     * @param Model $model
     * @param array $data
     * @return Model
     */
    public function update(Model $model, array $data): Model
    {
        $model->update($data);

        return $model;
    }

    /**
     * Summary of destroy
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        $this->model()::where('id', $id)->delete();
    }
}