<?php

namespace App\Console\Commands;

use App\Mail\UsersEmail;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'emaildescription';

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

        $data = ['php' => 'haitam you good' , 'body' => 'haitam hhhhhh'];
        $emails = User::pluck('email')->toArray();

        foreach($emails as $email){

            Mail::To($email)->send(new UsersEmail($data));


        }
        

        
        

        
    }
}
