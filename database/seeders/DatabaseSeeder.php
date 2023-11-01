<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            // BlogSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'anonymous',
            'email' => 'anonymus@example.com',
            'password' => Hash::make('Samandar')
        ]);

        User::factory(100)->create()
            ->each(function ($user) {
                Blog::factory(rand(10,50))->create([
                    'user_id' => $user->id,
                ]);
            });
    }
}
