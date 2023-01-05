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
        Schema::create('cliente_cadastros', function (Blueprint $table) {

            $table->id();

            $table->string('nomeDoCliente',50);

            $table->string('emailDoCliente',50);

            $table->string('cpfDoCliente',11);

            $table->string('telefoneDoCliente',14);

            $table->date('dataDeNascimento');

            $table->string('senhaDoCliente');
          

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
        Schema::dropIfExists('cliente_cadastros');
    }
};
