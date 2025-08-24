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
        Schema::create('portofolios', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // judul portofolio
            $table->string('slug')->unique(); // slug untuk url
            $table->text('description')->nullable(); // deskripsi
            $table->string('image')->nullable(); // path gambar/thumbnail
            $table->string('link')->nullable(); // link eksternal (jika ada)
            $table->enum('status', ['draft', 'published'])->default('draft'); // status publikasi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolios');
    }
};
