<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  // menggunakan factory
  use HasFactory;

  // selain id semua bisa di ubah
  // protected $guarded = [
  //   'id'
  // ];

  // relasi ke post
  public function post()
  {
    return $this->hasMany(Post::class);
  }

  public function getRouteKeyName()
  {
    return 'slug';
  }
}
