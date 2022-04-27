<?php
namespace Database\Seeders;

use App\Models\Attribute;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Attribute::create([
        'name' => 'Rénovation totale'
      ]);
      Attribute::create([
        'name' => 'Rénovation partielle'
      ]);
    }
}
