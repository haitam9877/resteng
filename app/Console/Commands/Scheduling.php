<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class Scheduling extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:exdnt';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'schedulingdesk';

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
     * @return int
     */
    public function handle()
    {
        $users = User::where('expair', 0)->get();

        foreach($users as $user){

            $user -> update(['expair' => 1]);

        }


    }
}
