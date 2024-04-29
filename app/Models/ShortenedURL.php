<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortenedURL extends Model
{
    use HasFactory;
    protected $table = 'shortened_URLs';
    protected $guarded = [];

    public static function generateShortURL($origin)
    {
        return substr(hash('sha256', $origin),0,8);
    }
}
