<?php

return [
    // Zend Framework Configuration
    'view_manager' => [
        'template_map' => [            
            'partial/footer'            => __DIR__ . '/../templates/layout/partial/footer.phtml',
            'widget/banner/footer'      => __DIR__ . '/../templates/layout/widget/banner/footer.phtml'
        ],
        'template_path_stack' => [
            'blessed-alliance' => __DIR__ . '/../templates',
        ]
    ],

    // Zend Expressive Configuration
    'templates'     => [        
        'map'       => [            
            'partial/footer'            => __DIR__ . '/../templates/layout/partial/footer.phtml',
            'widget/banner/footer'      => __DIR__ . '/../templates/layout/widget/banner/footer.phtml'
        ],
        'paths'     => [
            'blessed-alliance'  => [__DIR__ . '/../templates']
        ]
    ],

    /**
     * Zend View Helpers
     */
    'view_helpers'  => [
        'aliases'       => [],
        'invokables'    => [],
        'factories'     => []
    ]
];
