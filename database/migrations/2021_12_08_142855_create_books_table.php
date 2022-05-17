<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // title author relase
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            // $table->string('Category')->nullable();
            $table->string('Name')->nullable();
            $table->integer('Price')->nullable();
            $table->integer('Quantity')->nullable();
            $table->string('Image')->nullable();
            $table->integer("user_id")->unsigned();
            // $table->unsignedBigInteger('genreId');

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');


            // $table->foreign('genreId')->references('id')->on('genres')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
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
        Schema::dropIfExists('books');
    }
}
