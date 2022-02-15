<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Categorias::factory(4)->create();
        for ($i=1; $i<4; $i++){
            Categories::create([
                'name' =>'Categoria'.$i
            ]);
        }
    }
}
