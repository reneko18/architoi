<?php
namespace Database\Seeders;

use App\Models\Type;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
          'name' => 'Standard'
        ]);
        Type::create([
          'name' => 'Premium'
        ]);
        Type::create([
          'name' => 'Luxe'
        ]);
    }
}
