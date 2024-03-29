<?php

namespace Database\Seeders;

use App\Models\Log;
use App\Models\Profile;
use App\Models\Server;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for($i = 0; $i < 100; $i++){
            User::factory(100)
                ->has(Profile::factory(10), 'profiles')
                ->create();
        }

        for($i = 0; $i < 10; $i++){
            Server::factory(1)
                ->has(Log::factory(1000), 'logs')
                ->create();
        }

    }
}
