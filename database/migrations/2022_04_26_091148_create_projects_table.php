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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('budget');
            $table->string('duration');
            $table->string('area');
            $table->string('city');
            $table->text('description');
            $table->string('imagemain')->nullable();
            $table->string('images')->nullable();
            $table->timestamps();
            $table->foreignId('professional_id')->constrained()->onDelete('cascade');
            $table->foreignId('attribute_id');
            $table->foreignId('type_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
