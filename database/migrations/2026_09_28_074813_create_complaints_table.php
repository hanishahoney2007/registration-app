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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string("full_name");
            $table->string("email");
            $table->string("mobile");
            $table->string("company_name")->nullable();
            $table->text("complaints");
            $table->string('serial_number');
            $table->string('modal');
            $table->string('operating_system');
            $table->string('device');
            $table->string('category');
            $table->json('nature_of_complaint');
            $table->text('network_type')->nullable();
            $table->string('documents');
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->text('location_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
