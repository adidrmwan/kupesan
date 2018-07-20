<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ps_package', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('pkg_category_them')->nullable();
            $table->string('pkg_name_them')->nullable();
            $table->longtext('pkg_desc_them')->nullable();
            $table->integer('pkg_price_them')->nullable();
            $table->string('pkg_img_them')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')
                ->on('partner')
                ->onDelete('cascade')
                ->onUpdate('Restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ps_package');
    }
}
