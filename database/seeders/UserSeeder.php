<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            [
                'id' => Str::uuid(),
                'firstName' => 'John',
                'lastName' => 'Doe',
                'isDeleted' => false,
                'userName' => 'johndoe',
                'normalizedUserName' => 'JOHNDOE',
                'email' => 'johndoe@example.com',
                'normalizedEmail' => 'JOHNDOE@EXAMPLE.COM',
                'emailConfirmed' => true,
                'password' => bcrypt('password'),
                'securityStamp' => Str::random(10),
                'concurrencyStamp' => Str::uuid(),
                'phoneNumber' => '1234567890',
                'phoneNumberConfirmed' => true,
                'twoFactorEnabled' => false,
                'lockoutEnd' => null,
                'lockoutEnabled' => true,
                'accessFailedCount' => 0,
            ],
            [
                'id' => Str::uuid(),
                'firstName' => 'Jane',
                'lastName' => 'Smith',
                'isDeleted' => false,
                'userName' => 'janesmith',
                'normalizedUserName' => 'JANESMITH',
                'email' => 'janesmith@example.com',
                'normalizedEmail' => 'JANESMITH@EXAMPLE.COM',
                'emailConfirmed' => true,
                'password' => bcrypt('securepassword'),
                'securityStamp' => Str::random(10),
                'concurrencyStamp' => Str::uuid(),
                'phoneNumber' => '9876543210',
                'phoneNumberConfirmed' => false,
                'twoFactorEnabled' => false,
                'lockoutEnd' => null,
                'lockoutEnabled' => true,
                'accessFailedCount' => 1,
            ],
        ]);
    }
}
