<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $fillable = [
      'name',
      'budget',
      'duration',
      'area',
      'description',
      'city',
      'professional_id',
      'attribute_id',
      'type_id'
  ];
  public function professional()
   {
       return $this->belongsTo(Professional::class);
   }
   public function attribute()
    {
        return $this->hasOne(Attribute::class);
    }
    public function type()
     {
         return $this->hasOne(Type::class);
     }
}
