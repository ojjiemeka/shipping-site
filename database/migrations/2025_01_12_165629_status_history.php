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
        Schema::create('status_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_id')->index();  // Foreign key to the tracking table
            $table->string('status');
            $table->string('location')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();

            // Establish foreign key constraint
            $table->foreign('package_id')->references('id')->on('tracking')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_history');
    }
};
