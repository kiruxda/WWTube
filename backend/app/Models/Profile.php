<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model{
    protected $table = "profiles";

    protected $fillable = [
        "username",
        'image',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function videos() {
        return $this->hasMany('Video');
      }
}