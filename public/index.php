<?php
require_once('../vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$a1 = 1;
// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('log/my.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

function deep_end($count)
{
  // добавляем 1 к параметру count
  $count += 1;
  if ($count < 48) {
    deep_end($count);
  }
}
deep_end(1);

$log->warning('Memory ' . memory_get_usage());

echo phpinfo();
