<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-08-20 18:26:37
 * @link https://github.com/xxxl4
 * 
 */
namespace NexaMerchant\Cms\Console\Commands;

use NexaMerchant\Apps\Console\Commands\CommandInterface;

class UnInstall extends CommandInterface 

{
    protected $signature = 'Cms:uninstall';

    protected $description = 'Uninstall Cms an app';

    public function getAppVer() {
        return config("Cms.ver");
    }

    public function getAppName() {
        return config("Cms.name");
    }

    public function handle()
    {
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App Cms UnInstall cannelled");
            return false;
        }
    }
}