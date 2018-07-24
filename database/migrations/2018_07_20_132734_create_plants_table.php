<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('plants', function (Blueprint $table) {
           $table->increments('id');
           $table->string('name', 30);
           $table->string('latinName', 40)->nullable();
           $table->text('description')->nullable();
           $table->string('type', 20)->nullable();
           $table->text('flowers')->nullable();
           $table->decimal('winterHard', 2, 0)->nullable();
           $table->double('height')->nullable();
           $table->string('moisture', 10)->nullable();
           $table->string('light', 30)->nullable();
           $table->string('groundType')->nullable();
           $table->string('edible')->nullable();
           $table->string('dealer')->nullable();
           $table->date('datePurchase')->nullable();
           $table->string('link')->nullable();
           $table->binary('picture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plants');
    }
}
