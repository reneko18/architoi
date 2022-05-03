<?php

namespace App\Http\Controllers;
use App\Models\Profession;
use App\Models\Professional;
use App\Models\Project;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
  public function show(Professional $professional)
  {
      $project = Project::get();
      return view('profil',compact('professional', 'project'));
  }

  public function edit(Professional $professional)
  {

    $project = Project::get();
    $profession = Profession::get();
    return view('profiledit',compact('professional', 'project','profession'));
  }
}
