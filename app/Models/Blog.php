<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public $table = 'blogs';
    public $timestamps = false;
    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(BlogsCategory::class, 'category', 'id');
    }
}