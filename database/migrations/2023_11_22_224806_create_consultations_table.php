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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key to associate with Users table
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('consultation_name'); // Name of the consultation service
            $table->decimal('price', 10, 2); // Price of the service
            $table->string('payment_method'); // Payment method used

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};

