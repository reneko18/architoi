<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
  protected $fillable = [
      'name',
  ];
  public function project()
   {
       return $this->hasOne(Project::class);
   }
}
