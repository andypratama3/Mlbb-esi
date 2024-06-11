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
        Schema::create('pesertas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('kontak_ketua');
            $table->string('pemain1');
            $table->string('id_server1');
            $table->string('pemain2');
            $table->string('id_server2');
            $table->string('pemain3');
            $table->string('id_server3');
            $table->string('pemain4');
            $table->string('id_server4');
            $table->string('pemain5');
            $table->string('id_server5');
            $table->string('pemain6');
            $table->string('id_server6');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertas');
    }
};
