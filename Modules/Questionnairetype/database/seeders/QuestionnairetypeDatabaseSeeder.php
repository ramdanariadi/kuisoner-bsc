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
            'weight_value'  => 0.25,
            'target'        => 80,
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('questionnairetypes')->insert([
            'name'          => 'PERSPEKTIF PELANGGAN',
            'weight_value'  => 0.3,
            'target'        => 75,
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('questionnairetypes')->insert([
            'name'          => 'PERSPEKTIF PROSES INTERNAL',
            'weight_value'  => 0.25,
            'target'        => 85,
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('questionnairetypes')->insert([
            'name'          => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'weight_value'  => 0.2,
            'target'        => 70,
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('questionnairetypes')->insert([
            'name'          => 'Skala Usability: System Usability Scale (SUS)',
            'weight_value'  => 1,
            'target'        => 100,
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('questionnairetypes')->insert([
            'name'          => 'Sub-skala Efektivitas Penggunaan Aplikasi',
            'weight_value'  => 1,
            'target'        => 100,
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
    }
}
