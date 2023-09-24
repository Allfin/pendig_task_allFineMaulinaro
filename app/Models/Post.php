<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
  // menggunakan factory dan slug otomatis
  use HasFactory, Sluggable;

  // selain id semua bisa di ubah
  protected $guarded = [
    'id'
  ];

  // agar sluggable bisa digunakan
  public function sluggable(): array
  {
    return [
      'slug' => [
        'source' => 'title'
      ]
    ];
  }

  // relasi ke kategori
  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  // menentukan kolom yang menjadi kunci route
  public function getRouteKeyName()
  {
    return 'slug';
  }
}
