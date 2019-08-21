<?php
date_default_timezone_set('Asia/Shanghai');
header("Content-type: text/html; charset=utf-8");

use Gameapp\App\GameServer;
use Gameapp\Conf\Config;

require __DIR__ .'/../../vendor/autoload.php';

$config = Config::getPortConf();
GameServer::getInstance()->initServer($config)->start();