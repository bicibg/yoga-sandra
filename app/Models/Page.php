<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Page extends Model
{
    protected $fillable = ['title', 'content', 'image', 'slug', 'template'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
