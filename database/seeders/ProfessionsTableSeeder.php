<?php

namespace Database\Seeders;
use App\Models\Profession;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Profession::create([
        'name' => 'Architecte'
      ]);
      Profession::create([
        'name' => 'Architecte d’intérieur '
      ]);
      Profession::create([
        'name' => 'Décorateur'
      ]);
      Profession::create([
        'name' => 'Paysagiste'
      ]);
    }
}
