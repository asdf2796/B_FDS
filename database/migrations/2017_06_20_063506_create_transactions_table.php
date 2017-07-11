<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('user_id')->nullable();
            $table->string('kodetrx')->nullable();
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->text('member_address')->nullable();
            $table->text('shipping_address')->nullable();
            $table->string('member_email')->nullable();
            $table->string('order_email')->nullable();
            $table->text('item')->nullable();
            $table->integer('total_amount')->nullable();
            $table->integer('discount')->nullable();
            $table->string('promo_code')->nullable();
            $table->string('keterangan')->nullable();
            $table->String('payment_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
