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
        Schema::create('santos', function (Blueprint $table) {
            $table->id();

            $table->string('name', 32);
            $table->string('last_name', 32);
            $table->string('place_of_birth', 32);
            $table->date('date_of_blessing') ->nullable(true);
            $table->smallInteger('num_miracle')-> unsigned();

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
        Schema::dropIfExists('santo');
    }
};
