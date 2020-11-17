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
            $table->bigIncrements('cart_id');
            $table->unsignedBigInteger('cart_user_id');
            $table->unsignedBigInteger('cart_drug_id');
            $table->integer('cart_drug_price');
            $table->integer('cart_drug_qty');
            $table->enum('cart_status', ['pending', 'process', 'success', 'canceled']);
            $table->timestamps();
            $table->foreign('cart_user_id')->references('user_id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('cart_drug_id')->references('drug_id')->on('drugs')->onUpdate('cascade')->onDelete('cascade');
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
