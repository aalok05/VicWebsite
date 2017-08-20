<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIdeas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('ideas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('college');
            $table->string('title');
            $table->string('body');
            $table->string('slug');
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
         Schema::drop('ideas');
    }
}
/*
CREATE TABLE `ideas` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) DEFAULT NULL,
 `title` varchar(255) DEFAULT NULL,
 `body` varchar(255) DEFAULT NULL,
 `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
 `slug` varchar(255) DEFAULT NULL,
 `college` varchar(255) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1

*/