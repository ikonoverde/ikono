<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FilePermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:config';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // Get filesystems configuration
        $session = config('session');

        $this->info(json_encode($session, JSON_PRETTY_PRINT));
    }
}
