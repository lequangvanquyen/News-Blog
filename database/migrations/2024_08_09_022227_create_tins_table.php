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
        Schema::create('tins', function (Blueprint $table) {
            $table->id();
            $table->char('lang', 2)->default('vi');
            $table->string('tieuDe');
            $table->string('tomTat', 1000)->nullable();
            $table->string('urlHinh')->nullable();
            $table->date('ngayDang')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('noiDung')->nullable();
            $table->integer('idLT')->default(0);
            $table->string('tacGia');
            $table->integer('xem')->default(0);
            $table->boolean('noiBat')->default(0);
            $table->boolean('anHien')->default(1);
            $table->string('tags', 2000)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tins');
    }
};
