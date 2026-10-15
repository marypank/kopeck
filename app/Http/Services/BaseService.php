<?php

namespace App\Http\Services;

use App\Repositories\BaseRepository;

abstract class BaseService implements BaseServiceInterface
{
    // todo: replace array with dto

    public function __construct(public BaseRepository $baseRepository)
    {}

    public function getAll()
    {
        return $this->baseRepository->getAll();
    }

    public function store(array $data)
    {
        return $this->baseRepository->store($data);
    }

    public function getById()
    {
        return $this->baseRepository->getById();
    }

    public function update()
    {
        return $this->baseRepository->update();
    }

    public function destroy()
    {
        return $this->baseRepository->destroy();
    }
}