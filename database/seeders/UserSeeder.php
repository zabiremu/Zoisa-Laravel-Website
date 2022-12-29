<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('password');
        $user->save();
        $user->assignRole('admin');

        $user = new User();
        $user->name = 'user';
        $user->email = 'user@user.com';
        $user->password = Hash::make('password');
        $user->save();
        $user->assignRole('user');

        $user = new User();
        $user->name = 'manager';
        $user->email = 'manager@manager.com';
        $user->password = Hash::make('password');
        $user->save();
        $user->assignRole('manager');
    }
}
