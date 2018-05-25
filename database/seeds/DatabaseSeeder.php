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

        $faker = \Faker\Factory::create();

        $user = new \App\User();
        $user->name = $faker->name;
        $user->email = $faker->unique()->safeEmail;
        $user->password = $faker->password(0, 20);
        $user->remember_token = str_random(10);
        $user->save();

        $item = new \App\Item();
        $items->user_id = $user->id;
        $items->content = $faker->text();
        $items->save();
    }
}



