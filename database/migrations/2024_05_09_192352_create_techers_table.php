<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('techers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('about');
            $table->string('image');
            $table->string('telegram');
            $table->string('instagram');
            $table->string('facebook');
            $table->timestamps();
        });
    }
    public function down(): void{
        Schema::dropIfExists('techers');
    }
};
