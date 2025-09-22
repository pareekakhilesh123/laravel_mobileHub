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
        Schema::create('allproducts', function (Blueprint $table) {
           $table->id();
            $table->string('product_title');
            $table->string('product_description')->nullable();
            $table->string('category_id');
            $table->string('sub_category_id')->nullable();
            $table->string('priority')->default(10);

            $table->string('thumbnail_image')->nullable();
            $table->string('images')->nullable();

            $table->string('quantity')->default(0);
            $table->decimal('price', 10, 2);

            $table->enum('discount_type', ['percentage', 'flat'])->nullable();
            $table->decimal('discount_rate', 10, 2)->default(0.00);

            $table->decimal('tax_amount', 10, 2)->default(0.00);
            $table->decimal('shipping_cost', 10, 2)->default(0.00);

          
            $table->decimal('final_price', 10, 2)->nullable();

            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();

              $table->string('feature_key');
            $table->string('feature_value');


             $table->string('status')->default('Active');
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allproducts');
    }
};
