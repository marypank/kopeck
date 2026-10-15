<?php

namespace App\Http\Services;

use App\Repositories\CategoryRepository;

class CategoryService extends BaseService
{
    public function __construct(public CategoryRepository $categoryRepository)
    {
        parent::__construct($categoryRepository);
    }

    // todo: destroy means set is_active = 0
    // todo: hard destroy means delete category and null category at every expense it have

    public function store(array $data)
    {
        $data['user_id'] = auth()->user()->id;
        return $this->baseRepository->store($data);
    }
}