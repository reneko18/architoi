<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
  protected $fillable = [
      'name',
  ];
  public function project()
   {
       return $this->belongsToMany(Project::class);
   }
}
