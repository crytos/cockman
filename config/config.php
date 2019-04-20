<?php

return [

    # cockpit session name
    'app.name' => 'Captain',

    # cockpit session name
    'session.name' => 'AiAiCaptain',

    # define additional groups
    'groups' => [
        'author' => [
            '$admin' => false,
            '$vars' => [
                'finder.path' => '/storage/upload'
            ],
            'cockpit' => [
                'backend' => true,
                'singletons' => true
            ],
            'collections' => [
                'manage' => true
            ]
        ]
    ],

    # use smtp to send emails
    'mailer' => [
        'from'       => 'juliusmubajje1@gmail.com',
        'transport'  => 'smtp',
        'host'       => 'smtp.gmail.com',
        'user'       => 'juliusmubajje1@gmail.com',
        'password'   => 'jaymusic.ug',
        'port'       => 465,
        'auth'       => true,
        'encryption' => 'ssl'
    ],
];

?>
