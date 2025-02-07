<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'content', 'image', 'slug', 'template'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
