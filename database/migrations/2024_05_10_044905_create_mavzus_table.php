<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('mavzus', function (Blueprint $table) {
            $table->id();
            $table->string('cours_id');
            $table->integer('number');
            $table->string('mavzu_name');
            $table->string('text');
            $table->string('video');
            $table->timestamps();
        });
    }
    public function down(): void{
        Schema::dropIfExists('mavzus');
    }
};
