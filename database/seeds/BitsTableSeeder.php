<?php

use Illuminate\Database\Seeder;

class BitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Bit::truncate();
        \App\Bit::unguard();

        $faker = \Faker\Factory::create();

        \App\User::all()->each(function ($user) use ($faker) {
            foreach (range(1, 5) as $i) {
                \App\Bit::create([
                    'user_id' => $user->id,
                    'snippet'   => $faker->sentence
                ]);
            }
        });
    }
}
