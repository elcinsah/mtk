<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {


    public function up(): void
    {
        Schema::create('plazas', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("name", 20);
            $table->string("address",50);
            $table->unsignedBigInteger("rahatMtk_id");
            $table->foreign('rahatMtk_id')->references('id')->on('rahat_mtks')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plazas');
    }
};
