<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        User::truncate();
        DB::table('role_user')->truncate();
        $ownerRole = Role::where('name', 'owner')->first();
        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $owner = User::create([
           'profile' => 'image.png',
           'name' => 'Owner',
           'username' => 'owner',
           'email' => 'owner@gmail.com',
           'phone' => '081288450678',
           'address' => 'Banyumas',
           'password' => Hash::make('password')
        ]);
        $admin = User::create([
           'profile' => 'image.png',
           'name' => 'Admin',
           'username' => 'admin',
           'email' => 'admin@gmail.com',
           'phone' => '081938729734',
           'address' => 'Bandung',
           'password' => Hash::make('password')
        ]);
        $user = User::create([
           'profile' => 'image.png',
           'name' => 'User',
           'username' => 'user',
           'email' => 'user@gmail.com',
           'phone' => '081379658374',
           'address' => 'Banjar',
           'password' => Hash::make('password')
        ]);
        $owner->roles()->attach($ownerRole);
        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
    }
}
