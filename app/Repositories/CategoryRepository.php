<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class CategoryRepository extends BaseRepository
{
    protected function model(): Model
    {
        return new Category();
    }
}