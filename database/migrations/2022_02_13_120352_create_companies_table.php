<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id()->unsigned()->comment('Campo que o indice de campo empresa para o sistema, auto incremento, chave primaria e nao vaziu');
            $table->string('name_company', 75)->nullable(false)->comment('Campo contem o nome da empresa, nao pode ser vaziu.');
            $table->unsignedBigInteger('cnpj_company', false)->unsigned()->nullable(false)->unique(true)->comment('Campo vai armazenar o numero de identificacao da empresa, cnpj, nao vaziu e dever ser unico');
            $table->enum('status_company', ['on', 'off'])->nullable(false)->default('on')->comment('Campo vai definir se a empresa esta ativa ou nao, por padrao a empresa estara avivada');
            $table->nullableTimestamps($precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
