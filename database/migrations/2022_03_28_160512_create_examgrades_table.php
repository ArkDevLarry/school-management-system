<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examgrades', function (Blueprint $table) {
            $table->id();
            $table->string('examgrade');
            $table->string('gradepoint')->nullable();
            $table->bigInteger('markfrom')->nullable();
            $table->bigInteger('markto')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examgrades');
    }
};