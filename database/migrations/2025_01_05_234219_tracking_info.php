<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tracking', function (Blueprint $table) {
            $table->id();  // Ensure you use the 'id' column as a primary key 
            $table->unsignedBigInteger('package_id');  // Use unsigned big integer, or small integer for efficiency.
            $table->unsignedBigInteger('address_id')->nullable(); // Nullable in case the address isn't mandatory
            $table->string('package_status')->default('Pending'); // Default to Pending, then update on the fly 
            $table->string('tracking_number')->unique();
            $table->string('shipping_method')->nullable();
            $table->timestamp('ship_date')->nullable();
            $table->timestamp('delivery_date')->nullable(); 
            $table->text('notes')->nullable();

            $table->string('current_location')->nullable();  // New column for tracking location. Ex: 'City'
            $table->string('carrier_name')->nullable(); // Ex: 'UPS', 'FedEx'
            $table->decimal('shipping_cost', 2, 2)->default(0.0); // Optional, but can be a good practice to have this column.
            $table->boolean('is_delayed')->default(false); // For delayed packages

            // Add the new flag to indicate if the package is returned.
            $table->boolean('is_returned')->default(false); 

            // Additional flags, like insurance status (boolean), etc.
            $table->boolean('is_insured')->default(false); 
        });
    }

    public function down(): void 
    {
        Schema::dropIfExists('tracking'); // Use the correct name!
    }
};
