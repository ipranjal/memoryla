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
    'client_id' => '359537154446451',
    'client_secret' => '30e88922a420c31ac18d9e8ed47c69d1',
    'redirect' => 'http://memoryla.dev/callback/facebook',
],
     'google' => [
    'client_id' => '959640649779-c6vpq9c7hhgmsd7rtsii46ebsaso8b4j.apps.googleusercontent.com',
    'client_secret' => 'EjXULDbGY0CDZdHfUSbCaq87',
    'redirect' => 'http://memoryla.dev/callback/google',
],

];
