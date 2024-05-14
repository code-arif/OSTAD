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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('firstName')->index();
            $table->string('lastName')->index();
            $table->string('phone');
            $table->string('image');
            $table->string('address');
            $table->date('dob');
            $table->timestamps();

            //relationship with foreignId
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
