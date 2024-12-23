<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortenedURL extends Model
{
    use HasFactory;
    protected $table = 'shortened_urls';
    protected $fillable = [
        'origin',
        'shortened',
        'user_id',
        'clicks'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public static function generateShortURL($origin)
    {
        return substr(hash('sha256', $origin),0,8);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
