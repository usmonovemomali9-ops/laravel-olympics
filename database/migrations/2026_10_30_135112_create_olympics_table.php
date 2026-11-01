<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('olympics', function (Blueprint $table) {
            $table->id();
            $table->string('title');                // Название (Афины 1896)
            $table->year('year');                   // Год
            $table->string('city');                 // Город
            $table->string('country');              // Страна
            $table->text('description');            // Описание
            $table->string('image')->nullable();    // Путь к картинке
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('olympics');
    }
};