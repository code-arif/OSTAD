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
        Schema::create('customers', function (Blueprint $table) {
                     $table->id();
                     $table->string('customerName',50)->index();
                     $table->string('email',50);
                     $table->string('phone',50);
                     //foreign id
                     $table->unsignedBigInteger('user_id');
                     //relationship
                     $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete()->cascadeOnUpdate();

                     $table->timestamp('created_at')->useCurrent();
                     $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
