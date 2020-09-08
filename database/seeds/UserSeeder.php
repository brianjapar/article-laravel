<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = factory(App\User::class, 3)
        ->create()
        ->each(function ($user) {
        $user->articles()->save(factory(App\Artikel::class)->make());
        });


    }

}
