<?php

namespace App\Http\Controllers;
use App\Models\Professional;


use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function store(Professional $professional)
    {
      $this->validate(request(),[
        'image' => 'required|image|max:2048',
      ]);

      $image = request()->file('image');
      $photoUrl = $photo->store('public');
    }
}
