<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'pg@management-partners.co.jp',
            'password' => bcrypt('1234'),
            'api_token' => 'YvjlHh2BkXu2sClkKb9nT5E9VAiIrypEhOxUB7SB',
            'email_verified_at' => $faker->dateTime(),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
        ]);
        for ($i=0; $i < 39; $i++) {
            DB::table('users')->insert([
                'name' => $faker->unique()->userName(),
                'email' => $faker->unique()->safeEmail(),
                'password' => bcrypt('1234'),
                'email_verified_at' => $faker->dateTime(),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);
        }
    }
}
