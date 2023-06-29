<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AddUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:user {--admin}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $admin = $this->option('admin');

        $name = $this->ask('Name');
        $email = $this->ask('Email');

        $passCheck = true;
        while($passCheck) {
            $password = $this->secret('Password');
            $passwordConfirm = $this->secret('Confirm Password');

            if($password !== $passwordConfirm) {
                $this->error('Passwords do not match');
            } else {
                $passCheck = false;
            }
        }

            $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'role' => $admin ? 'admin' : 'user'
        ]);

        $verifyEmail = $this->confirm('Require email verification?', true);
        if($verifyEmail) {
            $user->sendEmailVerificationNotification();
        }
        else{
            $user->markEmailAsVerified();
        }
    }
}
