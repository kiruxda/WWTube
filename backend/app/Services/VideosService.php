<?php

namespace App\Services;

use App\Models\Video;
use Illuminate\Database\Eloquent\Collection;
use \Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class VideosService{
    /**
     * Получает список видео
     * @return Collection
     */
    public function getVideos(){
        return Video::query()
            ->select("id","title",'views')
            ->orderBy('created_at','desc')
            ->get();
    }

    /**
     * Получает товар по ID
     * @param mixed $id
     * @return Model
     */
    public function getVideoById($id){
        $model = Video::query()
            ->where('id','=',$id)
            ->first();
            
        if($model===null){
            throw new NotFoundHttpException('Видео не найдено');
        }

        return $model;
    }

    /**
     * Создает видео
     * @param array $data
     * @return Model|Video
     */
    public function createVideo(array $data){
        return Video::create($data);
    }
}