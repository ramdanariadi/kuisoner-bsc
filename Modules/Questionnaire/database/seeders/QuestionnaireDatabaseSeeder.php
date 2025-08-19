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

        /*
         * Statements Seed (Respondent : Siswa)
         * ---------------
         */
        DB::table('statements')->insert([
            'statement' => 'Sekolah secara optimal mengalokasikan anggaran untuk mendukung penyediaan fasilitas pembelajaran.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah menyediakan buku dan bahan ajar melalui bantuan atau program pendanaan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah menyediakan bantuan bagi siswa yang mengalami kesulitan ekonomi.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah menyediakan fasilitas teknologi pembelajaran yang dibiayai dari dana pendidikan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Saya puas dengan kebijakan sekolah dalam mengelola anggaran pendidikan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('statements')->insert([
            'statement' => 'Saya nyaman dan aman saat belajar di sekolah.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Guru saya memberikan bimbingan dan dukungan yang cukup dalam belajar.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Saya diperhatikan oleh guru dan staf sekolah dalam perkembangan akademik dan non akademik saya.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah menyediakan fasilitas yang mendukung pembelajaran dengan baik.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Saya pendapat dan aspirasi saya sebagai siswa dihargai oleh pihak sekolah.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('statements')->insert([
            'statement' => 'Proses pembelajaran di kelas menarik dan membantu saya memahami materi dengan baik.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Guru menggunakan metode pembelajaran yang bervariasi dan interaktif.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki program ekstrakurikuler yang menarik dan bermanfaat.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah mendukung kegiatan siswa seperti lomba akademik dan non-akademik.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Saya mendapatkan bimbingan dalam memilih jalur pendidikan dan karir di masa depan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('statements')->insert([
            'statement' => 'Sekolah mendorong saya untuk mengembangkan keterampilan berpikir kritis, kreatifitas, komunikasi, dan kolaborasi.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Saya memiliki kesempatan untuk mengembangkan keterampilan kepemimpinan di sekolah.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memberikan motivasi untuk meraih prestasi akademik maupun non-akademik.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Saya memiliki akses ke bahan ajar dan sumber belajar yang cukup.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah mendukung penggunaan teknologi dalam proses pembelajaran.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '1',
            'respondent_type'   => 'Siswa',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        /*
         * Statements Seed (Respondent : Guru)
         * ---------------
         */
        DB::table('statements')->insert([
            'statement' => 'Sekolah mendukung kebutuhan sarana dan prasarana pembelajaran dengan anggaran yang cukup.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Dana BOS dan sumber pendanaan lainnya digunakan secara transparan untuk mendukung kegiatan pembelajaran.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Alokasi anggaran sekolah mendukung program peningkatan mutu pembelajaran secara efektif dan berkelanjutan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memberikan insentif atau tunjangan tambahan kepada guru sesuai dengan kontribusi mereka.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah mengalokasikan dana untuk pelatihan dan pengembangan profesional guru.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('statements')->insert([
            'statement' => 'Guru didukung oleh kepala sekolah dalam menjalankan tugas dan tanggung jawabnya.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Komunikasi antara guru, orang tua, dan pihak sekolah berjalan efektif dalam mendukung pembelajaran.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Guru memiliki kesempatan untuk menyampaikan masukan dan terlibat dalam pengambilan keputusan sekolah.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Pengawas sekolah secara aktif memberikan bimbingan dan supervisi kepada guru.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki kebijakan yang memperhatikan kesejahteraan guru.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('statements')->insert([
            'statement' => 'Kurikulum yang digunakan di sekolah telah sesuai dengan kebijakan pendidikan nasional.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Proses pembelajaran berjalan secara efektif dan sesuai dengan rencana pembelajaran yang telah disusun.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki sistem monitoring dan evaluasi untuk menilai efektivitas pengajaran guru.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Guru menggunakan metode pembelajaran inovatif untuk meningkatkan pemahaman siswa.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki standar operasional prosedur (SOP) dalam proses pembelajaran dan administrasi pendidikan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('statements')->insert([
            'statement' => 'Sekolah mendukung program pengembangan profesional guru melalui pelatihan dan workshop.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Guru memiliki akses terhadap sumber belajar yang memadai untuk meningkatkan kompetensi mereka.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah mendorong guru untuk mengikuti kegiatan ilmiah seperti seminar dan penelitian.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Guru memiliki kesempatan untuk berkolaborasi dan berbagi pengalaman dengan sesama guru.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah menyediakan fasilitas teknologi yang mendukung pembelajaran berbasis digital.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '2',
            'respondent_type'   => 'Guru',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        /*
         * Statements Seed (Respondent : Kepala Sekolah)
         * ---------------
         */
        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki sistem perencanaan anggaran berbasis data dan analisis risiko.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Pengelolaan keuangan sekolah mengikuti prinsip partisipatif, transparansi, dan akuntabilitas.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Dana yang dialokasikan untuk peningkatan mutu pendidikan digunakan secara optimal.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah secara rutin melakukan evaluasi keuangan internal untuk memastikan efektivitas dan akuntabilitas pengelolaan dana.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki sistem pelaporan keuangan berbasis teknologi yang dapat diakses oleh stakeholder.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki mekanisme umpan balik dari siswa, orang tua, dan masyarakat untuk meningkatkan layanan pendidikan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah secara aktif membangun komunikasi dengan orang tua untuk meningkatkan mutu layanan pendidikan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah menyediakan layanan informasi digital yang memudahkan orang tua dalam memantau perkembangan siswa.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Tingkat kepuasan orang tua terhadap pelayanan sekolah tinggi berdasarkan survei berkala.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki sistem pengaduan yang efektif untuk menangani keluhan dari siswa dan orang tua.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki mekanisme perencanaan strategis berbasis data untuk peningkatan mutu pendidikan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Kurikulum sekolah telah diterapkan secara konsisten sesuai dengan standar nasional pendidikan (SNP).',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah menggunakan teknologi informasi dalam manajemen sekolah untuk meningkatkan efisiensi operasional.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki prosedur manajemen risiko untuk menangani permasalahan akademik dan non-akademik.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Evaluasi kinerja sekolah dilakukan secara berkala berdasarkan indikator yang terukur.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki program pengembangan profesional berkelanjutan untuk guru.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Guru di sekolah secara rutin mengikuti pelatihan berbasis teknologi dan inovasi pembelajaran.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah mendukung penggunaan Learning Management System (LMS) dalam pembelajaran digital.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki sistem pengelolaan kinerja guru berbasis data dan hasil evaluasi pembelajaran.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah mendorong budaya inovasi dalam pembelajaran dan manajemen sekolah.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '4',
            'respondent_type'   => 'Kepala Sekolah',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        /*
         * Statements Seed (Respondent : Orang Tua / Wali)
         * ---------------
         */
        DB::table('statements')->insert([
            'statement' => 'Biaya pendidikan di sekolah ini sebanding dengan kualitas layanan yang diberikan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memberikan informasi yang transparan mengenai penggunaan dana pendidikan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memberikan bantuan atau keringanan biaya bagi siswa yang membutuhkan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Pengelolaan fasilitas sekolah dilakukan dengan alokasi dana yang transparan dan sesuai kebutuhan siswa.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki kebijakan yang jelas dalam penggunaan dana untuk meningkatkan mutu pendidikan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '1',
            'questionnaire_type'    => 'PERSPEKTIF KEUANGAN',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('statements')->insert([
            'statement' => 'Saya puas dengan kualitas pendidikan yang diberikan oleh sekolah kepada anak saya.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Guru selalu berkomunikasi dengan saya tentang perkembangan akademik dan non-akademik anak saya.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah mendukung pengembangan karakter anak saya melalui berbagai kegiatan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memberikan kesempatan kepada orang tua untuk terlibat dalam kegiatan sekolah.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Saya didengar oleh sekolah dalam menyampaikan masukan dan saran.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '2',
            'questionnaire_type'    => 'PERSPEKTIF PELANGGAN',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki sistem komunikasi yang jelas dengan orang tua.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Proses pembelajaran berjalan dengan baik dan sesuai dengan kebutuhan anak saya.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah menerapkan disiplin dengan cara yang adil dan mendidik.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memiliki kebijakan yang baik dalam menangani permasalahan siswa.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah mampu menciptakan lingkungan belajar yang aman dan nyaman bagi siswa.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '3',
            'questionnaire_type'    => 'PERSPEKTIF PROSES INTERNAL',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        DB::table('statements')->insert([
            'statement' => 'Sekolah mendorong anak saya untuk mengembangkan potensi akademik maupun non-akademik.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah menyediakan fasilitas dan program yang mendukung pembelajaran anak saya.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah memberikan informasi dan bimbingan karir kepada siswa untuk masa depan mereka.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Anak saya mengalami peningkatan keterampilan sosial dan kepemimpinan selama bersekolah di sini.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Sekolah menyediakan kegiatan ekstrakurikuler yang sesuai dengan minat dan bakat anak saya.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '4',
            'questionnaire_type'    => 'PERSPEKTIF PEMBELAJARAN DAN PERTUMBUHAN',
            'respondent_type_id'    => '3',
            'respondent_type'   => 'Orang Tua / Wali',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        /*
         * Statements Seed
         * Skala Usability: System Usability Scale (SUS)
         * (Respondent : Semua)
         * ---------------
         */
        DB::table('statements')->insert([
            'statement' => 'Saya ingin menggunakan aplikasi ini secara rutin.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '5',
            'questionnaire_type'    => 'Skala Usability: System Usability Scale (SUS)',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Aplikasi ini rumit untuk digunakan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '5',
            'questionnaire_type'    => 'Skala Usability: System Usability Scale (SUS)',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Aplikasi ini mudah dipelajari oleh pengguna.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '5',
            'questionnaire_type'    => 'Skala Usability: System Usability Scale (SUS)',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Saya memerlukan bantuan teknis/tools untuk menggunakan aplikasi ini.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '5',
            'questionnaire_type'    => 'Skala Usability: System Usability Scale (SUS)',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Fitur-fitur aplikasi ini bekerja secara terpadu.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '5',
            'questionnaire_type'    => 'Skala Usability: System Usability Scale (SUS)',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Aplikasi ini menunjukkan ketidakkonsistenan dalam fungsi atau tampilan.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '5',
            'questionnaire_type'    => 'Skala Usability: System Usability Scale (SUS)',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Penggunaan aplikasi ini dapat dikuasai dengan cepat.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '5',
            'questionnaire_type'    => 'Skala Usability: System Usability Scale (SUS)',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Navigasi dalam aplikasi ini membingungkan bagi pengguna.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '5',
            'questionnaire_type'    => 'Skala Usability: System Usability Scale (SUS)',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Saya dapat menggunakan aplikasi ini dengan percaya diri.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '5',
            'questionnaire_type'    => 'Skala Usability: System Usability Scale (SUS)',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Saya harus memahami banyak hal terlebih dahulu sebelum bisa menggunakannya.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '5',
            'questionnaire_type'    => 'Skala Usability: System Usability Scale (SUS)',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);

        /*
         * Statements Seed 
         * Sub-skala Efektivitas Penggunaan Aplikasi
         * (Respondent : Semua)
         * ---------------
         */
        DB::table('statements')->insert([
            'statement' => 'Aplikasi membantu mempercepat proses evaluasi kinerja sekolah.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '6',
            'questionnaire_type'    => 'Sub-skala Efektivitas Penggunaan Aplikasi',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Informasi dalam aplikasi mendukung pengambilan keputusan yang tepat.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '6',
            'questionnaire_type'    => 'Sub-skala Efektivitas Penggunaan Aplikasi',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Fitur-fitur aplikasi mendukung kelengkapan proses evaluasi.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '6',
            'questionnaire_type'    => 'Sub-skala Efektivitas Penggunaan Aplikasi',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Aplikasi membantu mengurangi kesalahan dalam pengolahan data evaluasi.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '6',
            'questionnaire_type'    => 'Sub-skala Efektivitas Penggunaan Aplikasi',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Aplikasi mempermudah kolaborasi antar pihak dalam evaluasi.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '6',
            'questionnaire_type'    => 'Sub-skala Efektivitas Penggunaan Aplikasi',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Penggunaan aplikasi meningkatkan efisiensi kerja dalam pelaksanaan evaluasi.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '6',
            'questionnaire_type'    => 'Sub-skala Efektivitas Penggunaan Aplikasi',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Laporan dari aplikasi memudahkan analisis dan interpretasi data.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '6',
            'questionnaire_type'    => 'Sub-skala Efektivitas Penggunaan Aplikasi',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
        DB::table('statements')->insert([
            'statement' => 'Aplikasi membantu memantau perkembangan hasil evaluasi secara real-time.',
            'questionnaire_id'  => '1',
            'questionnaire_type_id' => '6',
            'questionnaire_type'    => 'Sub-skala Efektivitas Penggunaan Aplikasi',
            'respondent_type_id'    => null,
            'respondent_type'   => 'Semua',
            'created_at'    => new DateTime('now'),
            'updated_at'    => new DateTime('now'),
        ]);
    }
}
