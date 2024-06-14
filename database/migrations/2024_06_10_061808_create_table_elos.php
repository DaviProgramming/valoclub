<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('elos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_elo');
            $table->string('image_url');
            $table->timestamps();
        });

        DB::table('elos')->insert([
            ['nome_elo' => 'ferro', 'image_url' => 'assets/elos-imges/Iron_1_Rank.png'],
            ['nome_elo' => 'bronze', 'image_url' => 'assets/elos-imges/Bronze_1_Rank.png'],
            ['nome_elo' => 'prata' , 'image_url' => 'assets/elos-imges/Silver_1_Rank.png'],
            ['nome_elo' => 'ouro', 'image_url' => 'assets/elos-imges/Gold_1_Rank.png'],
            ['nome_elo' => 'platina','image_url' => 'assets/elos-imges/Platinum_1_Rank.png'],
            ['nome_elo' => 'diamante', 'image_url' => 'assets/elos-imges/Diamond_1_Rank.png'],
            ['nome_elo' => 'ascendente', 'image_url' => 'assets/elos-imges/Ascendant_1_Rank.png'],
            ['nome_elo' => 'imortal', 'image_url' => 'assets/elos-imges/Immortal_1_Rank.png'],
            ['nome_elo' => 'radiante', 'image_url' => 'assets/elos-imges/Radiant_Rank.png'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elos');
    }
};
