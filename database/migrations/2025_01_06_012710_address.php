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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id(); // AddressID as Primary Key
            $table->unsignedBigInteger('customer_id')->index();
            $table->text('address');
            $table->string('city');
            $table->string('state');
            $table->string('zipCode');
            $table->string('country');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('addresses');
    }
};
