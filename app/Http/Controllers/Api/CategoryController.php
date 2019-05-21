<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Transformers\CategoryTransformer;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return $this->response->paginator($categories, new CategoryTransformer());
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->fill($request->all());
        $category->save();
        return $this->response->item($category, new CategoryTransformer());
    }

    public function edit(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        return $this->response->item($category, new CategoryTransformer());
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->fill($request->all());
        $category->update();
        return $this->response->item($category, new CategoryTransformer());
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return $this->response->noContent();
    }
}
