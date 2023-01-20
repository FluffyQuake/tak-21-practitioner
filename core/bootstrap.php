<?php

use FTP\Connection;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$config = require_once('config.php');

require_once('core/router.php');
require_once('core/database/Connection.php');
require_once('core/database/QueryBuilder.php');

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);