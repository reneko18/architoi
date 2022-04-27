<?php
namespace Database\Seeders;

use App\Models\Category;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Category::create([
        'name' => 'Appartement'
      ]);
      Category::create([
        'name' => 'Maison'
      ]);
      Category::create([
        'name' => 'Studio'
      ]);
      Category::create([
        'name' => 'Restaurant'
      ]);
      Category::create([
        'name' => 'Boutique'
      ]);
      Category::create([
        'name' => 'Bureaux'
      ]);
      Category::create([
        'name' => 'Autres'
      ]);
    }
}
