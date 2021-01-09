<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->String('nom');
            $table->String('descriptif');
            $table->float('prix');
            $table->integer('stock');
            $table->timestamps();
            //$table->foreign('categorie_id')->reference('id')->on('categorie');

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
