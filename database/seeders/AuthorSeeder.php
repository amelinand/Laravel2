<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            [
                'name' =>'Sharon Jones',
            ],
            [
                'name' => 'Jennifer-E Smith'
            ],
            [
                'name' => 'Céline Fion'
            ]
        ]);
    }
}
