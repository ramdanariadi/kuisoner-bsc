<?php

namespace Modules\Questionnaire\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Questionnaire\Models\Questionnaire;

class QuestionnaireDatabaseSeeder extends Seeder
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
         * Questionnaires Seed
         * ------------------
         */

        // DB::table('questionnaires')->truncate();
        // echo "Truncate: questionnaires \n";

        Questionnaire::factory()->count(20)->create();
        $rows = Questionnaire::all();
        echo " Insert: questionnaires \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
