<?php

namespace Modules\RespondentType\database\seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\RespondentType\Models\RespondentType;

class RespondentTypeDatabaseSeeder extends Seeder
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
         * RespondentTypes Seed
         * ------------------
         */

        DB::table('respondenttypes')->insert([
            'name'          => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
    }
}
