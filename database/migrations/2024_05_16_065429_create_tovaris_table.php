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
        Schema::create('tovaris', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Info');
            $table->string('Cost');
            $table->string('image');
            $table->string('Firm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tovaris');
    }
};
