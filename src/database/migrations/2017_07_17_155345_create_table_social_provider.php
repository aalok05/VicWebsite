<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSocialProvider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('social_providers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->references('id')->on('users');
            $table->string('provider_id');
            $table->string('provider');
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
        Schema::drop('social_providers');
    }
}

/*

CREATE TABLE `social_providers` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) DEFAULT NULL,
 `provider_id` varchar(255) DEFAULT NULL,
 `provider` varchar(255) DEFAULT NULL,
 `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1

*/