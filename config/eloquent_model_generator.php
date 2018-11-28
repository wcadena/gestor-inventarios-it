<?php

return [
    'model_defaults' => [
        'namespace'       => 'app',
        'base_class_name' => \Illuminate\Database\Eloquent\Model::class,
        'output_path'     => '',
        'no_timestamps'   => null,
        'date_format'     => 'U',
        'connection'      => 'mysql',
        'backup'          => true,
        'db_types'        => [
            'enum' => 'string',
        ],
    ],
];
