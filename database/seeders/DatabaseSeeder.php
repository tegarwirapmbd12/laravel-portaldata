<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dataset;
use App\Models\MetadataRole;
use App\Models\Opd;
use App\Models\Produsen;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Opd::create([
            'name' => 'SEKRETARIAT DAERAH',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'SEKRETARIAT DPRD',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'BARENLITBANGDA',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SDM',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'BADAN PENANGGULANGAN BENCANA DAERAH BADAN PENANGGULANGAN BENCANA DAERAH',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'BLU RSUD dr. GUNAWAN MANGUNKUSUMO',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'BLU RSUD dr. GONDO SUWARNO',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'BADAN KEUANGAN DAERAH',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'BADAN KESATUAN BANGSA DAN POLITIK',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'INSPEKTORAT',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'SATPOL PP & DAMKAR',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'DINAS ARSIP DAN PERPUSDA',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'DINAS LINGKUNGAN HIDUP',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'DINAS SOSIAL',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'DINAS TENAGA KERJA DAN TRANSMIGRASI',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'DINAS PENDIDIKAN, KEBUDAYAAN, PEMUDA DAN OLAHRAGA',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'DINAS KESEHATAN',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'D P 3 A K B',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'D P M P T S P',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'DISPERMASDES',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'DINAS PEKERJAAN UMUM',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'DINAS PERTANIAN, PERIKANAN DAN PANGAN',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'DINAS PERHUBUNGAN',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'DINAS KOMUNIKASI DAN INFORMATIKA',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'DINAS PARIWISATA',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        Opd::create([
            'name' => 'D K U P P',
            'opd_role_id' => '1',
            'kepanjangan' => 'DUMMY'
        ]);
        MetadataRole::create([
            'name' => 'Indikator'
        ]);
        MetadataRole::create([
            'name' => 'Variabel'
        ]);
        Dataset::create([
            'name' => 'Klasifikasi Hotel'
        ]);
        Dataset::create([
            'name' => 'Kegemaran Membaca'
        ]);
        Produsen::create([
            'name' => 'Dinas'
        ]);
        Produsen::create([
            'name' => 'Badan'
        ]);
        Produsen::create([
            'name' => 'Kantor'
        ]);
        Produsen::create([
            'name' => 'Rumah Sakit'
        ]);
        Produsen::create([
            'name' => 'Unit Layanan'
        ]);
        Produsen::create([
            'name' => 'Sekretariat'
        ]);
        Produsen::create([
            'name' => 'Wali Data'
        ]);
    }
}
