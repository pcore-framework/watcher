<?php

declare(strict_types=1);

namespace PCore\Watcher\Contracts;

/**
 * Interface DriverInterface
 * @package PCore\Watcher
 * @github https://github.com/pcore-framework/watcher
 */
interface DriverInterface
{

    public function watch(): void;

}
