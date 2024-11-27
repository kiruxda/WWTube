<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder{
    public function run(){
        for ($i = 0; $i < 10; $i++){
            Video::create([
                "title"=> "Видео".$i,
                'views'=>$i*100,
            ]);
        }
    }
}