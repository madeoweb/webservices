<?php
        return [
            'propel' => [
                'database' => [
                    'connections' => [
                        'default' => [
                            'adapter'    => 'mysql',
                            'classname'  => 'Propel\Runtime\Connection\ConnectionWrapper',
                            'dsn'        => 'mysql:host=localhost;dbname=webservices',
                            'user'       => 'root',
                            'password'   => '',
                            'attributes' => []
                        ]
                    ]
                ],
                'runtime' => [
                    'defaultConnection' => 'default',
                    'connections' => ['default']
                ],
                'generator' => [
                    'defaultConnection' => 'default',
                    'connections' => ['default']
                ]
            ]
        ];
?>