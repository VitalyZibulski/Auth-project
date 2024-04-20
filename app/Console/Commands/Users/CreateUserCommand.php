<?php

namespace App\Console\Commands\Users;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUserCommand extends Command
{
    protected $signature = 'users:create';

    protected $description = 'Command description';

    public function handle()
    {
        $user = new User();
        $user->first_name = $this->ask('Имя', 'Test');
        $user->email = $this->ask('Email', 'test@mail.com');
        $user->password = $this->ask('Пароль', 'Password1!');

        $user->save();

        $this->info('Пользователь создан');
    }
}
