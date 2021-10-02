<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use Carbon\Carbon;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'mobile_no' => '01913041366',
            'email_verified_at' => Carbon::now(),
            'phone_verified_at' => Carbon::now(),
            'role' => 1,
            'is_active' => 1,
            'password' => Hash::make('12345678'),
        ]);
    }
}
