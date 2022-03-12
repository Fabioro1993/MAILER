<?php

namespace App\Console\Commands;

use App\Models\Email as ModelsEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Command;
use App\Mail\Email;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:send_email {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $id = $this->argument('id');

        $email = ModelsEmail::find($id);

        if ($email) {
            Mail::to($email->addressee)->send(new Email(
            $email->subject,
            $email->addressee,
            $email->message,
            $email->user_id));

            $email->status = 1;
            $email->save();

            $this->warn("Correo id: ".$id.' enviado.');
        }else{
            $this->warn("Correo id: ".$id.' no existe.');
        }
    }
}