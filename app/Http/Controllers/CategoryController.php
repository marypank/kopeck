<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Http\Services\CategoryService;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    public function __construct(private readonly CategoryService $categoryService)
    {
        $this->authorizeResource(Category::class);
    }

    public function index()
    {
        return CategoryResource::collection($this->categoryService->getAll());
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
        return new CategoryResource($this->categoryService->update($category, $request->validated()));
    }

    public function destroy(Category $category, Request $request)
    {
        // todo: request is extra flag - hard delete or soft delete (laravel actually have функционал для этого)
        $this->categoryService->destroy($category->id);

        return response()->noContent(Response::HTTP_NO_CONTENT);
    }
}
