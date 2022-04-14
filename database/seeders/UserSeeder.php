<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123')
        ])->assignRole('admin');
      
        User::create([
            'name' => 'pegawai',
            'email' => 'pegawai@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('pegawai123')
        ])->assignRole('pegawai');

        User::create([
            'name' => 'pembaca',
            'email' => 'pembaca@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('pembaca123')
        ])->assignRole('pembaca');
      
    }
}
