<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Post;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        // Contact::factory(15)->create();
        User::create([
            'name' => 'cs',
            'email' => 'cs@gmail.co.id',
            'password' => bcrypt('admin'),
        ]);
    }
}
