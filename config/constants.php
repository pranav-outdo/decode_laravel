<?php

return [
    'emptyData'         => new \stdClass(),
    'validResponse'     => [
        // 'success'    => true,
        'statusCode' => 200,
    ],
    'invalidResponse'   => [
        // 'success'    => false,
        'statusCode' => 400,
    ],
    'invalidToken'      => [
        // 'success'    => false,
        'statusCode' => 401,
        'message'    => 'Unauthorized User!',
    ],

    'user_type'         => [
        'admin'     => 'ADM'
    ],

    'is_active'         => [
        'notActive' => 0,
        'active'    => 1,
    ],

    'is_block'          => [
        'notBlock' => 0,
        'block'    => 1,
    ],
    'document_size_limit' => 1000,

    #local
    #'share_form_link' => 'http://localhost/github/decode_entropik/public',

    #demo_server_live
    #'share_form_link' => ''

    #live_aws
    #'share_form_link' => ''

    'resources'         => [
        'e-books' => 'e-books',
    ],


];
