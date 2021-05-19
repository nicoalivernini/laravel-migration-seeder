<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('holidays', function(Blueprint $table) {
        $table->tinyInteger('is_available')->unsigned()->default(1)->after('country');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('holidays', function (Blueprint $table){
        $table->dropColumn('is_available');
      });
    }
}
