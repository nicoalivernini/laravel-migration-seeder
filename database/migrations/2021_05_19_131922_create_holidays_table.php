<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->smallInteger('people');
            $table->string('duration', 100);
            $table->string('country', 50);
            $table->tinyInteger('is_available')->unsigned()->default(1);
            $table->string('typology', 100);
            $table->string('category', 100);
            $table->float('cost', 8, 2);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holidays');
    }
}
