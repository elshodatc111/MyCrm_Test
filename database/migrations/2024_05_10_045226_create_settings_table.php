<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('email');
            $table->string('addres');
            $table->string('sayt');
            $table->string('telegram');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('banner_text');
            $table->string('text1');
            $table->string('text2');
            $table->string('text3');
            $table->string('text4');
            $table->timestamps();
        });
    }
    public function down(): void{
        Schema::dropIfExists('settings');
    }
};
