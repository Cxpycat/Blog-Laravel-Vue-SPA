<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $images = $data['image'];
        unset($data['image']);

        foreach ($images as $image) {
            $name = Carbon::now()->format('d_m_y_H_i_s').'_'.Str::random(15).$image->getClientOriginalName();
            $filePath = Storage::disk('public')->putFileAs('/images', $image, $name);
        }
        $post = Post::create([
            'title' => $data['title'],
            'content' => $data['content'],
            'category_id' => $data['category_id'],
            'image' => url('/storage/'.$filePath),
        ]);


        return response(['status' => true]);
    }
}
