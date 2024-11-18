<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create('fills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_id');
            $table->json('content');

            $table->foreign('form_id')->references('id')->on('forms');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fills');
    }
};
