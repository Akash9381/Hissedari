<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'super-admin','guard_name' => 'web']);
        Role::create(['name' => 'sells-manager','guard_name' => 'web']);
        Role::create(['name' => 'account-manager','guard_name' => 'web']);
        Role::create(['name' => 'employee','guard_name' => 'web']);
        Role::create(['name' => 'chanel-partner','guard_name' => 'web']);
        Role::create(['name' => 'user','guard_name' => 'web']);
    }
}
