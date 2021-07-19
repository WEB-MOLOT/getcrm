<?php

namespace App\Console\Commands\Test;

use App\Mail\TestMail;
use Illuminate\Console\Command;

class Mail extends Command
{
    protected $signature = 'test:mail {email}';

    protected $description = 'Тестирование отправки почты';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(): int
    {
        $email = $this->argument('email');

        dump(config('mail.mailers.smtp'));
        dump(config('mail.from'));

        \Mail::to($email)->send(new TestMail());

        return 0;
    }
}
