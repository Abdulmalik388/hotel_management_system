<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_bookings_table.php
public function up()
{
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email');
        $table->string('phone');
        $table->date('check_in');
        $table->date('check_out');
        $table->integer('guests');
        $table->integer('rooms');
        $table->string('status')->default('pending');
        $table->timestamps();
    });
}




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
