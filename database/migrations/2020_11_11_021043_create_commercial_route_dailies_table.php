<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommercialRouteDailiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercial_route_dailies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('commercial_route_id');
            $table->foreign('commercial_route_id')->references('id')->on('commercial_routes')->onDelete('cascade');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('persons')->onDelete('cascade');
            $table->unsignedBigInteger('address_id');
            $table->foreign('address_id')->references('id')->on('person_addresses')->onDelete('cascade');
            $table->unsignedBigInteger('justification_id')->nullable();
            $table->foreign('justification_id')->references('id')->on('justifications')->onDelete('set null');
            $table->timestamp('justified_at')->nullable();
            $table->timestamp('visited_at')->nullable();
            $table->string('obs')->nullable();
            $table->integer('sequency')->default(1);
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
        Schema::dropIfExists('commercial_route_dailies');
    }
}
