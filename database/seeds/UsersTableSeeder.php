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
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'Fernando Diaz',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
