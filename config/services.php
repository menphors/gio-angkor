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
    'client_id' => '187300418691356',
    'client_secret' => '4a1710a324ea00faf128039ebf341c69',
    'redirect' => 'http://localhost:8000/callback',
    ],
    'google' => [
    'client_id' => '410773597479-mmo0a6oeea7h3v6q23bockad8ueodghd.apps.googleusercontent.com',
    'client_secret' => '0OuHhIIChc2sr6TD5ZUxrz1q',
    'redirect' => 'http://localhost:8000/google/callback',
    ],

];
