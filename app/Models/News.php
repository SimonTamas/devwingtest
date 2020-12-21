<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    const IMAGE_WIDTH = 1200;
    const IMAGE_HEIGHT = 200;
    const THUMBNAIL_WIDTH = 100;
    const THUMBNAIL_HEIGHT = 100;

    public static function findUsingSlug(string $slug) {
        return self::where('slug', $slug)->first();
    }
}
