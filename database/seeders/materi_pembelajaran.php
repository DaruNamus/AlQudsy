<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class materi_pembelajaran extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('materi_pembelajaran')->insert([
            [
            'judul' => "Baca Al Qu'ran",
            'deskripsi' => "Kegiatan membaca Al Qur'an melibatkan pembacaan teks-teks suci dalam bahasa Arab dengan pengucapan yang benar. Ini juga mencakup mempelajari tajwid atau aturan dalam pelafalan untuk memastikan pembacaan yang tepat dan indah.",
            ],
            [
            'judul' => "Tafsir Qur'an",
            'deskripsi' => "Tafsir Al Qur'an adalah penjelasan dan interpretasi makna ayat-ayat Al Qur'an. Materi ini melibatkan pemahaman konteks sejarah, linguistik, dan teologis untuk mendapatkan pemahaman yang lebih mendalam tentang pesan-pesan dalam Al Qur'an.",
            ],
        ]);
    }
}
