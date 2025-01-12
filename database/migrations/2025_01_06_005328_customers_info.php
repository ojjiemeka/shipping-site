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
        //
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // CustomerID as Primary Key
            // $table->string('username')->unique();
            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('customers');
    }
};
