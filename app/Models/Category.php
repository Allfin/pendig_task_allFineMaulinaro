<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  // menggunakan factory dan sluggable
  use HasFactory, Sluggable;

  protected $fillable = [
    'name',
    'slug',
    'id'
  ];

  public function sluggable(): array
  {
    return [
      'slug' => [
        'source' => 'name'
      ]
    ];
  }

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
