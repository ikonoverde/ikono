<?php

return [
    'paypal_smart_button' => [
        'code'             => 'paypal_smart_button',
        'title'            => 'PayPal Smart Button',
        'description'      => 'PayPal',
        'client_id'        => 'AY0t5nnNfUaRQhOa3NZgOlhkRHqWaUiCQCs_rTkBiNqnSchuBWmHOSGF803aKiA3TKN1YhCJzSORhbQn',
        'class'            => 'Webkul\Paypal\Payment\SmartButton',
        'sandbox'          => true,
        'active'           => true,
        'sort'             => 0,
    ],

    'paypal_standard' => [
        'code'             => 'paypal_standard',
        'title'            => 'PayPal Standard',
        'description'      => 'PayPal Standard',
        'class'            => 'Webkul\Paypal\Payment\Standard',
        'sandbox'          => true,
        'active'           => true,
        'business_account' => 'manuel@ikonoverde.com',
        'sort'             => 3,
    ],
];
