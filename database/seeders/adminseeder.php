<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'              => 'Admin',
            'email'             => 'admin@gmail.com',
            'password'          => Hash::make('admin@123'),
            'email_verified_at' => Carbon::now()
        ]); 
        $user->assignRole('super-admin');
    }
}
