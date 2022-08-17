<?php

use Illuminate\Http\Request;

return [
    'defualt' => [
        'title' => 'MHS-Startup',
    ],

    //check AnimationServiceProvider to change animation in the whole project
    'animation' => [
        'main_animation' => 'animate__animated',
        'animationInClass' => '',
        'animationOutClass' => '',
        'navbarIn' => '',
        'navbarOut' => '',
        'toolbarIn' => '',
        'toolbarOut' => '',
        'timer' => 500,
    ],

    'roles' => [

        'names' => [
            'adminRole' => 'superadmin',
            'userRole' => 'user',
        ],

        'actions' => [
            'assignRole' => 'assign',
            'removeRole' => 'remove',
        ],
    ],

    'email' => [

        'action' => [
            'verify' => 'verify',
            'reset' => 'reset',
        ],

        'subject' => [
            'verify' => 'Please click on the link to verify your account in '.env('APP_NAME'),
            'reset' => 'Password Resset Link To Your '.env('APP_NAME').' account',
        ],

        'view' => [
            'verify' => 'auth.emails.verify',
            'reset' => 'auth.emails.reset',
        ]
    ],

    'firebase' => [
        'key' => 'AAAAyFTKxgI:APA91bEtSzOiQHAXsfxtyWY0yOmAKd22RLcvCMrF3dvNcBpf8vWTfP2O1PyVza_4nhIXsm--ufhOk_WmKnfotbaNVFzpUjoEYfWVpL2vtP3nK82imewt3gdL8WDq8g-p5NVECZvuoaw5'
    ],

];

?>
