<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Gender;
use App\Enums\AnimalType;
use App\Enums\ActiveStatus;

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
            $table->enum('gender', Gender::getValues());
            $table->string('type');
            $table->enum('animal_type', AnimalType::getValues());
            $table->text('introduction');
            $table->enum('active_status', ActiveStatus::getValues());
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
