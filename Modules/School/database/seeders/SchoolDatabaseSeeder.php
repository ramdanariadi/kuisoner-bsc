<?php

namespace Modules\School\database\seeders;

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
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Schools Seed
         * ------------------
         */

        // DB::table('schools')->truncate();
        // echo "Truncate: schools \n";

        School::factory()->count(20)->create();
        $rows = School::all();
        echo " Insert: schools \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
