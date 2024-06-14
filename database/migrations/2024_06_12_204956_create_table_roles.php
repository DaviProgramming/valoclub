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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_url');
        });

        DB::table('roles')->insert([

            ['name' => 'duelista' , 'image_url' => 'assets/roles-images/duelista.png'],
            ['name' => 'sentinela' , 'image_url' => 'assets/roles-images/sentinela.png'],
            ['name' => 'controlador' , 'image_url' => 'assets/roles-images/controlador.png'],
            ['name' => 'iniciador' , 'image_url' => 'assets/roles-images/iniciador.png'],

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
