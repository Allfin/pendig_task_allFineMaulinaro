<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // Membuat 20 post menggunakan faker
    Post::factory(20)->create();

    // Membuat seeder untuk category
    Category::create([
      'name' => "Personal",
      'slug' => "personal"
    ]);
    Category::create([
      'name' => "Web Design",
      'slug' => "web-design"
    ]);
    Category::create([
      'name' => "Progamming",
      'slug' => "progamming"
    ]);
  }
}
