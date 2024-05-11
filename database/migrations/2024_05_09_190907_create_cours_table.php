<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string('crm_user_id');
            $table->string('category_id');
            $table->string('techer_id');
            $table->string('cours_name');
            $table->integer('price1');
            $table->integer('price2');
            $table->integer('azolik');
            $table->string('davomiyligi');
            $table->string('video');
            $table->string('image');
            $table->string('min_text');
            $table->string('max_text');
            $table->timestamps();
        });
    }

    public function down(): void{
        Schema::dropIfExists('cours');
    }
};
