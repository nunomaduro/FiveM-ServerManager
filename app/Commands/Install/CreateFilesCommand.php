<?php

namespace App\Commands\Install;

use Illuminate\Support\Facades\Storage;
use LaravelZero\Framework\Commands\Command;

class CreateFilesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:files';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates the config files used.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(): void
    {
        if (! Storage::exists('settings.json')) {
            Storage::put('settings.json', '{}');
        }

        if (! Storage::exists('servers.json')) {
            Storage::put('servers.json', '{}');
        }
    }
}
