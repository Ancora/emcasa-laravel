<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');

            $table->string('name');                     // razão social ou nome
            $table->string('register');                 // cnpj ou cpf
            $table->string('company_name')->unique();   // nome fantasia
            $table->string('description');              // descrição das atividades
            $table->string('prefix')->unique();         // prefixo dos códigos dos produtos
            $table->string('slug');                     // razao-social-ou-nome para url curta
            $table->string('address');                  // logradouro
            $table->integer('number');                  // número do logradouro
            $table->string('complement');               // complemento do endereço
            $table->string('district');                 // bairro
            $table->string('state');                    // uf
            $table->string('contact');                  // responsável
            $table->string('phone');                    // telefone fixo
            $table->string('mobile_phone');             // telefone celular
            $table->string('email');                    // e-mail
            $table->decimal('delivery_fee', 5, 2);      // taxa de entrega

            $table->timestamps();                       // data e hora

            $table->foreign('user_id')->references('id')->on('users');  // chave estrangeira (stores_user_id_foreign)

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
