<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class ResetProject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ol:reset-project';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset Project..';

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
        Artisan::call('migrate:refresh');
        Artisan::call('db:seed --class=SuperAdminSeeder');
        Artisan::call('db:seed --class=AppSeeder');


        dd('Project Successfully Reset');
    }
}
