<?php

namespace Modules\School\database\seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\School\Models\School;

class SchoolDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            'name'          => 'SMAN 1 SELONG',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('schools')->insert([
            'name'          => 'SMAN 2 SELONG',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('schools')->insert([
            'name'          => 'SMAN 1 LABUHAN HAJI',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('schools')->insert([
            'name'          => 'SMAN 1 SAKRA',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('schools')->insert([
            'name'          => 'SMAN 1 LENEK',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('schools')->insert([
            'name'          => 'SMAN 1 MONTONG GADING',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('schools')->insert([
            'name'          => 'SMAN 1 SUKAMULIA',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
    }
}
