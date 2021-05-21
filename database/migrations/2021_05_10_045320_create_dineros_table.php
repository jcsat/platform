<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDinerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dineros', function (Blueprint $table) {
            $table->id();

            $table->decimal('monto', 5, 2);
            $table->string('url');
            
            $table->unsignedBigInteger('aporte_id');
            
            $table->foreign('aporte_id')->references('id')->on('aportes')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('dineros');
    }
}
