<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();


        $images = isset($data['image']) ? $data['image'] : null;
        $imagesIdForDelete = isset($data['images_id_for_delete']) ? $data['images_id_for_delete'] : null;

        unset($data['images'], $data['images_id_for_delete'], $data['images_url_for_delete']);
        unset($data['imageIdForDelete']);
        if ($images) {
            foreach ($images as $image) {
                $name = Carbon::now()->format('d_m_y_H_i_s') . '_' . Str::random(15) . $image->getClientOriginalName();
                $filePath = Storage::disk('public')->putFileAs('/images', $image, $name);
                $data['image'] = url('/storage/' . $filePath);
            }
        }
        $post->update($data);


        return response(['status' => true]);
    }
}