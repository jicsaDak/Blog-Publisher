<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin =  User::create([
            'name'            => 'Admin',
            'email'           => 'admin@example.com',
            'phone'           => '123456789',
            'status'          => 5,
            'address'         => 'Dhaka, Bangladesh',
            'password'        => bcrypt('123456'),
            'remember_token'  => Str::random(10),
        ]);
        $role = Role::find(1);
        $admin->assignRole($role->name);
        
        $user =  User::create([
            'name'            => 'User',
            'email'           => 'user@example.com',
            'phone'           => '123456789',
            'status'          => 5,
            'address'         => 'Dhaka, Bangladesh',
            'password'        => bcrypt('123456'),
            'remember_token'  => Str::random(10),
        ]);
        $role = Role::find(2);
        $user->assignRole($role->name);
    }
}
