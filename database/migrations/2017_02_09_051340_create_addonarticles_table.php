<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddonarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addonarticles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typeid');
            $table->text('body')->nullable();
            $table->string('imagepics')->nullable();
            $table->string('redirect')->nullable();
            $table->string('coordinate')->nullable();
            $table->string('companyname')->nullable();
            $table->string('companyaddr')->nullable();
            $table->string('companydev')->nullable();
            $table->string('companyphone')->nullable();
            $table->string('companyemail')->nullable();
            $table->string('companydate')->nullable();
            $table->string('companyarea')->nullable();
            $table->string('companyopt')->nullable();
            $table->string('companypay')->nullable();
            $table->string('companylsno')->nullable();
            $table->string('companyinfotitle')->nullable();
            $table->string('companyavtitle')->nullable();
            $table->string('companyareatitle')->nullable();
            $table->string('processtitle')->nullable();
            $table->string('productiontitle')->nullable();
            $table->string('teamtitle')->nullable();
            $table->string('credittitle')->nullable();
            $table->text('companyadvantage')->nullable();
            $table->text('companyareacontent')->nullable();
            $table->text('processcontent')->nullable();
            $table->text('productioncontent')->nullable();
            $table->text('teamcontent')->nullable();
            $table->text('creditcontent')->nullable();
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
        Schema::drop('addonarticles');
    }
}
