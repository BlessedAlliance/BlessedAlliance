<?php

/**
 * Most of the routing definitions will be done in module configuration files.
 *
 * @see https://zendframework.github.io/zend-router/routing/
 */

use Zend\Router\Http\Literal;
use BlessedAlliance\Controller;

return [
    'blessed-alliance' => [
        'type'      => Literal::class,
        'options'   => [
            'route'         => '/our-team',
            'defaults'      => [
                'controller'    => Controller\PageController::class,
                'action'        => 'index'
            ]
        ]
    ]
];
