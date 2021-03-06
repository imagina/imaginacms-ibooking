<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIbookingReservationsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('ibooking__reservations', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      // Your fields
      $table->integer('customer_id')->default(0)->unsigned();
      $table->foreign('customer_id')->references('id')->on('users');
   
      $table->timestamp('start_date')->nullable();
      $table->timestamp('end_date')->nullable();
      $table->tinyInteger('status')->default(1)->unsigned();
      
      $table->text('options')->nullable();

      $table->timestamps();
      $table->auditStamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('ibooking__reservations');
  }
}
