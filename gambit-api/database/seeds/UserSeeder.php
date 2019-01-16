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
        User::truncate();

        $faker = \Faker\Factory::create();

        // Let's make sure everyone has the same password and 
        // let's hash it before the loop, or else our seeder 
        // will be too slow.
        $password = Hash::make('madeira');

        User::create([
            'name' => 'Administrator',
            'email' => 'marcos.santos@madeiramadeira.com.br',
            'password' => $password,
        ]);
    }
}
