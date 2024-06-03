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
        Schema::create('emp_regs', function (Blueprint $table) {
            $table->id();
            $table->string('empname');
            $table->date('dob')->format('d/m/y');
            $table->string('gender');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('designation');
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_regs');
    }
};
