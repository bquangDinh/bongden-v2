<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserPermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('permissions', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users');
          $table->string('write_article')->default("allowed");
          $table->string('approve_article')->default("not allowed");
          $table->string('review_article')->default("not allowed");
          $table->string('add_subject')->default("not allowed");
          $table->string('upload_gallery')->default("not allowed");
          $table->string('delete_gallery')->default("not allowed");
          $table->string('edit_staff')->default("not allowed");
          $table->string('show_staff')->default("not allowed");
          $table->string('user_approve')->default("not allowed");
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
        Schema::dropIfExists('permissions');
    }
}
