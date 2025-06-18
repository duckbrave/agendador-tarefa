<?php
/*
 * Local configuration file to provide any overrides to your app.php configuration.
 * Copy and save this file as app_local.php and make changes as required.
 * Note: It is not recommended to commit files with credentials to public repositories.
 */
return [
    /*
     * Debug Level:
     *
     * Production Mode:
     * false: No error messages, errors, or warnings shown.
     *
     * Development Mode:
     * true: Errors and warnings shown.
     */
    'debug' => true,

    /*
     * Security and encryption configuration
     *
     * - salt - A random string used in security hashing methods.
     * The salt value is also used as the encryption key.
     * You should treat it as extremely sensitive data.
     */
    'Security' => [
        'salt' => env('SECURITY_SALT', '4e5b9ed76f0ed8b6fb3804415f075ad95bcc883c0039647623385f51bd90ff59'),
    ],

    /*
     * Connection information used by the ORM to connect
     * to your application's datastores.
     *
     * See app.php for more configuration options.
     */
    'Datasources' => [
    'default' => [
        'driver' => Cake\Database\Driver\Postgres::class,
        'persistent' => false,
        'host' => 'localhost',
        'port' => '5432',
        'username' => 'postgres',
        'password' => '91109236',
        'database' => 'agendador',
        'encoding' => 'utf8',
        'timezone' => 'UTC',
        'cacheMetadata' => true,
        'quoteIdentifiers' => false,
        'disableSchemaCache' => true,
    ],
    'test' => [
        'driver' => Cake\Database\Driver\Postgres::class,
        'persistent' => false,
        'host' => 'localhost',
        'port' => '5432',
        'username' => 'postgres',
        'password' => '91109236',
        'database' => 'agendador', // ou crie um banco de testes separado
        'encoding' => 'utf8',
        'timezone' => 'UTC',
        'cacheMetadata' => true,
        'quoteIdentifiers' => false,
        'log' => false,
    ],
],


    /*
     * Email configuration.
     *
     * Host and credential configuration in case you are using SmtpTransport
     *
     * See app.php for more configuration options.
     */
    'EmailTransport' => [
        'default' => [
            'host' => 'localhost',
            'port' => 25,
            'username' => null,
            'password' => null,
            'client' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],
];
