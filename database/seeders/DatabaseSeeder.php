<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Super Admin', 'Admin', 'User'];
         foreach ($roles as $value) {
             Role::create([
                 'name'=>$value
             ]);
         }
         \App\Models\User::factory(25)->create();

         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);
        \App\Models\Post::factory(50)->create();
    }
}
