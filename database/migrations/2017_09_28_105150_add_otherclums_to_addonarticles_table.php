<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOtherclumsToAddonarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addonarticles', function (Blueprint $table) {
            $table->string('mjlx')->nullable();
            $table->string('syfw')->nullable();
            $table->string('zydx')->nullable();
            $table->string('zzgy')->nullable();
            $table->string('azfs')->nullable();
            $table->string('guige')->nullable();
            $table->string('zhanguan')->nullable();
            $table->string('ticket')->nullable();
            $table->string('zhdz')->nullable();
            $table->string('zhtel')->nullable();
            $table->string('xqnum')->nullable();
            $table->string('price')->nullable();
            $table->string('productname')->nullable();
            $table->string('mixnum')->nullable();
            $table->string('senddate')->nullable();
            $table->timestamp('starttime')->nullable();
            $table->timestamp('endtime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addonarticles', function (Blueprint $table) {
            $table->dropColumn(['mjlx','syfw','zydx','zzgy','azfs','guige','zhanguan','ticket','zhdz','starttime','endtime','xqnum','price','productname','mixnum','senddate']);
        });
    }
}
