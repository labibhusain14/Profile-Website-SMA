<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\TeacherAndStaff;
use Carbon\Carbon;


class TeacherAndStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        TeacherAndStaff::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['ein' => '196911142021211002', 'name' => 'Acep Uca Mulyana, S.Pd.', 'gender' => 'Laki-laki', 'photo' => 'Acep_Uca_Mulyana_S.Pd.jpg', 'subject_id' => 6],
            ['ein' => '197006301994021003', 'name' => 'Ana Cahyana, S.Pd.', 'gender' => 'Laki-laki', 'photo' => 'Ana_Cahyana_S.Pd.jpg', 'subject_id' => 5],
            ['ein' => '0', 'name' => 'Andri Renaldi Kartadibrata, S.Pd.', 'gender' => 'Laki-laki', 'photo' => 'Andri_Renaldi_Kartadibrata_S.Pd.jpg', 'subject_id' => 15],
            ['ein' => '0', 'name' => 'Anggi Kusumawati, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Anggi_Kusumawati_S.Pd.jpg', 'subject_id' => 12],
            ['ein' => '0', 'name' => 'Anggita Repsi Nurbani, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Anggita_Repsi_Nurbani_S.Pd.jpg', 'subject_id' => 2],
            ['ein' => '197804182021211002', 'name' => 'Asep Supriatna, S.Pd.', 'gender' => 'Laki-laki', 'photo' => 'Asep_Supriatna_S.Pd.jpg', 'subject_id' => 19],
            ['ein' => '0', 'name' => 'Ceramica, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Ceramica_S.Pd.jpg', 'subject_id' => 19],
            ['ein' => '196409041989031011', 'name' => 'Dedi Desrawan, S.Pd.', 'gender' => 'Laki-laki', 'photo' => 'Dedi_Desrawan_S.Pd.jpg', 'subject_id' => 3],
            ['ein' => '197506012021211002', 'name' => 'Deni Samsudin, S.Ag.', 'gender' => 'Laki-laki', 'photo' => 'Deni_Samsudin_S.Ag.jpg', 'subject_id' => 17],
            ['ein' => '7958766667230242', 'name' => 'Dewi Retno Wati, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Dewi_Retno_Wati_S.Pd.jpg', 'subject_id' => 14],
            ['ein' => '198209232022211008', 'name' => 'Dian Gaman Somantri, S.Pd.', 'gender' => 'Laki-laki', 'photo' => 'Dian_Gaman_Somantri_S.Pd.jpg', 'subject_id' => 14],
            ['ein' => '196702191994121002', 'name' => 'Dr. Karnita, S.Pd., M.M.Pd.', 'gender' => 'Laki-laki', 'photo' => 'Dr.Karnita_S.Pd.M.M.Pd.jpg', 'subject_id' => 10],
            ['ein' => '196308251991032006', 'name' => 'Dra. Dede Nurhayati', 'gender' => 'Perempuan', 'photo' => 'Dra.Dede_Nurhayati.jpg', 'subject_id' => 8],
            ['ein' => '196712111998022001', 'name' => 'Dra. Ely Amaliya', 'gender' => 'Perempuan', 'photo' => 'Dra.Ely_Amaliya.jpg', 'subject_id' => 9],
            ['ein' => '0', 'name' => 'Dra. Eti Setiawati', 'gender' => 'Perempuan', 'photo' => 'Dra.Eti_Setiawati.jpg', 'subject_id' => 2],
            ['ein' => '196403251990032002', 'name' => 'Dra. Winda Nurlaelawati', 'gender' => 'Perempuan', 'photo' => 'Dra.Winda_Nurlaelawati.jpg', 'subject_id' => 17],
            ['ein' => '0', 'name' => 'Drs. H. Asefful Anwas, M.M.', 'gender' => 'Laki-laki', 'photo' => 'Drs.H.Asefful_Anwas_M.M.jpg', 'subject_id' => 8],
            ['ein' => '196306081985121003', 'name' => 'Drs. Pepep Dani SM', 'gender' => 'Laki-laki', 'photo' => 'Drs.Pepep_Dani_SM.jpg', 'subject_id' => 16],
            ['ein' => '196308151990101003', 'name' => 'Drs. Teddy Basari', 'gender' => 'Laki-laki', 'photo' => 'Drs.Teddy_Basari.jpg', 'subject_id' => 12],
            ['ein' => '0', 'name' => 'Eka Nopriyanti, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Eka_Nopriyanti_S.Pd.jpg', 'subject_id' => 10],
            ['ein' => '199503042020122025', 'name' => 'Erna Widiana, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Erna_Widiana_S.Pd.jpg', 'subject_id' => 19],
            ['ein' => '196512251989031009', 'name' => 'H. Dedi Sutansyah, S.Pd.', 'gender' => 'Laki-laki', 'photo' => 'H.Dedi_Sutansyah_S.Pd.jpg', 'subject_id' => 3],
            ['ein' => '1463761663200012', 'name' => 'Hardi Setiawan, S.Pd.', 'gender' => 'Laki-laki', 'photo' => 'Hardi_Setiawan_S.Pd.jpg', 'subject_id' => 11],
            ['ein' => '1463761663200012', 'name' => 'Hendra Lesmana, S.Pd.', 'gender' => 'Laki-laki', 'photo' => 'Hendra_Lesmana_S.Pd.jpg', 'subject_id' => 17],
            ['ein' => '198406252011012001', 'name' => 'Henhen Suhaenih, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Henhen_Suhaenih_S.Pd.jpg', 'subject_id' => 14],
            ['ein' => '196705021991012003', 'name' => 'Hj. Imas Cucu Kustiyani, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Hj.Imas_Cucu_Kustiyani_S.Pd.jpg', 'subject_id' => 5],
            ['ein' => '196608121989032016', 'name' => 'Hj. Nani Rohayati, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Hj.Nani_Rohayati_S.Pd.jpg', 'subject_id' => 4],
            ['ein' => '196910022008012009', 'name' => 'Hj. Seny Kurniawati, S.S.', 'gender' => 'Perempuan', 'photo' => 'Hj.Seny_Kurniawati_S.S.jpg', 'subject_id' => 7],
            ['ein' => '0', 'name' => 'Ilfa Febrina Nurismadanti, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Ilfa_Febrina_Nurismadanti_S.Pd.jpg', 'subject_id' => 3],
            ['ein' => '198007222022212020', 'name' => 'Indri Nurdiani, S.ST.', 'gender' => 'Perempuan', 'photo' => 'Indri_Nurdiani_S.ST.jpg', 'subject_id' => 20],
            ['ein' => '197405232008012003', 'name' => 'Irma Sulistiany, S.Pd., M.Pd.', 'gender' => 'Perempuan', 'photo' => 'Irma_Sulistiany_S.Pd.M.Pd.jpg', 'subject_id' => 5],
            ['ein' => '196708161997031002', 'name' => 'Kosasih, S.Si.', 'gender' => 'Perempuan', 'photo' => 'Kosasih_S.Si.jpg', 'subject_id' => 2],
            ['ein' => '198209062010012012', 'name' => 'Krisna Sulistya, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Krisna_Sulistya_S.Pd.jpg', 'subject_id' => 14],
            ['ein' => '198808182022212022', 'name' => 'Linda Agustina, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Linda_Agustina_S.Pd.jpg', 'subject_id' => 10],
            ['ein' => '0', 'name' => 'Mohamad Dhena Pratama, S.Pd.', 'gender' => 'Laki-laki', 'photo' => 'Mohamad_Dhena_Pratama_S.Pd.jpg', 'subject_id' => 7],
            ['ein' => '196710061990012001', 'name' => 'Neneng Lilih Hayati, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Neneng_Lilih_Hayati_S.Pd.jpg', 'subject_id' => 5],
            ['ein' => '846771672130132', 'name' => 'Restu Kusumah Winata, S.Pd.', 'gender' => 'Laki-laki', 'photo' => 'Restu_Kusumah_Winata_S.Pd.jpg', 'subject_id' => 18],
            ['ein' => '199404212022212023', 'name' => 'Rika Hafidah Kartika, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Rika_Hafidah_Kartika_S.Pd.jpg', 'subject_id' => 3],
            ['ein' => '198002192009022001', 'name' => 'Rini Rahmayanti A.A, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Rini_Rahmayanti_A.A_S.Pd.jpg', 'subject_id' => 4],
            ['ein' => '0', 'name' => 'Ripqy Muhammad Hamzah, M.Pd.', 'gender' => 'Laki-laki', 'photo' => 'Ripqy_Muhammad_Hamzah_M.Pd.jpg', 'subject_id' => 14],
            ['ein' => '199212122022212021', 'name' => 'Risna Desiana Sahman, S.S.', 'gender' => 'Perempuan', 'photo' => 'Risna_Desiana_Sahman_S.S.jpg', 'subject_id' => 10],
            ['ein' => '4356770671130073', 'name' => 'Siti Kurniyasih, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Siti_Kurniyasih_S.Pd.jpg', 'subject_id' => 11],
            ['ein' => '0', 'name' => 'Siti Sopi Sopiani, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Siti_Sopi_Sopiani_S.Pd.jpg', 'subject_id' => 6],
            ['ein' => '0', 'name' => 'Sylvia Caroline Juanda, S.S.', 'gender' => 'Perempuan', 'photo' => 'Sylvia_Caroline_Juanda_S.S.jpg', 'subject_id' => 13],
            ['ein' => '197705202008012008', 'name' => 'Tina Hendayani, S.Pd., M.Pd.', 'gender' => 'Perempuan', 'photo' => 'Tina_Hendayani_S.Pd.M.Pd.jpg', 'subject_id' => 9],
            ['ein' => '6653767668230182', 'name' => 'Trisnawati Mahardesiyuana, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Trisnawati_Mahardesiyuana_S.Pd.jpg', 'subject_id' => 12],
            ['ein' => '197408032022212008', 'name' => 'Tuti Herawati, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Tuti_Herawati_S.Pd.jpg', 'subject_id' => 10],
            ['ein' => '199405272022212011', 'name' => 'Vani Nurjanah Fitriani, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Vani_Nurjanah_Fitriani_S.Pd.jpg', 'subject_id' => 3],
            ['ein' => '199011042022211007', 'name' => 'Yogi Sukanda Dimi, S.Pd.', 'gender' => 'Laki-laki', 'photo' => 'Yogi_Sukanda_Dimi_S.Pd.jpg', 'subject_id' => 18],
            ['ein' => '0', 'name' => 'Yola Nanda Sekar Prima, S.Pd.', 'gender' => 'Perempuan', 'photo' => 'Yola_Nanda_Sekar_Prima_S.Pd.jpg', 'subject_id' => 1],
        ];

        foreach ($data as $value) {
            TeacherAndStaff::insert([
                'ein' => $value['ein'],
                'name' => $value['name'],
                'gender' => $value['gender'],
                'photo' => $value['photo'],
                'subject_id' => $value['subject_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
