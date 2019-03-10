<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'equipos'             => 'c,r,u,d',
            'custodios'           => 'c,r,u,d',
            'proyectos'           => 'c,r,u,d',
            'ubicaciones'         => 'c,r,u,d',
            'puestos'             => 'c,r,u,d',
            'informes'            => 'c,r,u,d',
            'reportes'            => 'c,r,u,d',
            'garantiashp'         => 'c,r,u,d',
            'opcionesdechecklist' => 'c,r,u,d',
            'adminchecklist'      => 'c,r,u,d',
            'ojachecklist'        => 'c,r,u,d',
            'areas'               => 'c,r,u,d',
            'modelos'             => 'c,r,u,d',
            'ordendecompra'       => 'c,r,u,d',
            'estaciones'          => 'c,r,u,d',
            'empresa'             => 'c,r,u,d',
            'configuraciones'     => 'c,r,u,d',
            'ouath2'              => 'c,r,u,d',
            'users'               => 'c,r,u,d',
            'acl'                 => 'c,r,u,d',
            'profile'             => 'r,u',
        ],
        'administrator' => [
            'equipos'             => 'c,r,u,d',
            'custodios'           => 'c,r,u,d',
            'proyectos'           => 'c,r,u,d',
            'ubicaciones'         => 'c,r,u,d',
            'puestos'             => 'c,r,u,d',
            'informes'            => 'c,r,u,d',
            'reportes'            => 'c,r,u,d',
            'users'               => 'c,r,u,d',
            'acl'                 => 'c,r,u,d',
            'profile'             => 'r,u',
        ],
        'tecnico' => [
            'equipos'             => 'c,r,u,d',
            'custodios'           => 'c,r,u,d',
            'proyectos'           => 'c,r,u,d',
            'informes'            => 'c,r,u,d',
            'profile'             => 'r,u',
        ],
        'user' => [
            'profile' => 'r,u',
        ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,r,u',
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
