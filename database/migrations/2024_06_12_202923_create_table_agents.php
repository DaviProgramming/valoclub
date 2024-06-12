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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_url');

        });

        DB::table('agents')->insert([

            ['name' => 'astra', 'image_url' => '/agents-images/astra.png'],
            ['name' => 'breach', 'image_url' => '/agents-images/breach.png'],
            ['name' => 'brimstone', 'image_url' => '/agents-images/brimstone.png'],
            ['name' => 'chamber', 'image_url' => '/agents-images/chamber.png'],
            ['name' => 'clove', 'image_url' => '/agents-images/clove.png'],
            ['name' => 'cypher', 'image_url' => '/agents-images/cypher.png'],
            ['name' => 'deadlock', 'image_url' => '/agents-images/deadlock.png'],
            ['name' => 'fade', 'image_url' => '/agents-images/fade.png'],
            ['name' => 'harbor', 'image_url' => '/agents-images/harbor.png'],
            ['name' => 'iso', 'image_url' => '/agents-images/iso.png'],
            ['name' => 'jett', 'image_url' => '/agents-images/jett.png'],
            ['name' => 'kayo', 'image_url' => '/agents-images/kayo.png'],
            ['name' => 'killjoy', 'image_url' => '/agents-images/killjoy.png'],
            ['name' => 'neon', 'image_url' => '/agents-images/neon.png'],
            ['name' => 'omen', 'image_url' => '/agents-images/omen.png'],
            ['name' => 'phoenix', 'image_url' => '/agents-images/phoenix.png'],
            ['name' => 'raze', 'image_url' => '/agents-images/raze.png'],
            ['name' => 'reyna', 'image_url' => '/agents-images/reyna.png'],
            ['name' => 'sage', 'image_url' => '/agents-images/sage.png'],
            ['name' => 'skye', 'image_url' => '/agents-images/skye.png'],
            ['name' => 'sova', 'image_url' => '/agents-images/sova.png'],
            ['name' => 'viper', 'image_url' => '/agents-images/viper.png'],
            ['name' => 'yoru', 'image_url' => '/agents-images/yoru.png'],

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
