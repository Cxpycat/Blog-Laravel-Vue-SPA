<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = false;
    protected $table = 'categories';

    public function category_id()
    {
        return $this->belongsTo(Post::all(), 'category_id', 'id');
    }
}
