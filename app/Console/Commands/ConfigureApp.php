<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ConfigureApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:configure';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Configure app';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('key:generate');
        $this->call('migrate');
    }
}
