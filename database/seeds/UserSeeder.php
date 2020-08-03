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
        DB::table('users')->insert([
            ['name' => 'test',
            'email' => 'test@test.com',
            'password' => Hash::make('password123'),
            ],
            ['name' => 'test2',
            'email' => 'test2@test.com',
            'password' => Hash::make('password321'),
            ]
        ]);
    }
}
