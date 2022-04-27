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
      'telephone',
      'city',
      'company',
      'experience',
      'works',
      'description',
      'profession',
      'image',
  ];
}
