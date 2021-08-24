<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('center_id');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('name');
            $table->integer('age');
            $table->enum('gender', ['boy', 'girl']);
            $table->string('type');
            $table->enum('animal_type', ['dog', 'cat']);
            $table->text('introduction');
            $table->boolean('active_status')->default(true);
            $table->timestamps();
            
            $table->foreign('center_id')->references('id')->on('centers');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
