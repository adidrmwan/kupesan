<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMitrasActivationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitras_activation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->string('token');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
      
        Schema::table('mitras', function (Blueprint $table) {
            $table->boolean('is_activated')->default(0);
        });
    }


    public function down()
    {
        Schema::drop("mitras_activation");
        Schema::table('mitras', function (Blueprint $table) {
            $table->dropColumn('is_activated');
        });
    }
}
