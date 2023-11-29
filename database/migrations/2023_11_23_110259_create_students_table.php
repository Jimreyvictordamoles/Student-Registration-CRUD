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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->enum('section',['Helium','Hydrogen','Ruby','Emerald','Amethyst','Pearl','Carbon','Gold']);
            $table->enum('gender',['Male','Female','Others']);
            $table->date('dob');
            $table->bigInteger('studentnum')->unsigned();
            $table->bigInteger('lrnno')->unsigned();
            $table->string('homeaddress');
            $table->string('emailaddress');
            $table->string('mobile');
            $table->enum('gradelvl',['11','12']);
            $table->enum('strand',['TVL','ABM','HUMMS','STEM','GAS']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
