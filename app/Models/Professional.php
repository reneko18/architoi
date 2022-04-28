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
  public function profession()
   {
       return $this->belongsTo(Profession::class);
   }
   public function project()
    {
        return $this->hasOne(Project::class);
    }
}
