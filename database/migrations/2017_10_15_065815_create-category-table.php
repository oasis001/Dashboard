<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('pricing_type',['unit_price','percentage']);
            $table->integer('pricing_value');
            $table->enum('type',['0','1'])->comment('0 means decrease 1 means increase');
            $table->enum('timely_changeable',['0','1'])->comment('0 means no 1 means yes');
            $table->integer('times_value')->comment('like 2 times or 3 times etc');
            $table->integer('times_duration')->comment('like 10 minutes');
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
        Schema::dropIfExists('category');
    }
}
