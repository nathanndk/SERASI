<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreadsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('threads')->insert([
            // Life
            [
                'title' => 'Tips Menjaga Kesehatan Mental Selama WFH',
                'content' => 'Bagaimana cara Anda menjaga kesehatan mental saat bekerja dari rumah (WFH)? Mari berbagi pengalaman dan tips untuk tetap sehat secara mental.',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'created_by' => 1,
                'updated_by' => 1,
                'thread_category_id' => 1,
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            [
                'title' => 'Belajar Menyusun Prioritas dalam Hidup',
                'content' => 'Bagaimana cara Anda mengatur prioritas dalam hidup? Mari diskusikan strategi dan pendekatan yang berguna untuk mencapai keseimbangan.',
                'photo' => null,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
                'updated_by' => 1,
                'thread_category_id' => 1,
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            [
                'title' => 'Menghadapi Perubahan dalam Kehidupan',
                'content' => 'Bagaimana Anda menghadapi perubahan yang tak terduga dalam hidup? Ceritakan pengalaman Anda dan bagikan tips untuk menghadapi tantangan.',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'updated_by' => 1,
                'created_by' => 1,
                'thread_category_id' => 1,
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            // Sports
            // Sports
            [
                'title' => 'Doping dalam Olahraga Profesional: Seberapa Jauh Anda Setuju?',
                'content' => 'Doping telah menjadi masalah kontroversial dalam olahraga profesional. Apakah Anda setuju dengan penggunaannya untuk meningkatkan performa, atau seharusnya atlet bertanding dengan kemampuan alami mereka saja? Bagikan pendapat Anda.',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'created_by' => 1,
                'updated_by' => 1,
                'thread_category_id' => 2, // Asumsi id untuk kategori Sports
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            [
                'title' => 'Apakah Esports Layak Disebut Sebagai Olahraga?',
                'content' => 'Dengan popularitas yang meningkat, esports sering dibandingkan dengan olahraga tradisional. Apakah Anda menganggap esports sebagai bentuk olahraga yang sah? Mengapa atau mengapa tidak?',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'created_by' => 1,
                'updated_by' => 1,
                'thread_category_id' => 2,
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            // Food
            [
                'title' => 'Veganisme: Pilihan Gaya Hidup atau Kebutuhan?',
                'content' => 'Veganisme sering dibahas dalam konteks etika, kesehatan, dan lingkungan. Apakah Anda melihatnya sebagai pilihan gaya hidup atau sebagai kebutuhan untuk masa depan yang berkelanjutan? Diskusikan pandangan Anda.',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'created_by' => 1,
                'updated_by' => 1,
                'thread_category_id' => 3, // Asumsi id untuk kategori Food
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            [
                'title' => 'Makanan Modifikasi Genetik (GMO): Solusi atau Masalah?',
                'content' => 'Makanan GMO seringkali dipandang sebagai jawaban untuk keamanan pangan global, tapi juga dianggap berisiko. Apa pendapat Anda tentang konsumsi makanan GMO?',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'created_by' => 1,
                'updated_by' => 1,
                'thread_category_id' => 3,
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            // Programming
            [
                'title' => 'Pentingnya Kode Etik dalam Pengembangan Software',
                'content' => 'Dalam dunia pengembangan software, kode etik sering dianggap penting. Apakah Anda setuju dengan implementasinya, dan bagaimana pengaruhnya terhadap industri?',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'created_by' => 1,
                'updated_by' => 1,
                'thread_category_id' => 4, // Asumsi id untuk kategori Programming
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            [
                'title' => 'Debat Terbesar Sepak Bola: Messi vs Ronaldo',
                'content' => 'Siapa yang lebih baik, Messi atau Ronaldo? Mari kita diskusikan dengan data dan fakta, bukan hanya opini pribadi.',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'updated_by' => 1,
                'created_by' => 1,
                'thread_category_id' => 2,
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            [
                'title' => 'Polemik Penggunaan Teknologi VAR dalam Sepak Bola',
                'content' => 'Apakah penggunaan VAR lebih banyak mendatangkan keadilan atau kontroversi dalam pertandingan sepak bola? Mari diskusikan.',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'updated_by' => 1,
                'created_by' => 1,
                'thread_category_id' => 2,
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            // Food
            [
                'title' => 'Diet Vegan vs Diet Keto: Mana yang Lebih Efektif?',
                'content' => 'Diet mana yang Anda anggap lebih efektif untuk kesehatan dan penurunan berat badan? Mari berbagi pengetahuan dan pengalaman.',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'updated_by' => 1,
                'created_by' => 1,
                'thread_category_id' => 3,
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            [
                'title' => 'Polemik Keaslian Rendang: Apakah Harus Kering?',
                'content' => 'Terdapat banyak perdebatan mengenai keaslian rendang, apakah harus kering atau basah? Mari diskusikan berdasarkan fakta dan pengalaman kuliner.',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'updated_by' => 1,
                'created_by' => 1,
                'thread_category_id' => 3,
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            // Programming
            [
                'title' => 'Python vs JavaScript: Bahasa Pemrograman Terbaik untuk Pemula',
                'content' => 'Antara Python dan JavaScript, mana yang lebih baik untuk dipelajari oleh pemula dalam pemrograman? Mari kita diskusikan dengan alasan yang logis.',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'updated_by' => 1,
                'created_by' => 1,
                'thread_category_id' => 4,
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            [
                'title' => 'Pengaruh Kecerdasan Buatan pada Pengembangan Web',
                'content' => 'Bagaimana kecerdasan buatan dapat mengubah cara kita mengembangkan aplikasi web di masa depan? Diskusikan pengalaman dan prediksi Anda.',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'updated_by' => 1,
                'created_by' => 1,
                'thread_category_id' => 4,
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            // Flight Information
            [
                'title' => 'Diskusi Keamanan Penerbangan: Apakah Penerbangan Masih Moda Transportasi Teraman?',
                'content' => 'Dengan adanya beberapa kecelakaan penerbangan baru-baru ini, apakah penerbangan masih dianggap sebagai moda transportasi teraman? Mari diskusikan dengan data dan statistik.',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'updated_by' => 1,
                'created_by' => 1,
                'thread_category_id' => 5,
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            [
                'title' => 'Debat Efektivitas Program Frequent Flyer',
                'content' => 'Apakah program frequent flyer benar-benar memberikan nilai tambah bagi penumpang atau hanya strategi pemasaran maskapai? Diskusikan berdasarkan pengalaman Anda.',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'updated_by' => 1,
                'created_by' => 1,
                'thread_category_id' => 5,
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            // Technology
            [
                'title' => '5G dan Masa Depan Konektivitas: Harapan vs Realitas',
                'content' => 'Sejauh mana teknologi 5G akan mengubah kehidupan kita? Apakah akan seefektif yang diharapkan atau ada kekurangan yang belum kita sadari? Mari diskusikan.',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'updated_by' => 1,
                'created_by' => 1,
                'thread_category_id' => 6,
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            [
                'title' => 'Privasi Digital di Era Teknologi Informasi',
                'content' => 'Dengan semakin banyaknya data pribadi yang kita bagikan secara online, bagaimana kita bisa menjaga privasi kita? Apakah privasi masih mungkin dijaga?',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'updated_by' => 1,
                'created_by' => 1,
                'thread_category_id' => 6,
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            // Environment
            [
                'title' => 'Debat Penggunaan Energi Terbarukan: Apakah Benar-Benar Ramah Lingkungan?',
                'content' => 'Energi terbarukan sering dianggap sebagai solusi untuk permasalahan lingkungan. Namun, apakah benar-benar efektif dan ramah lingkungan? Mari diskusikan berdasarkan penelitian dan data terkini.',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'updated_by' => 1,
                'created_by' => 1,
                'thread_category_id' => 7,
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
            [
                'title' => 'Konflik Manusia vs Satwa Liar: Solusi untuk Koeksistensi',
                'content' => 'Seiring dengan menyempitnya habitat satwa liar, konflik antara manusia dan satwa menjadi semakin sering terjadi. Bagaimana solusi untuk koeksistensi yang harmonis?',
                'photo' => null,
                'updated_at' => now(),
                'created_at' => now(),
                'updated_by' => 1,
                'created_by' => 1,
                'thread_category_id' => 7,
                'status' => 'approved',
                'user_id' => 1,
                'forum_type_id' => 2,
            ],
        ]);
    }
}


// Food
// Repeat the structure for each thread in the Food category...
// Programming
// Repeat the structure for each thread in the Programming category...
// Flight Information
// Repeat the structure for each thread in the Flight Information category...
// Continue for other categories as needed...

