<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->boolean('fournisseur');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('solde');
            $table->timestamps();
            $table->string('remember_token')->nullable();
            //$table->foreign('paiement_id')->reference('id')->on('paiement');
            //$table-> foreign('localisation_id')->reference('id')->on('localisation');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
