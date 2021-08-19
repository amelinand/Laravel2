<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'name' =>'Développement personnel',
            ],
            [
                'name' => 'Romans'
            ],
            [
                'name' => 'témoignages & co'
            ],
            [
                'name' => 'Tourisme vert'
            ]
        ]);
    }
}
