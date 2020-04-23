<?php

use Illuminate\Database\Seeder;

class DiscoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('discovers')->insert([
            'texteGauche' => "je m'appelle texte",
            'texteDroite' => "Je m'appelle texte",
            "vidéo" => "https://www.youtube.com/embed/aArqRezacHc",
            "titre" => "je suis un titre",
        ]);
    }
} 
