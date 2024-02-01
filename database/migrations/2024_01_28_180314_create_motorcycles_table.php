<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('motorcycles', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->integer('year');
            $table->string('color');
            $table->integer('price');
            $table->integer('quantity');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('motorcycles');
    }
};