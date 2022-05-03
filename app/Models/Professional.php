<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
  protected $fillable = [
      'name',
      'lastname',
      'email',
      'password',
      'phone',
      'city',
      'company',
      'experience',
      'works',
      'description',
      'profession_id',
      'image',
  ];
  public function professions()
   {
       return $this->belongsToMany(Profession::class,'professional_profession','professional_id','profession_id');
   }
   public function project()
    {
        return $this->hasMany(Project::class);
    }
}
