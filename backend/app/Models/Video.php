<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model{
    protected $table = "videos";

    protected $fillable = [
        "title",
        "views",
        'thumbnail',
        'likes',
        'dislikes',
    ];

    protected $casts = [
        'views' => 'integer',
    ];
    public function profile() {
        return $this->belongsTo('Profile'); 
      }
}