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
    Schema::create('exam_requests', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->enum('type', ['test', 'package']);
        $table->unsignedBigInteger('test_id')->nullable();
        $table->unsignedBigInteger('package_id')->nullable();
        $table->date('date');
        $table->time('time');
        $table->string('insurance_number')->nullable();
        $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
        $table->timestamps();

        $table->foreign('test_id')->references('id')->on('tests')->onDelete('set null');
        $table->foreign('package_id')->references('id')->on('packages')->onDelete('set null');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_requests');
    }
};
