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

      $pro = Profession::get();
      return view('admin.users.edit', compact('professional','pro'));
  }
}
