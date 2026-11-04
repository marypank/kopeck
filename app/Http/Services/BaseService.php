<?php

namespace App\Http\Services;

use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class BaseService implements BaseServiceInterface
{
    // todo: replace array with dto

    public function __construct(public BaseRepository $baseRepository)
    {}

    /**
     * Summary of getAll
     * @return Collection<int, \stdClass>|\Illuminate\Database\Eloquent\Collection<int, \App\Repositories\TModel>
     */
    public function getAll(): Collection
    {
        return $this->baseRepository->getAll();
    }

    /**
     * Summary of store
     * @param array $data
     * @return Model
     */
    public function store(array $data): Model
    {
        return $this->baseRepository->store($data);
    }

    public function getById()
    {
        return $this->baseRepository->getById();
    }

    /**
     * Summary of update
     * @param Model $model
     * @param array $data
     * @return Model
     */
    public function update(Model $model, array $data): Model
    {
        return $this->baseRepository->update($model, $data);
    }

    /**
     * Summary of destroy
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        $this->baseRepository->destroy($id);
    }
}