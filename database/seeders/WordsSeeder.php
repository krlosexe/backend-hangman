<?php

namespace Database\Seeders;


use App\Models\Words;
use Illuminate\Database\Seeder;

class WordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Words::factory(10)->create([]);
    }
}
