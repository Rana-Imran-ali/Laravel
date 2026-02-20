<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class UpdateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:update-user {email=ranaimranali2210@gmail.com} {--role=admin}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update or create an admin user in the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email');
        $role = $this->option('role');

        $user = User::where('email', $email)->first();

        if ($user) {
            $user->update([
                'role' => $role,
            ]);
            $this->info("✓ User '{$email}' role updated to '{$role}' successfully!");
        } else {
            $name = $this->ask('User not found. Enter name for new user:');
            $password = $this->secret('Enter password for new user:');

            User::create([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt($password),
                'role' => $role,
            ]);

            $this->info("✓ New user '{$email}' created with role '{$role}' successfully!");
        }

        return Command::SUCCESS;
    }
}
