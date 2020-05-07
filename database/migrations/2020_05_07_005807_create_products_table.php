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
            $table->unsignedBigInteger('store_id');

            $table->string('code')->unique();               // código do produto
            $table->string('name');                         // nome do produto
            $table->string('description');                  // descrição
            $table->text('body');                           // informações
            $table->string('slug');                         // nome-do-produto para url
            $table->decimal('price', 8, 2);                 // preço: 123.456,78
            $table->decimal('discount', 8, 2);              // desconto em reais: 123.456,78
            $table->decimal('discount_percentage', 5, 2);   // desconto em porcento: 100,00
            $table->integer('quantity');                    // estoque inicial

            $table->timestamps();

            $table->foreign('store_id')->references('id')->on('stores');  // chave estrangeira (products_store_id_foreign)
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
