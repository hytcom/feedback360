<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
$longName = exec("echo \$TZ"); if (!empty($longName)) {date_default_timezone_set($longName);}
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|   'connectionString' Hostname, database, port and database type for
|    the connection. Driver example: mysql. Currently supported:
|               mysql, pgsql, mssql, sqlite, oci
|   'username' The username used to connect to the database
|   'password' The password used to connect to the database
|   'tablePrefix' You can add an optional prefix, which will be added
|               to the table name when using the Active Record class
|
*/
return array(
    'components' => array(
        'db' => array(
            'connectionString' => getenv("LIMESURVEY_DB_CS"),
            'emulatePrepare' => true,
            'username' => getenv("LIMESURVEY_DB_USER"),
            'password' => getenv("LIMESURVEY_DB_PASSWORD"),
            'charset' => getenv("LIMESURVEY_DB_CHARSET"),
            'attributes' => array(),
            'tablePrefix' => getenv("LIMESURVEY_TABLE_PREFIX"),
        ),

        'urlManager' => array(
            'urlFormat' => getenv("LIMESURVEY_URL_FORMAT"),
            'rules' => array(),
            'showScriptName' => getenv("LIMESURVEY_SHOW_SCRIPT_NAME"),
        ),

    ),
    // Use the following config variable to set modified optional settings copied from config-defaults.php
    'config'=>array(
        'siteadminemail' => getenv("LIMESURVEY_ADMIN_EMAIL"),
        'siteadminbounce' => getenv("LIMESURVEY_FROM_EMAIL"),
        'siteadminname' => getenv("LIMESURVEY_ADMIN_NAME"),
        'emailmethod' => 'smtp',
        'emailsmtphost' => getenv("LIMESURVEY_SMTP_HOST"),
        'emailsmtpuser' => getenv("LIMESURVEY_SMTP_USER"),
        'emailsmtppassword' => getenv("LIMESURVEY_SMTP_PASSWORD"),
        'emailsmtpssl' => getenv("LIMESURVEY_SMTP_SSL"),
        'emailsmtpdebug' => 1,
        'RPCInterface' => getenv("LIMESURVEY_API_MODE"),
        'debug'=> getenv("LIMESURVEY_DEBUG"),
        'debugsql'=> getenv("LIMESURVEY_SQL_DEBUG"),
        'tempdir' => getenv("LIMESURVEY_TEMP_DIR")
    )
);
/* End of file config.php */
/* Location: ./application/config/config.php */
