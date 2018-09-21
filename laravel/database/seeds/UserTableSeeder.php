<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'email'    => '312778660@shiyanlou.com',
            'password' => Hash::make('admin'),
            'nickname' => 'admin',
            'is_admin' => 1,
        ]);
    }
}
