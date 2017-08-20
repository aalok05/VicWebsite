<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],


   'facebook' => [
    'client_id' => '1400309026731771',
    'client_secret' => '6913a78774ddcfc69f27e16d0427cc46',
    'redirect' => 'https://vicwebsite.azurewebsites.net/auth/facebook/callback',
],

'google' => [
    'client_id' => '802874127518-6ankgloej0bipld58226apeqcv8nk58f.apps.googleusercontent.com',
    'client_secret' => 'hGlGUz5mf09oLTMxup55JZug',
    'redirect' => 'https://vicwebsite.azurewebsites.net/auth/google/callback',
],
];
