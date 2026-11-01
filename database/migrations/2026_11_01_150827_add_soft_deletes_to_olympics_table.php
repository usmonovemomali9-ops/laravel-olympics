<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('olympics', function (Blueprint $table) {
            $table->softDeletes(); // <--- ЭТА СТРОКА ДОЛЖНА БЫТЬ
        });
    }

    public function down(): void
    {
        Schema::table('olympics', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};