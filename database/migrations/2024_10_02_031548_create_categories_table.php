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
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); 
            $table->string('slug')->unique(); 
            $table->text('description')->nullable(); 
            $table->string('image_path')->nullable(); 
            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->tinyInteger('status')->default(1); 
            $table->timestamps(); 
            $table->foreign('parent_id')->references(columns: 'id')->on('categories')->onDelete(action: 'cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
