<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller
{
    public function index ()
    {
        $pokemon = Pokemon::all();
        return response()->json($pokemon); 
    }

    public function getPokemonJson()
    {   
        $json = Storage::get('/public/data/pokemon.json'); // ファイル取得
        $MCjson = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN'); // 文字列をエンコード
        $MCobj = json_decode($MCjson,true); // 連想配列に変換
        return $MCobj;
    }

    public function registerPokemons()
    {
        $pokemons = $this->getPokemonJson();
        foreach($pokemons as $pokemon) {
            $poke = new Pokemon();
            $poke->name = $pokemon['name'];
            $poke->classification = $pokemon['classification'];
            $poke->type1 = $pokemon['type1'];
            $poke->type2 = $pokemon['type2'];
            $poke->height = $pokemon['height'];
            $poke->weight = $pokemon['weight'];
            $poke->status = $pokemon['status'];
            $poke->flavor_text = $pokemon['flavor_text'];
            $poke->img = $pokemon['img'];
            $poke->generation = $pokemon['generation'];
            $poke->save();
        }
    }
}
