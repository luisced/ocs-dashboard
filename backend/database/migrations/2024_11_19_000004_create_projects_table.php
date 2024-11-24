<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Projects', function (Blueprint $table) {
            $table->id('ID_Project');
            $table->string('Email', 70);
            $table->string('Name', 100);
            $table->unsignedBigInteger('Id_Contact');
            $table->string('Description', 200);
            $table->string('Objective', 200);
            $table->unsignedBigInteger('ID_Type');
            $table->text('Photo');
            $table->string('URL', 150);
            $table->unsignedBigInteger('Id_Social_Network');
            $table->string('Phone_Number', 15)->nullable();
            $table->string('Address', 150)->nullable();
            $table->boolean('Status');
            $table->dateTime('dTimeStamp');

            $table->foreign('Id_Contact')->references('Id')->on('Contacts');
            $table->foreign('ID_Type')->references('ID_Type')->on('Types');
            $table->foreign('Id_Social_Network')->references('Id')->on('Social_Network');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Projects');
    }
}
