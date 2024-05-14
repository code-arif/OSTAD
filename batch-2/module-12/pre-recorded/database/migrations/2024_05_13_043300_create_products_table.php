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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title',200);
            $table->string('short_description',500);
            $table->string('price',30);
            $table->boolean('discount');
            $table->string('discount_price',20);
            $table->string('image',200);
            $table->boolean('stock');
            $table->float('star');
            $table->enum('remark',['popular','new','top','special','regular','trending'])->default('popular');

            //foreign key
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');

            //relationship
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('brand_id')->references('id')->on('brands')->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
