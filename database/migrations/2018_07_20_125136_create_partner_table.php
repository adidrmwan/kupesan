<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('Restrict');
            $table->integer('pr_type')->nullable();
            $table->string('pr_name')->nullable();
            $table->string('pr_owner_name')->nullable();
            $table->string('pr_addr')->nullable();
            $table->string('pr_area')->nullable();
            $table->integer('pr_postal_code')->nullable();
            $table->longtext('pr_desc')->nullable();
            $table->integer('pr_phone')->nullable();
            $table->integer('pr_phone2')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('partner');
        $table->dropForeign(['user_id']);
    }
}
