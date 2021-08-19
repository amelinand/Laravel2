<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
        [
            'title' =>'Burn after writing',
            'author_id' => 1,
            'publication_year' => '2010',
            'synopsis' =>"Pouvez-vous être vraiment honnête lorsque personne ne vous regarde ? TikTok, Facebook, Linkedln, Twitter, Instagram, WhatsApp, Snapchat, YouTube... Le monde est devenu un gigantesque confessionnal.",
        ],
        [
            'title' =>"L'amour en trois questions",
            'author_id' => 2,
            'publication_year' =>'2021',
            'synopsis' =>"Traverser les Etats-Unis en train avec une parfaite inconnue...  ?",
        ],
        [
            'title' =>'Voir le monde sans quitter la France',
            'author_id' => 3,
            'publication_year' =>'2020',
            'synopsis' =>"Le Finistère plutôt que la Polynésie, les Vosges plutôt que la Finlande, la Corse plutôt que les Seychelles, Le Havre plutôt que Brasilla, les Cévennes plutôt que la Chine... ",
        ]
        ]);
    }

}
