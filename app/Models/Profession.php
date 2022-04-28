<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
  protected $fillable = [
      'name',
  ];
  public function professional()
   {
       return $this->belongsTo(Professional::class);
   }
}
