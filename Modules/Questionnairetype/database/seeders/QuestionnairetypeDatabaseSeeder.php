<?php

namespace Modules\Questionnairetype\database\seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Questionnairetype\Models\Questionnairetype;

class QuestionnairetypeDatabaseSeeder extends Seeder
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
         * Questionnairetypes Seed
         * ------------------
         */

        // DB::table('questionnairetypes')->truncate();
        // echo "Truncate: questionnairetypes \n";

        DB::table('questionnairetypes')->insert([
            'name'          => 'PERSPEKTIF KEUANGAN',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('questionnairetypes')->insert([
            'name'          => 'PERSPEKTIF PELANGGAN',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('questionnairetypes')->insert([
            'name'          => 'PERSPEKTIF PROSES INTERNAL',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('questionnairetypes')->insert([
            'name'          => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
    }
}
