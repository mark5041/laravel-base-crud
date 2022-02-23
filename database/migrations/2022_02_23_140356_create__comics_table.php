<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('thumb');
            $table->float('price');
            $table->date('sale_date');
            $table->string('type');
            $table->string('artists');
            $table->string('writers');
            $table->integer('quantity');
            $table->timestamps();
        });

        Schema::rename('_comics', 'comics');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_comics');
    }
}
