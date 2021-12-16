<?php

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
        // $this->call(UsersTableSeeder::class);

        App\User::create([
            'name' => 'Diego Soto M',
            'email' => 'd@admin.com',
            'password' => bcrypt('123456')
        ]);

        factory(App\Post::class, 25)->create();
    }
}