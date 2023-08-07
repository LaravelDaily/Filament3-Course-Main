<?php

return [

    'title' => 'Registrieren',

    'heading' => 'Registrieren',

    'actions' => [

        'login' => [
            'before' => 'oder',
            'label' => 'mit Konto anmelden',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'E-Mail-Adresse',
        ],

        'name' => [
            'label' => 'Name',
        ],

        'password' => [
            'label' => 'Passwort',
            'validation_attribute' => 'Passwort',
        ],

        'password_confirmation' => [
            'label' => 'Passwort bestätigen',
        ],

        'actions' => [

            'register' => [
                'label' => 'Registrieren',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Zu viele Anmeldeversuche. Versuchen Sie es bitte in :seconds Sekunden nochmal.',
        ],

    ],

];
