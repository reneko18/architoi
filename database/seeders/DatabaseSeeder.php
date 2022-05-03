<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
      $this->call(AttributesTableSeeder::class);
      $this->call(CategoriesTableSeeder::class);
      $this->call(ProfessionsTableSeeder::class);
      $this->call(ProfessionalsTableSeeder::class);
      $this->call(ProjectsTableSeeder::class);
      $this->call(TypesTableSeeder::class);
      $this->call(UsersTableSeeder::class);      
    }
}
