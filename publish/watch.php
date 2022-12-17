<?php

declare(strict_types=1);

use PCore\Watcher\Drivers\FindDriver;
use PCore\Watcher\Watcher;

require_once './vendor/autoload.php';

$progress = function () {
    proc_open(PHP_BINARY . ' bin/swoole.php', [], $pipes);
};

$progress();

$driver = new FindDriver([__DIR__ . '/../src'], function () use ($progress) {
    posix_kill((int)file_get_contents(__DIR__ . '/../var/app/master.pid'), SIGTERM);

    $progress();
});

(new Watcher($driver))->run();
