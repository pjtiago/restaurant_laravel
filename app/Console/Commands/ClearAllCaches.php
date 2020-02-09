<?php

namespace App\Console\Commands;

use Artisan;
use Illuminate\Console\Command;


class ClearAllCaches extends Command
{
    protected $signature = 'clear-all-caches';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clears all application caches';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Artisan::call('route:clear');
        $this->info('Route cache cleared!');

        Artisan::call('config:clear');
        $this->info('Configuration cache cleared!');

        Artisan::call('view:clear');
        $this->info('Compiled views cleared!');

        Artisan::call('cache:clear');
        $this->info('Cache cleared successfully.');
    }
}
