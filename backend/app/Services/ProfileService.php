<?php

namespace App\Services;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Collection;
use \Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class ProfileService{
    /**
     * Получает список видео
     * @return Collection
     */
    public function getProfiles(){
        return Profile::query()
            ->select("id","username")
            ->orderBy('created_at','desc')
            ->get();
    }

    /**
     * Получает товар по ID
     * @param mixed $id
     * @return Model
     */
    public function getProfileById($id){
        $model = Profile::query()
            ->where('id','=',$id)
            ->first();
            
        if($model===null){
            throw new NotFoundHttpException('профиль не найден');
        }

        return $model;
    }

    /**
     * Создает видео
     * @param array $data
     * @return Model|Profile
     */
    public function createProfile(array $data){
        return Profile::create($data);
    }
}