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
            $table->text('description');
            $table->string('imagemain');
            $table->string('images');
            $table->timestamps();
        });
    }

    /*Il manque le id du professionel pour faire le lien entre le projet et le professionel*/

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
