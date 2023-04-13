<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonos', function (Blueprint $table) {
            $table->id();

  
            $table->decimal('abono',12,2)->nullable();
            $table->decimal('saldo',12,2);
            $table->dateTime('abono_date')->nullable();
            $table->text('descripcion')->nullable();
            $table->date('fechaE')->nullable();
            $table->unsignedBigInteger('sale_id');
            $table->foreign('sale_id')->references('id')->on('sales');
      
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
        Schema::dropIfExists('abonos');
    }
}
