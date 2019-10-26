<?php

namespace LaravelHelper\Processes;

use LaravelHelper\Interfaces\IRunnable;
use LaravelHelper\Processes\BaseProcess;

class RemoveVendor extends BaseProcess implements IRunnable
{
    /**
     * @var string
     */
    public $message = 'Removing Vendor dir';

    /**
     * @var array
     */
    protected $command = ['rm', '-rf', './config/ide-helper.php'];

    /**
     * @return void
     *
     * @throws ProcessFailed
     */
    public function run()
    {
        parent::run();
    }
}
