<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoryResource;
use App\Models\Category;


class IndexController extends Controller
{
    public function __invoke()
    {
        $data = Category::all();
        return response(CategoryResource::collection($data));
    }
}