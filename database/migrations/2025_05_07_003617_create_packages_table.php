<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('packages', function (Blueprint $table) {
        $table->id();
        $table->string('name');          
        $table->text('description');     
        $table->decimal('price', 8, 2);  
        $table->text('details')->nullable();
        $table->string('icon')->nullable(); 
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
