<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use mysqli;

class KickstartApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Configure Database';

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
        $envExample = parse_ini_file(base_path('.env.example'));

        $DB_USERNAME = $this->ask('DB Username');
        $DB_PASSWORD = $this->secret('DB Password');
        $DB_NAME = $this->ask('DB Name');

        $envExample['DB_DATABASE'] = $DB_NAME;
        $envExample['DB_USERNAME'] = $DB_USERNAME;
        $envExample['DB_PASSWORD'] = $DB_PASSWORD;
        $envExample['APP_KEY'] = '';


        $f = fopen(base_path('.env'), 'w');
        foreach ($envExample as $key => $value) {
            fwrite($f, "{$key}={$value}\n");
        }
        fclose($f);

        $link = new mysqli('localhost', $DB_USERNAME, $DB_PASSWORD);
        if ($link->connect_errno) {
            $this->error(printf("Не удалось подключиться: %s\n", $link->connect_error));
        } else {
            if ($link->query("CREATE DATABASE `{$DB_NAME}`") === true) {
                $this->info('Database created');
            }
        }
        $link->close();
    }
}
