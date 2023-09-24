<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
  use HasFactory, Sluggable;

  protected $guarded = [
    'id'
  ];

  public function sluggable(): array
  {
    return [
      'slug' => [
        'source' => 'title'
      ]
    ];
  }

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function getRouteKeyName()
  {
    return 'slug';
  }
}
