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
   Schema::create('rooms', function (Blueprint $table) {
    $table->id();
    $table->string('room_number');
    $table->string('room_type');
    $table->enum('status', ['available', 'booked'])->default('available');
    $table->decimal('price', 8, 2);
    $table->string('image')->nullable();
    $table->timestamps();
});

}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
