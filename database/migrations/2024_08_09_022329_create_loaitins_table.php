<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loaitins', function (Blueprint $table) {
            $table->id();
            $table->char('lang', 2)->default('vi');
            $table->string('ten', 100)->default('');
            $table->string('noidung', 255);
            $table->tinyInteger('thuTu')->default(0);
            $table->tinyInteger('anHien')->default(1);
            $table->timestamps(); // This adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loaitins');
    }
};
