<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('user_id');
            $table->date('date');
            $table->unsignedInteger('status_id')->default(1);
            $table->timestamps();

            $table->foreign('status_id')
                ->references('id')
                ->on('statuses')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
