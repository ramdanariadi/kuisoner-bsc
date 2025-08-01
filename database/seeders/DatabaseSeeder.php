<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Modules\Questionnaire\database\seeders\QuestionnaireDatabaseSeeder;
use Modules\Questionnairetype\database\seeders\QuestionnairetypeDatabaseSeeder;
use Modules\RespondentType\database\seeders\RespondentTypeDatabaseSeeder;
use Modules\School\database\seeders\SchoolDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $this->call(AuthTableSeeder::class);
        $this->call(RespondentTypeDatabaseSeeder::class);
        $this->call(QuestionnairetypeDatabaseSeeder::class);
        $this->call(QuestionnaireDatabaseSeeder::class);
        $this->call(SchoolDatabaseSeeder::class);
        Schema::enableForeignKeyConstraints();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
