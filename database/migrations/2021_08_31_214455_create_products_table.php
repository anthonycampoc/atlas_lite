<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->integer('stock');
            $table->string('image')->nullable();
            $table->decimal('sell_price',12,2);
            $table->enum('status',['ACTIVE','DEACTIVATE'])->default('ACTIVE');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->unsignedBigInteger('provider_id');
            $table->foreign('provider_id')->references('id')->on('providers');
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
        Schema::dropIfExists('products');
    }
}
