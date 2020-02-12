<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'db' => [
        'connection' => [
            'indexer' => [
                'host' => 'mysql',
                'dbname' => 'magento2',
                'username' => 'root',
                'password' => '123123',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'persistent' => null
            ],
            'default' => [
                'host' => 'mysql',
                'dbname' => 'magento2',
                'username' => 'root',
                'password' => '123123',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ],
            'checkout' => [
                'host' => 'mysql',
                'dbname' => 'magento2_quote',
                'username' => 'root',
                'password' => '123123',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1'
            ],
            'sales' => [
                'host' => 'mysql',
                'dbname' => 'magento2_sales',
                'username' => 'root',
                'password' => '123123',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1'
            ]
        ],
        'table_prefix' => ''
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '47205479ba4e7e3e97a39bdebec88c4e'
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ],
        'checkout' => [
            'connection' => 'checkout'
        ],
        'sales' => [
            'connection' => 'sales'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'backend' => 'Cm_Cache_Backend_Redis',
                'backend_options' => [
                    'server' => 'redis',
                    'database' => '0',
                    'port' => '6379'
                ],
            ],
            'page_cache' => [
                'backend' => 'Cm_Cache_Backend_Redis',
                'backend_options' => [
                    'server' => 'redis',
                    'port' => '6379',
                    'database' => '1',
                    'compress_data' => '0'
                ]
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'cache_types' => [
        'config' => 0,
        'layout' => 0,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'target_rule' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'google_product' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'drogasil.local'
    ],
    'install' => [
        'date' => 'Fri, 31 Jan 2020 15:07:47 +0000'
    ]
];
