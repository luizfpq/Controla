<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('type', 16)->comment('Natureza juridica');
            $table->string('CPF_CNPJ', 18)->unique()->comment('Salvar o campo com a mascara referente a ele(pontos e tracos)');
            $table->string('address', 255)->comment('endereço completo com numero');
            $table->string('postal', 16)->comment('codigo postal formatado');
            $table->string('city', 255);
            $table->string('uf', 64)->comment('unidade federativa, se for de outro pais usar `- pais`');
            $table->string('phone', 15);
            $table->string('email', 255)->nullable('NULL');
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
        Schema::dropIfExists('clients');
    }
}
