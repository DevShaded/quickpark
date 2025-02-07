<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('parking_assignments', function (Blueprint $table) {
            $table->id();
            $table->string('license_plate');
            $table->foreign('license_plate')->references('license_plate')->on('vehicles')->onDelete('cascade');
            $table->foreignId('slot_id')->constrained('parking_slots')->onDelete('cascade');
            $table->timestamp('assigned_at')->useCurrent();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('parking_assignments');
    }
};
