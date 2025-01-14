<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tracking', function (Blueprint $table) {
            $table->foreign('package_id')
                  ->references('id')
                  ->on('packages')
                  ->onDelete('cascade');
                  
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('set null'); // Foreign key constraint

        });
        
    }

    public function down(): void
    {
        Schema::table('tracking', function (Blueprint $table) {
            $table->dropForeign(['package_id']);
        });
    }
};
