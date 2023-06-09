<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pos', function (Blueprint $table) {
            $table->bigIncrements('id_po');
            $table->integer('id_bu');
            $table->string('no_order');
            $table->text('customer_name');
            $table->text('address');
            $table->string('phone');
            $table->string('sales');
            $table->char('approval')->nullable();
            $table->date('date');
            $table->string('file')->nullable();
            
            // Kenapa json ini ?
            // $table->json('order_type')->nullable();
            // $table->json('remarks')->nullable();

            $table->text('order_type')->nullable();
            $table->text('remarks')->nullable();
            $table->double('total')->nullable();
            $table->double('discount')->nullable();
            $table->double('after_discount')->nullable();
            $table->double('ppn')->nullable();
            $table->double('grand_total')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('pos');
    }
}
