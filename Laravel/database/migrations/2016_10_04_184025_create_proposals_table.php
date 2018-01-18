<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyName');
            $table->string('activityType');
            $table->string('address');
            $table->string('cnpj');
            $table->string('stateRegistration');
            $table->string('email');
            $table->string('phone');
            $table->string('qtdNFIn');
            $table->string('qtdNFOut');
            $table->string('qtdEmployes');
            $table->string('typeTaxation');
            $table->string('Comments');
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
        Schema::drop('proposals');
    }
}
