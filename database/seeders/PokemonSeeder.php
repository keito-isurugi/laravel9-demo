<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pokemon::insert([
            'name' => 'フシギダネ',
            'classification' => 'たねポケモン',
            'type1' => 'くさ',
            'type2' => 'どく',
            'height' => 100,
            'weight' => 9999,
            'flavor_text' => '生まれたときから　背中に\n不思議な　タネが　植えてあって\n体と　ともに　育つという。',
            'img' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/1.png',
            'generation' => 1,
            'status' =>  json_encode(
                [
                    'hp' => 100,
                    'attack' => 100,
                    'defense' => 100,
                    'special_attack' => 100,
                    'special_defense' => 100,
                    'speed' => 100,
                ],
            ), 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
