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
    $table->string('product_name');
    $table->string('cat_id');
    $table->string('subcat_id');
    $table->text('description');
    $table->string('thumbnail _img');
     $table->string('mulitiple_img');
    $table->text('pfeatures');
    $table->string('priority');
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
