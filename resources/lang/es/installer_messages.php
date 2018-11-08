<?php

return [

    /*
     *
     * Traducciones compartidas.
     *
     */
    'title'  => 'Instalador de Sistema de Inventarios Web Ecuatask',
    'next'   => 'Siguiente',
    'finish' => 'Instalar',

    /*
     *
     * Traducciones de la página principal.
     *
     */
    'welcome' => [
        'title'         => 'Bienvenido al instalador',
        'message'       => 'Bienvenido al asistente de configuración',
        'next'          => 'Instalar Sistema Ecuatask',
        'templateTitle' => 'Bienvenido al Instalador Ecuatask',
    ],

    /*
     *
     * Tranducciones de la página de requisitos.
     *
     */
    'requirements' => [
        'title'         => 'Requisitos',
        'next'          => 'Siguiente',
        'templateTitle' => 'Paso 1 | Requisitos del servidor',
    ],

    /*
     *
     * Traducciones de la pagina de permisos.
     *
     */
    'permissions' => [
        'title'         => 'Permisos',
        'next'          => 'Siguiente',
        'templateTitle' => 'Paso 2 | Permisos',
    ],

    /*
     *
     * Traducciones de la página de entorno.
     *
     */

    'environment' => [
        'title'   => 'Configuraciones del entorno',
        'save'    => 'Guardar archivo .env',
        'success' => 'Los cambios en tu archivo .env han sido guardados.',
        'errors'  => 'No es posible crear el archivo .env, por favor intentalo manualmente.',
        'menu'    => [
            'wizard-button'  => 'Desde Wizard Setup',
            'classic-button' => 'Editor de Texto Clasico',
            'desc'           => 'Seleccione cómo desea configurar el archivo de aplicaciones <code>.env</code>.',
            'templateTitle'  => 'Paso 3 | Configuración del entorno',
            'title'          => 'Configuración del entorno',
        ],
        'wizard' => [
            'templateTitle' => 'Paso 3 | Configuración del entorno | Asistente guiado',
            'title'         => 'Asistente Guiado <code>.env</code>.',
            'tabs'          => [
                'environment' => 'Ambiente',
                'database'    => 'Base de datos',
                'application' => 'Aplicación',
            ],
            'form' => [
                'name_required'                      => 'Se requiere un nombre de entorno.',
                'app_name_label'                     => 'Nombre de la aplicación',
                'app_name_placeholder'               => 'Nombre de la aplicación',
                'app_environment_label'              => 'Entorno de aplicación',
                'app_environment_label_local'        => 'Local',
                'app_environment_label_developement' => 'Desarrollo',
                'app_environment_label_qa'           => 'Qa',
                'app_environment_label_production'   => 'Production',
                'app_environment_label_other'        => 'Otros',
                'app_environment_placeholder_other'  => 'Ingrese su entorno...',
                'app_debug_label'                    => 'Depuración de la aplicación',
                'app_debug_label_true'               => 'Verdadero',
                'app_debug_label_false'              => 'Falso',
                'app_log_level_label'                => 'Nivel de registro de la aplicación',
                'app_log_level_label_debug'          => 'debug',
                'app_log_level_label_info'           => 'info',
                'app_log_level_label_notice'         => 'notice',
                'app_log_level_label_warning'        => 'warning',
                'app_log_level_label_error'          => 'error',
                'app_log_level_label_critical'       => 'critical',
                'app_log_level_label_alert'          => 'alert',
                'app_log_level_label_emergency'      => 'emergency',
                'app_url_label'                      => 'URL de la Aplicación',
                'app_url_placeholder'                => 'URL de la Aplicación',
                'db_connection_label'                => 'Conexión de Base de Datos',
                'db_connection_label_mysql'          => 'mysql',
                'db_connection_label_sqlite'         => 'sqlite',
                'db_connection_label_pgsql'          => 'pgsql',
                'db_connection_label_sqlsrv'         => 'sqlsrv',
                'db_host_label'                      => 'Database Host',
                'db_host_placeholder'                => 'Database Host',
                'db_port_label'                      => 'Database Port',
                'db_port_placeholder'                => 'Database Port',
                'db_name_label'                      => 'Database Name',
                'db_name_placeholder'                => 'Nombre de la Base de Datos',
                'db_username_label'                  => 'Database User Name',
                'db_username_placeholder'            => 'Database User Name',
                'db_password_label'                  => 'Database Password',
                'db_password_placeholder'            => 'Database Password',

                'app_tabs' => [
                    'more_info'                => 'More Info',
                    'broadcasting_title'       => 'Broadcasting, Caching, Session, &amp; Queue',
                    'broadcasting_label'       => 'Broadcast Driver',
                    'broadcasting_placeholder' => 'Broadcast Driver',
                    'cache_label'              => 'Cache Driver',
                    'cache_placeholder'        => 'Cache Driver',
                    'session_label'            => 'Session Driver',
                    'session_placeholder'      => 'Session Driver',
                    'queue_label'              => 'Queue Driver',
                    'queue_placeholder'        => 'Queue Driver',
                    'redis_label'              => 'Redis Driver',
                    'redis_host'               => 'Redis Host',
                    'redis_password'           => 'Redis Password',
                    'redis_port'               => 'Redis Port',

                    'mail_label'                  => 'Mail',
                    'mail_driver_label'           => 'Mail Driver',
                    'mail_driver_placeholder'     => 'Mail Driver',
                    'mail_host_label'             => 'Mail Host',
                    'mail_host_placeholder'       => 'Mail Host',
                    'mail_port_label'             => 'Mail Port',
                    'mail_port_placeholder'       => 'Mail Port',
                    'mail_username_label'         => 'Mail Username',
                    'mail_username_placeholder'   => 'Mail Username',
                    'mail_password_label'         => 'Mail Password',
                    'mail_password_placeholder'   => 'Mail Password',
                    'mail_encryption_label'       => 'Mail Encryption',
                    'mail_encryption_placeholder' => 'Mail Encryption',

                    'pusher_label'                  => 'Pusher',
                    'pusher_app_id_label'           => 'Pusher App Id',
                    'pusher_app_id_palceholder'     => 'Pusher App Id',
                    'pusher_app_key_label'          => 'Pusher App Key',
                    'pusher_app_key_palceholder'    => 'Pusher App Key',
                    'pusher_app_secret_label'       => 'Pusher App Secret',
                    'pusher_app_secret_palceholder' => 'Pusher App Secret',
                ],
                'buttons' => [
                    'setup_database'    => 'Configurar Base de Datos',
                    'setup_application' => 'Aplicación de Configuración',
                    'install'           => 'Instalar',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Step 3 | Configuración del entorno | Editor clásico',
            'title'         => 'Editor de entorno clásico',
            'save'          => 'Gravar .env',
            'back'          => 'Usar el asistente',
            'install'       => 'Guarde e instale',
        ],
        'success' => 'Su configuración de archivo .env se ha guardado.',
        'errors'  => 'No se puede guardar el archivo .env, créelo manualmente.',
    ],

    /*
     *
     * Traducciones de la página final.
     *
     */
    'final' => [
        'title'     => 'Finalizado.',
        'finished'  => 'La aplicación ha sido instalada con éxito!',
        'exit'      => 'Haz click aquí para salir.',
        'migration' => 'Migration &amp; Seed Console Output:',
        'console'   => 'Application Console Output:',
        'log'       => 'Installation Log Entry:',
        'env'       => 'Final .env File:',
    ],
];
