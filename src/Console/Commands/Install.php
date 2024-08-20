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

class Install extends CommandInterface 

{
    protected $signature = 'Cms:install';

    protected $description = 'Install Cms an app';

    public function getAppVer() {
        return config("Cms.ver");
    }

    public function getAppName() {
        return config("Cms.name");
    }

    public function handle()
    {
        $this->info("Install app: Cms");
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App Cms Install cannelled");
            return false;
        }
    }
}