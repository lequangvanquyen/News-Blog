<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('binhluans', function (Blueprint $table) {
            $table->id();
            $table->integer('idTin')->default(0);
            $table->dateTime('ngayDang')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('noiDung');
            $table->string('email')->nullable();
            $table->string('hoTen')->nullable();
            $table->tinyInteger('anHien')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('binhluans');
    }
};
