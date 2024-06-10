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
            $table->timestamps();
        });

        DB::table('elos')->insert([
            ['nome_elo' => 'ferro'],
            ['nome_elo' => 'bronze'],
            ['nome_elo' => 'prata'],
            ['nome_elo' => 'ouro'],
            ['nome_elo' => 'platina'],
            ['nome_elo' => 'diamante'],
            ['nome_elo' => 'ascendente'],
            ['nome_elo' => 'imortal'],
            ['nome_elo' => 'radiante'],
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
