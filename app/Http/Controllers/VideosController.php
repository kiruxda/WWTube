<?php

namespace App\Http\Controllers;

use App\Services\VideosService;
use Illuminate\Http\Request;
class VideosController extends Controller{
    public function list(VideosService $service){
        return $service -> getVideos();
    }
    public function info($id, VideosService $service){
        return $service -> getVideoById($id);
    }
    public function create(Request $request, VideosService $service){
        $fields = $request->validate([
            'title'=> 'required|string|max:100',
        ]);

        return $service->createVideo($fields);
    }
}