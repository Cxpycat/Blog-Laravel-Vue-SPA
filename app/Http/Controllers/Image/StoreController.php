<?php

namespace App\Http\Controllers\Image;

use App\Http\Controllers\Controller;
use App\Http\Requests\Image\StoreRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $image = $data['image'];
        $name = Carbon::now()->format('d_m_y_H_i_s').'_'.Str::random(30).$image->getClientOriginalName();
        $filePath = Storage::disk('public')->putFileAs('/images/content', $image, $name);


        return response(['url' => url('/storage/'.$filePath)]);
    }
}
