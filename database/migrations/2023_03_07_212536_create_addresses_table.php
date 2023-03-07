<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('logradouro'); //campo para armazenar nome da rua, avenida, etc
            $table->string('numero'); //campo para armazenar número da casa
            $table->string('bairro'); //campo para armazenar o bairro
            $table->string('cidade'); //campo para armazenar a cidade
            $table->string('estado'); //campo para armazenar o Estado
            $table->unsignedBigInteger('id_usuario'); //ID do usuário, a quem  pertence o endereço
            $table->timestamps();
        });

        Schema::table('addresses', function (Blueprint $table) {
            /**
             * Aqui estamos alterando a tabela e colocando  uma chave estrangeira no campo
             * que armazena o ID do usuário
             */
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
