<?php

declare(strict_types=1);

namespace PCore\Watcher;

use PCore\Contracts\DriverInterface;

/**
 * Class Watcher
 * @package PCore\Watcher
 * @github https://github.com/pcore-framework/watcher
 */
class Watcher
{

    public function __construct(protected DriverInterface $driver)
    {
    }

    /**
     * @return void
     */
    public function run(): void
    {
        $this->driver->watch();
    }

}
