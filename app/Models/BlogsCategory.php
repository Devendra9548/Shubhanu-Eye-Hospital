<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogsCategory extends Model
{
    use HasFactory;
    public $table = 'blogs_categories';
    public $timestamps = false;
    public function parent()
    {
        return $this->belongsTo(BlogsCategory::class, 'bccategory', 'id');
    }
}
