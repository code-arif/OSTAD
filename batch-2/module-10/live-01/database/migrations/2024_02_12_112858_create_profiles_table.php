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
            $table->string('firstName');
            $table->string('lastName');
            $table->string('phone');
            $table->date('dob');
            $table->string('age');
            $table->string('image');
            $table->timestamps();

            //table indexing
            //single column indexing
            $table->index('firstName');
            $table->index('lastName');
            $table->unique('phone');

            //relationship
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            //multiple column indexing
            // $table->index(['firstName','lastName']);
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
