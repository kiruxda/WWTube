<?php

namespace App\Http\Controllers;

class ProductVideos extends Controller{
    public function list(){
        return [
            [
                "id"=> 1,
                "title"=> "title1",
                "channel_name"=> "channel1",
                "views"=> 100000
            ],
            [
                "id"=> 2,
                "title"=> "title2",
                "channel_name"=> "channel2",
                "views"=> 12800
            ]
        ];
    }
    public function info($id){
        return [
            "id"=> $id,
            "title"=> "title1",
            "channel_name"=> "channel1",
            "views"=> 100000
        ];
    }
}