<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->tinyInteger('type')->default(0); // 0 pedido, 1 bonificação, 2 troca, 3 pedido negociacao ( sem nota )
            $table->unsignedBigInteger('commercial_route_id');
            $table->foreign('commercial_route_id')->references('id')->on('commercial_routes')->onDelete('cascade');
            $table->unsignedBigInteger('commercial_route_daily_id')->nullable();
            $table->foreign('commercial_route_daily_id')->references('id')->on('commercial_route_dailies')->onDelete('set null');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('persons')->onDelete('cascade');
            $table->unsignedBigInteger('payment_id')->nullable();
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
            $table->unsignedBigInteger('installment_id')->nullable();
            $table->foreign('installment_id')->references('id')->on('installments')->onDelete('cascade');
            $table->unsignedBigInteger('price_id');
            $table->foreign('price_id')->references('id')->on('prices')->onDelete('cascade');
            $table->string('obs')->nullable();
            $table->float('financy')->nullable();
            $table->float('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->decimal('total', 10, 2)->default(0);
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
        Schema::dropIfExists('orders');
    }
}
