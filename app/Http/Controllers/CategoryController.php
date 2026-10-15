<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Http\Services\CategoryService;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(private readonly CategoryService $categoryService)
    {}

    public function index()
    {
        //
    }

    public function store(StoreCategoryRequest $request)
    {
        return new CategoryResource($this->categoryService->store($request->validated()));
    }

    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    public function destroy(Category $category, Request $request)
    {
        // todo: request is extra flag - hard delete or soft delete (laravel actually have функционал для этого)
    }
}
