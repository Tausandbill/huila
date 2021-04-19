<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesCuidadorNiñoPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuidador_niño', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cuidador_id');
            $table->unsignedBigInteger('niño_id');
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
        Schema::dropIfExists('cuidador_niño');
    }
}
