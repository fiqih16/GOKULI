<?php

namespace Database\Seeders;
use App\Models\Proyek;

use Illuminate\Database\Seeder;

class ProyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Proyek::create(['user_id' => '22', 'name' => 'Kolam Renang Hotel Cisangkuy', 'address' => 'Jalan Cisangkuy no. 69, Jember Utara', 'detail' => 'Dibutuhkan kuli spesialis kolam renang yang paham tentang cor dan kayu, Gaji tetap Rp3.000.000', 'specialties_needed' => 'Cor, Kayu']);
        Proyek::create(['user_id' => '22', 'name' => 'Gedung WTC', 'address' => 'Jalan WTC no. 12, Jember Utara', 'detail' => 'Kuli akan ditempatkan pada bagian pemasangan fondasi, Gaji kisaran Rp750.000 - Rp1.000.000', 'specialties_needed' => 'Beton, Baja Ringan']);
        Proyek::create(['user_id' => '23', 'name' => 'Rumah tipe 40/50', 'address' => 'Perumahan Gaje no. 63, Arkansas', 'detail' => 'Kuli akan ditempatkan pada bagian mekanik proyek, Gaji tetap Rp 2.500.000', 'specialties_needed' => 'Mekanik']);
        Proyek::create(['user_id' => '24', 'name' => 'Hotel Transylvania', 'address' => 'Kpg. Jambu No. 779, Manado 76091, KalUt', 'detail' => 'Dibutuhkan kuli borongan yang bersedia ditempatkan pada bagian ngecor dan beton, Gaji tetap Rp 7.500.000', 'specialties_needed' => 'Beton, Cor']);
        Proyek::create(['user_id' => '25', 'name' => 'Perumahan Bukit Permana', 'address' => 'Ds. Yogyakarta No. 861, Kendari 20333, KalSel', 'detail' => 'Kuli akan ditempatkan pada bagian pemasangan baja ringan, Gaji kisaran Rp750.000 - Rp1.000.000', 'specialties_needed' => 'Baja Ringan']);
        Proyek::create(['user_id' => '26', 'name' => 'Stadion Salak', 'address' => 'Jr. Sutoyo No. 101, Tomohon 42127, Banten', 'detail' => 'Kuli akan ditempatkan pada bagian tumbal proyek, Gaji tetap Rp 200.000.000', 'specialties_needed' => 'Tumbal Proyek']);
        
    }
}
