<?php

namespace Database\Seeders;
use App\Models\Status;


use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Status::create(['id' => '1','name' => 'Menunggu Penerimaan Anda']);
        Status::create(['id' => '2','name' => 'Sedang Bekerja Pada Anda']);
        Status::create(['id' => '3','name' => 'Menunggu Konfirmasi Pelepasan Kuli']);
        Status::create(['id' => '4','name' => 'Belum Menerima Panggilan Anda']);
        Status::create(['id' => '5','name' => 'Menolak Panggilan Anda']);
        Status::create(['id' => '6','name' => 'Kuli ditolak Mandor']);
        Status::create(['id' => '7','name' => 'Pengangguran']);
        Status::create(['id' => '8','name' => 'Mandor menghapus proyek']);



    }
}
