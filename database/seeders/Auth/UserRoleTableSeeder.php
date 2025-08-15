<?php

namespace Database\Seeders\Auth;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

/**
 * Class UserRoleTableSeeder.
 */
class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $id = 1;
        User::findOrFail($id++)->assignRole('super admin');
        User::findOrFail($id++)->assignRole('administrator');
        User::findOrFail($id++)->assignRole('manager');
        User::findOrFail($id++)->assignRole('executive');
        User::findOrFail($id++)->assignRole('user');

        // user smansa
        User::findOrFail($id++)->assignRole('administrator');
        User::findOrFail($id++)->assignRole('user');
        User::findOrFail($id++)->assignRole('user');
        User::findOrFail($id++)->assignRole('user');
        User::findOrFail($id++)->assignRole('user');

        // user smanda
        User::findOrFail($id++)->assignRole('administrator');
        User::findOrFail($id++)->assignRole('user');
        User::findOrFail($id++)->assignRole('user');
        User::findOrFail($id++)->assignRole('user');
        User::findOrFail($id++)->assignRole('user');

        Artisan::call('cache:clear');
    }
}
