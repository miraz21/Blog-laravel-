<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      user::create ([
      'name'=>'Admin',
      'email'=>'admin@gmail.com',
      'password'=> Hash::make('12345'),
      'phone'=>'01933518971',
      'role'=>'admin'
      ]);
    }
}
