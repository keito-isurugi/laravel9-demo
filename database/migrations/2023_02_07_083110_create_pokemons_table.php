<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id()->comment('ポケモンID');
            $table->string('name')->comment('名前');
            $table->string('classification')->comment('種別');
            $table->string('type1')->comment('タイプ1');
            $table->string('type2')->comment('タイプ2');
            $table->smallInteger('height')->comment('高さ');
            $table->smallInteger('weight')->comment('重さ');
            $table->string('flavor_text')->comment('説明');
            $table->string('img')->comment('画像');
            $table->smallInteger('generation')->comment('世代');
            $table->json('status')->comment('ステータス[HP、攻撃、防御、特攻、特防、素早さ]');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemons');
    }
};
