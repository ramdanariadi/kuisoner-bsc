<?php

namespace Modules\Questionnaire\database\seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::table('questionnaires')->insert([
            'name'          => 'Kuesioner Pengukuran Kinerja Sekolah Berbasis Balanced Scorecard',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki sistem perencanaan anggaran berbasis data dan analisis risiko.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Pengelolaan keuangan sekolah mengikuti prinsip transparansi dan akuntabilitas.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Dana yang dialokasikan untuk peningkatan mutu pendidikan digunakan secara optimal.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah secara rutin melakukan audit keuangan internal maupun eksternal.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki sistem pelaporan keuangan berbasis teknologi yang dapat diakses oleh stakeholder.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki mekanisme umpan balik dari siswa, orang tua, dan masyarakat untuk meningkatkan layanan pendidikan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah secara aktif membangun komunikasi dengan orang tua dan komite sekolah.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah menyediakan layanan informasi digital yang memudahkan orang tua dalam memantau perkembangan siswa.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Tingkat kepuasan orang tua terhadap pelayanan sekolah tinggi berdasarkan survei berkala.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki sistem pengaduan yang efektif untuk menangani keluhan dari siswa dan orang tua.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki mekanisme perencanaan strategis berbasis data untuk peningkatan mutu pendidikan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Kurikulum sekolah telah diterapkan secara konsisten sesuai dengan standar nasional pendidikan (SNP)',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah menggunakan teknologi informasi dalam manajemen sekolah untuk meningkatkan efisiensi operasional.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki prosedur manajemen risiko untuk menangani permasalahan akademik dan non-akademik.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Evaluasi kinerja sekolah dilakukan secara berkala berdasarkan indikator yang terukur.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki program pengembangan profesional berkelanjutan untuk guru dan staf.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Guru di sekolah secara rutin mengikuti pelatihan berbasis teknologi dan inovasi pembelajaran.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah mendukung penggunaan Learning Management System (LMS) dalam pembelajaran digital.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki sistem pengelolaan kinerja guru berbasis data dan hasil evaluasi pembelajaran.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah mendorong budaya inovasi dalam pembelajaran dan manajemen sekolah.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id'
            => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
    }
}
