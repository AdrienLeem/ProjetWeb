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
            $table->text('descriptif');
            $table->float('prix');
            $table->integer('stock');
            $table->String('ville');
            $table->timestamps();
            $table->unsignedBigInteger('id_user')->index();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
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
