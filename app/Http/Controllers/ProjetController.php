<?php

namespace App\Http\Controllers;
use App\Models\Professional;
use App\Models\Profession;
use App\Models\Project;
use App\Models\Attribute;
use App\Models\Type;
use App\Http\Requests\EditProjectRequest;

use Illuminate\Http\Request;

class ProjetController extends Controller
{
  public function show(Project $project)
  {
      $professional = Professional::get();
      return view('project',compact('professional', 'project'));
  }

  public function edit(Project $project)
  {
    $profession = Profession::get();
    $professionals = Profession::get();
    $attributes = Attribute::get();
    $types = Type::get();
    return view('projectedit',compact('professionals', 'project','profession','attributes','types'));
  }

  public function update(EditProjectRequest $request, Project $project)
  {
    $project->update($request->validated());
    return redirect()->route('projet-edit',[$project]);
  }
}
