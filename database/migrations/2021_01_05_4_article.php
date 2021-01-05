<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Article extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->String('nom');
            $table->String('descriptif');
            $table->float('Prix');
            $table->integer('stock');
            $table->date('conservation');
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
