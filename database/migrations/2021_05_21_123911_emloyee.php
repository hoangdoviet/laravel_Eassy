<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Emloyee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contact', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id();
=======
            $table->increments('id');
>>>>>>> 6d99061 (Authentication and Mail)
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->text('content');
<<<<<<< HEAD
            $table->timestamps();
=======
            //   $table->timestamps();
>>>>>>> 6d99061 (Authentication and Mail)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Contact');
    }
}
