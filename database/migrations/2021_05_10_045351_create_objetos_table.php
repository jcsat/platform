<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetos', function (Blueprint $table) {
            $table->id();

            $table->string('codigoap', 45);
            $table->string('descripcion', 45);
            $table->enum('status', [1, 2, 3])->default(1);
            $table->text('lista_detalle');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('evento_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('evento_id')->references('id')->on('eventos')->onDelete('set null');

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
        Schema::dropIfExists('objetos');
    }
}
