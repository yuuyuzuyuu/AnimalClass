<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'email' => 'admin@admin.com',
            'password' => Hash::make('aaaaaaaa'),
            'remember_token' => Str::random(10),
        ]);
    }
}
