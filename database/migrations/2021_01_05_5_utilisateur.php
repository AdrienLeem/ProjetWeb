<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Utilisateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->boolean('fournisseur');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('solde');
            $table->timestamps();
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
