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
    Schema::create('appointments', function (Blueprint $table) {
        $table->id();

        // link to user who submitted the request
        $table->foreignId('user_id')->constrained()->cascadeOnDelete();

        // data coming from the form
        $table->string('name');
        $table->string('email');
        $table->string('mobile');
        $table->string('service');   
        $table->date('date');
        $table->time('time');
        $table->text('message')->nullable();

        // admin side
        $table->enum('status', ['pending', 'approved', 'declined'])
              ->default('pending');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
