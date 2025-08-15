<?php

namespace Database\Seeders\Auth;

use App\Events\Backend\UserCreated;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserTableSeeder.
 */
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $id = 1;
        $users = [
            [
                'id' => $id++,
                'username' => '100001',
                'name' => 'Super Admin',
                'email' => 'super@admin.com',
                'password' => Hash::make('secret'),
                'email_verified_at' => Carbon::now(),
                'school_id' => 1,
                'school_name' => 'SMAN 1 Selong',
                'respondent_type_id' => 4,
                'respondent_type' => 'Kepala Sekolah',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => $id++,
                'username' => '100002',
                'name' => 'Admin Istrator',
                'email' => 'admin@admin.com',
                'password' => Hash::make('secret'),
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => $id++,
                'username' => '100003',
                'name' => 'Manager User',
                'email' => 'manager@manager.com',
                'password' => Hash::make('secret'),
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => $id++,
                'username' => '100004',
                'name' => 'Executive User',
                'email' => 'executive@executive.com',
                'password' => Hash::make('secret'),
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => $id++,
                'username' => '100005',
                'name' => 'General User',
                'email' => 'user@user.com',
                'password' => Hash::make('secret'),
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // sman 1 selong user example
            [
                'id' => $id++,
                'username' => 'smansakepsek',
                'name' => 'Kepala sekolah sman 1 selong',
                'email' => 'kepsek@smansa.com',
                'password' => Hash::make('secret'),
                'email_verified_at' => Carbon::now(),
                'school_id' => 1,
                'school_name' => 'SMAN 1 Selong',
                'respondent_type_id' => 4,
                'respondent_type' => 'Kepala Sekolah',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => $id++,
                'username' => 'ortusmansa',
                'name' => 'Orang tua siswa sman 1 selong',
                'email' => 'ortu@smansa.com',
                'password' => Hash::make('secret'),
                'email_verified_at' => Carbon::now(),
                'school_id' => 1,
                'school_name' => 'SMAN 1 Selong',
                'respondent_type_id' => 3,
                'respondent_type' => 'Orang Tua/Wali',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => $id++,
                'username' => 'gurusmansa',
                'name' => 'Guru sman 1 selong',
                'email' => 'guru@smansa.com',
                'password' => Hash::make('secret'),
                'email_verified_at' => Carbon::now(),
                'school_id' => 1,
                'school_name' => 'SMAN 1 Selong',
                'respondent_type_id' => 2,
                'respondent_type' => 'Guru',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => $id++,
                'username' => 'siswa1smansa',
                'name' => 'Siswa1 sman 1 selong',
                'email' => 'siswa1@smansa.com',
                'password' => Hash::make('secret'),
                'email_verified_at' => Carbon::now(),
                'school_id' => 1,
                'school_name' => 'SMAN 1 Selong',
                'respondent_type_id' => 1,
                'respondent_type' => 'Siswa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => $id++,
                'username' => 'siswa2smansa',
                'name' => 'Siswa2 sman 1 selong',
                'email' => 'siswa2@smansa.com',
                'password' => Hash::make('secret'),
                'email_verified_at' => Carbon::now(),
                'school_id' => 1,
                'school_name' => 'SMAN 1 Selong',
                'respondent_type_id' => 1,
                'respondent_type' => 'Siswa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // sman 2 selong user example
            [
                'id' => $id++,
                'username' => 'smandakepsek',
                'name' => 'Kepala sekolah sman 2 selong',
                'email' => 'kepsek@smanda.com',
                'password' => Hash::make('secret'),
                'email_verified_at' => Carbon::now(),
                'school_id' => 1,
                'school_name' => 'SMAN 2 Selong',
                'respondent_type_id' => 4,
                'respondent_type' => 'Kepala Sekolah',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => $id++,
                'username' => 'ortusmanda',
                'name' => 'Orang tua siswa sman 2 selong',
                'email' => 'ortu@smanda.com',
                'password' => Hash::make('secret'),
                'email_verified_at' => Carbon::now(),
                'school_id' => 1,
                'school_name' => 'SMAN 2 Selong',
                'respondent_type_id' => 3,
                'respondent_type' => 'Orang Tua/Wali',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => $id++,
                'username' => 'gurusmanda',
                'name' => 'Guru sman 2 selong',
                'email' => 'guru@smanda.com',
                'password' => Hash::make('secret'),
                'email_verified_at' => Carbon::now(),
                'school_id' => 1,
                'school_name' => 'SMAN 2 Selong',
                'respondent_type_id' => 2,
                'respondent_type' => 'Guru',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => $id++,
                'username' => 'siswa1smanda',
                'name' => 'Siswa1 sman 2 selong',
                'email' => 'siswa1@smanda.com',
                'password' => Hash::make('secret'),
                'email_verified_at' => Carbon::now(),
                'school_id' => 1,
                'school_name' => 'SMAN 2 Selong',
                'respondent_type_id' => 1,
                'respondent_type' => 'Siswa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => $id++,
                'username' => 'siswa2smanda',
                'name' => 'Siswa2 sman 2 selong',
                'email' => 'siswa2@smanda.com',
                'password' => Hash::make('secret'),
                'email_verified_at' => Carbon::now(),
                'school_id' => 1,
                'school_name' => 'SMAN 2 Selong',
                'respondent_type_id' => 1,
                'respondent_type' => 'Siswa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($users as $user_data) {
            $user = User::create($user_data);

            event(new UserCreated($user));
        }
    }
}
