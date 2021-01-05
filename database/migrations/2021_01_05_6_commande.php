<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Commande extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('commande', function (Blueprint $table) {
            $table->integer('num');
            $table->timestamps();
            //$table->foreign('article_id')->reference('id')->on('article');
            //$table->foreign('utilisateur_id')->reference('id')->on('utilisateur');
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
