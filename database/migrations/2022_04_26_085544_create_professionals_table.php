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
        Schema::create('professionals', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('lastname');
          $table->string('email')->unique();
          $table->string('password')->nullable();
          $table->string('phone')->unique();
          $table->string('city');
          $table->string('company');
          $table->string('experience');
          $table->string('works');
          $table->text('description');
          $table->string('image')->nullable();
          $table->timestamps();
          /*$table->unsignedBigInteger('profession_id');
          $table->foreign('profession_id')
                ->references('id')->on('professions')
                ->onDelete('set null');*/
          $table->foreignId('profession_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professionals');
    }
};
