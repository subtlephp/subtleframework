<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/26
 * Time: 23:50
 */

use Monolog\Logger;
use Ramsey\Uuid\Uuid;
use SubtleFramework\Config\Env;
use SubtleFramework\Log;

require __DIR__ . '/vendor/autoload.php';

if (!defined('ENV')) {
    define('ENV', 'dev');
}

if (!defined('APP_NAME')) {
    define('APP_NAME', 'subtleapp');
}

if (!defined('REQUEST_ID')) {
    define('REQUEST_ID', Uuid::uuid4());
}

if (!defined('APP_DIR')) {
    define('APP_DIR', __DIR__ . '/src');
}

if (!defined('LOG_DIR')) {
    define('LOG_DIR', '/home/frost/log/apps/' . APP_NAME);
}

Log::setLevel(Logger::DEBUG);
Log::debug('hello, I am subtle php framework', ['foo' => 'bar']);