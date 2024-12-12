<?php

namespace App\Http\Controllers;

use App\Services\ProfileService;
use Illuminate\Http\Request;
class ProfileController extends Controller{
    public function list(ProfileService $service){
        return $service -> getProfiles();
    }
    public function info($id, ProfileService $service){
        return $service -> getProfileById($id);
    }
    public function create(Request $request, ProfileService $service){
        $fields = $request->validate([
            'username'=> 'required|string|max:100',
        ]);

        return $service->createProfile($fields);
    }
}