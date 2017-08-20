<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->default('NULL');
            $table->string('admin')->default('NULL');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

/*
CREATE TABLE `users` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
 `created_at` timestamp NULL DEFAULT NULL,
 `updated_at` timestamp NULL DEFAULT NULL,
 `admin` int(10) DEFAULT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci

*/