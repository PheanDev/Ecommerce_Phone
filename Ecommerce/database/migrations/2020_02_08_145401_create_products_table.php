<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tblimage', function (Blueprint $table) {
            $table->string('imgID');
            $table->string('imgName');
            $table->primary('imgID');
            $table->timestamps();
        });

        Schema::create('tblproducts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('dateupload');
            $table->decimal('price');
            $table->unsignedBigInteger('userID');
            $table->string('type');
            $table->string('screen');
            $table->string('ram');
            $table->string('storage');
            $table->string('camara');
            $table->string('battery');
            $table->string('isPost');
            $table->string('sim');
            $table->string('isDelete');
            $table->string('imgID')->unique();
            $table->foreign('userID')->references('id')->on('users')->onDelete('Cascade');
            $table->foreign('imgID')->references('imgID')->on('tblimage')->onDelete('Cascade');
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
        Schema::dropIfExists('tblproducts');
        Schema::dropIfExists('tblcategory');
        Schema::dropIfExists('tblImages');
    }
}
