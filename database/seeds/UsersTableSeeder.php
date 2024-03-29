<?php

use App\Models\User;
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
        User::create([
            'name' => 'ADMIN',
            'email' => 'admin3@admin.com',
            'password' => \Illuminate\Support\Facades\Hash::make('parola'),
            'type' => User::TYPE_ADMIN
        ]);
    }
}
