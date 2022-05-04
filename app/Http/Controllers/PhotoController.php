<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use App\Models\Professional;

use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function store(Professional $professional)
    {
      $this->validate(request(),[
        'image' => 'required|image|max:2048',
      ]);
      $photo = request()->file('image');
      $photoUrl = $photo->store('public');
      $photoUrl = Storage::url($photoUrl);
      $imageName = time().'.'.$photo->extension();
      $imageUpload = new Photo();
      $imageUpload->url = $photoUrl;
      $imageUpload->professional_id = $professional->id;
      $imageUpload->save();
      return response()->json(['success'=>$imageName]);

  }

}
