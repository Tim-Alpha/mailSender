<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Mail;

class sendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:sendmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send mail to all users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // commented code is to featch data from the data base in array
        
        // $userMail = User::select('email')->get();
        $emails = ['codewithaisha@gmail.com', 'sachinkinha78@gmail.com'];
        // foreach($userMail as $mail) {
        //     $emails[] = $mail['email'];
        // }
        Mail::send('email',[], function($message) use ($emails){
            $message->to($emails)->subject('Testing Mail');
        });
    }
}
