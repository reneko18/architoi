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
      'professional_id'
  ];
  public function professional()
   {
       return $this->belongsTo(Professional::class);
   }
   public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
    public function type()
     {
         return $this->belongsTo(Type::class);
     }
}
