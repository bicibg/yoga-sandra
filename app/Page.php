<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Page extends Model
{
    protected $fillable = ['title', 'content', 'image', 'slug', 'template'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function deleteImage()
    {
        if ($this->image) {
            Storage::delete($this->image);
        }
    }

}
