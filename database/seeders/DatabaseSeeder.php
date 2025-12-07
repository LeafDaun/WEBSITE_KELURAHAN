<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\Layanan;
use App\Models\Potensi;
use App\Models\User;
use App\Models\Profil;
use App\Models\Slide;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

          User::create([
            'name' => 'admin',
            'email' => 'hemlydaun@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        Profil::create([
            'nama' => 'Kelurahan Girian Bawah',
            'alamat' => 'Kel. Girian Bawah Kec. Girian Kota Bitung',
            'email' => 'girian_bawah@gmail.com',
            'telp' => '043822351',
            'facebook' => 'https://www.facebook.com/girianbawah/',

            'sejarah' => '<h3>Sejarah</h3>
            <br>
<h5>Asal-Usul Administratif</h5>
<p class="text-dark">Girian Bawah adalah salah satu dari 7 kelurahan yang membentuk Kecamatan Girian saat pertama kali kecamatan ini dibentuk, Kecamatan Girian sendiri resmi berdiri pada tahun 2007, melalui pemekaran dari kecamatan sebelumnya (Kecamatan Matuari). Karena itu, secara administratif, Girian Bawah “resmi” sebagai kelurahan sejak 2007.</p>

<h5>Posisi Wilayah</h5>
<p class="text-dark">Girian Bawah termasuk dalam 7 kelurahan di Kecamatan Girian — selain Girian Bawah ada Girian Atas, Girian Weru I, Girian Weru II, Girian Indah, Girian Permai, dan Wangurer. 
Berdasarkan data administratif, kode wilayah Girian Bawah adalah 71.72.06.1003.</p> 

<h5>Kehidupan Masyarakat dan Infrastruktur</h5>
<p class="text-dark">Girian Bawah termasuk area pantai / pesisir — hal ini menjadikan kelurahan ini rentan terhadap bahaya alam seperti gempa dan tsunami.
Meski begitu, di Girian Bawah ada fasilitas sosial seperti pendidikan: misalnya ada sekolah dasar negeri (contohnya MIN 1 Bitung) yang beralamat di Girian Bawah. .
Kehidupan masyarakat di wilayah Girian (termasuk Girian Bawah) juga dipengaruhi oleh karakter Kota Bitung: sebuah kota pelabuhan dengan sejarah panjang, migrasi, dan keragaman budaya/agama.</p>

<h5>Hubungannya Dengan Sejarah Kota Bitung</h5>
<p class="text-dark">Sebelum 2007, wilayah sekarang yang disebut Girian (termasuk Girian Bawah) adalah bagian dari kecamatan/kawasan yang berbeda — karena pemekaran wilayah ikut memetakan ulang administrasi di Kota Bitung. 
Perubahan administratif ini bagian dari perkembangan Kota Bitung — yang sejak lama telah berubah status: dari distrik / desa di era kolonial, terus berkembang, menjadi kota administratif, hingga kemudian kotamadya — sehingga pembentukan kecamatan/kelurahan baru seperti Girian (termasuk Girian Bawah) tercermin dari dinamika tersebut. </p>

<h5>Karateristik dan Tantangan</h5>
<p class="text-dark">Karena berada di tepi laut / dekat selat (Selat Lembeh), Girian Bawah termasuk wilayah dengan risiko tsunami relatif tinggi ketika ada gempa besar. 
Hal ini membuat masyarakat di Girian Bawah — seperti warga Girian umumnya — harus mewaspadai bencana alam sebagai bagian dari kehidupan sehari-hari.</p>',

            'visimisi' => '<div class=container>	
         <h2>V I S I :</h2>
                        <p class="text-dark text-center fs-4">"Terwujudnya Bitung yang Maju, Modern, dan Sejahtera melalui Pembangunan yang Berkelanjutan"</p>	
                        </div>

        <h2>M I S I :</h2>
                        <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Meningkatkan kualitas Sumber Daya Manusia (SDM) yang berdaya saing, berbudaya, dan berakhlak mulia.</p>
                        <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Memanfaatkan dan mengelola sumber daya alam secara berkelanjutan untuk mewujudkan masyarakat yang sejahtera.</p>
                        <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Meningkatkan kualitas infrastruktur dan tata ruang yang berkelanjutan, serta memperkuat konektivitas wilayah.</p>
                        <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Mewujudkan tata kelola pemerintahan yang baik dan transparan untuk pelayanan publik yang profesional dan akuntabel.</p> ',

            'struktur' => 'profil/struktur.png',

            'lokasi_kantor' => 'https://maps.app.goo.gl/o73Ekb373QcVMDyM6',

            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11446.39766628551!2d125.11161071741375!3d1.4267339281849958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32870408a82dccc1%3A0xf6923a582d569059!2sGirian%20Bawah%2C%20Girian%2C%20Bitung%20City%2C%20North%20Sulawesi!5e1!3m2!1sen!2sid!4v1764986727648!5m2!1sen!2sid"',
            
            'jumlah_penduduk' => '1.450 Jiwa',
            'luas_wilayah' => '530 Ha',
            'jumlah_umkm' => '8 UMKM',
            'logo' => 'profil/logo.png',

        ]);


        Layanan::create([
            'judul' => 'Administrasi',
            'deskripsi' => 'Adalah layanan administrasi pengurusan Surat Keterangan Domisili dan Keterangan lainnya',

            'deskripsi_lengkap' => ' <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Surat Keterangan Domisili</p>
            <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Surat Keterangan Tidak Mampu</p>
            <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Surat Pengantar Nikah</p>',

            'persyaratan' => '<ol><li>Membawa KTP Asli dan Fotokopi</li>
            <li>Mengisi Formulir Permohonan</li>
            <li>Proses Minimal Tiga (3) Hari Kerja</li></ol>',

            'gambar' => 'layanan/gambar_administrasi.jpg',
        ]);

         Layanan::create([
            'judul' => 'Kesehatan',
            'deskripsi' => 'Adalah layanan kesehatan yang diberikan oleh pemerintah seperti Posyandu dan Lainnya',

             'deskripsi_lengkap' => ' <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Posyandu Balita</p>
             <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Pemeriksaan Lansia</p>
             <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Imunisasi Gratis</p>',
            
            'persyaratan' => '<ol><li>Membawa KTP Asli dan Fotokopi</li>
            <li>Mengisi Formulir Permohonan</li>
            <li>Proses Minimal Tiga (3) Hari Kerja</li></ol>',

            'gambar' => 'layanan/gambar_kesehatan.jpg',
        ]);

            Layanan::create([
            'judul' => 'Bantuan Sosial',
            'deskripsi' => 'Adalah layanan bantuan Sosial pemerintah seperti BLT dan Lainnya',

             'deskripsi_lengkap' => ' <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>PKH (Program Keluarga Harapan)</p>
             <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>BLT (Bantuan Langsung Tunai)</p>
             <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Bantuan UMKM</p>',

            'persyaratan' => '<ol><li>Membawa KTP Asli dan Fotokopi</li>
            <li>Mengisi Formulir Permohonan</li>
            <li>Proses Minimal Tiga (3) Hari Kerja</li></ol>',

            'gambar' => 'layanan/gambar_sosial.jpg',
        ]);

        Slide::create([
            'gambar' => 'slide/slide_2.jpg',
        ]);

         Slide::create([
            'gambar' => 'slide/slide_3.png',
        ]);


        Berita::create([
            'tgl_posting' => '2025-12-04',
            'judul' => 'Ini Penyebab Pala Dan RT Belum Diangkat',

            'isi_berita' => 'Bitung—Pemerintah Kota Bitung saat menggelar Rapat Evaluasi dan Pengawasan Realisasi Anggaran (EPRA) tahun 2025 di lantai empat Kantor Wali Kota pada Rabu (4/12), dipimpin langsung oleh Wali Kota Hengky Honandar, SE bersama Wakil Wali Kota Randito Maringka dan dihadiri seluruh Jajaran Perangkat Daerah.
            Terungkap dalam rapat tersebut jika penyerapan anggaran Pemkot Bitung untuk tahun 2025 ini banyak terpakai untuk membayar hutang dari pemerintah sebelumnya. “Kenapa sampai saat ini Pala dan RT belum juga diangkat, Pembangunan Kota masih belum maksimal karena Pemerintah Kota Bitung harus membayar hutang dari tahun-tahun sebelumnya,” ungkap Wali Kota.',

            'gambar' => 'berita/berita_1.jpg'
        ]);

         Berita::create([
            'tgl_posting' => '2025-12-05',
            'judul' => 'Wali Kota : TP PKK Adalah Mitra Pemkot Untuk Bangun Ekonomi Keluarga Sejahtera',
            
            'isi_berita' => 'Bitung- Dalam Rapat Kerja Daerah (Rakerda) yang dirangkaikan dengan peringatan Hari Kesatuan Gerak (HKG) PKK ke-53 Dari Tim Penggerak (TP) Pemberdayaan Kesejahteraan Keluarga (PKK) Kota Bitung, Wali Kota Bitung Hengky Honandar, SE mengatakan jika TP PKK adalah mitra Strategis Pemkot Bitung.
            “TP-PKK dan Dekranasda dianggap sebagai mitra strategis dalam membangun kesejahteraan keluarga, pemberdayaan masyarakat, dan penguatan ekonomi kreatif berbasis budaya lokal,” kata Wali Kota saat membawa sambutan di Ruang Sarundajang Kantor Walikota, pada Jumat (05/12).
            Tak hanya itu, Wali Kota Honandar  menyampaikan apresiasi yang tinggi kepada TP PKK dan Dekranasda  yang telah menjalankan peran dengan penuh dedikasi, ketekunan, dan ketulusan selama ini, bahkan bisa menguasai lomba di tingkat provinsi.
            Ditambahkan oleh Walikota Bitung ke empat yang dipilih oleh masyarakat ini, kalau Pemkot juga memberikan penghargaan atas berbagai program yang telah berjalan dengan baik, seperti pembinaan karakter keluarga, peningkatan kualitas kesehatan, pendidikan keluarga, penguatan ekonomi rumah tangga, dan gerakan lingkungan yang berdampak bagi masyarakat.
            Walikota berharap, Rapat Kerja Daerah TP-PKK dapat menjadi momentum untuk melakukan evaluasi menyeluruh terhadap program yang telah berjalan, menyusun rencana kerja yang lebih strategis, terukur, dan adaptif dengan perkembangan zaman.
            “Penguatan kolaborasi antara pemerintah, TP-PKK, Dekranasda, dan seluruh pemangku kepentingan dianggap sebagai kunci untuk mempercepat terwujudnya keluarga sejahtera, masyarakat berdaya, dan ekonomi lokal yang semakin maju,” tandasnya.',

            'gambar' => 'berita/berita_2.jpg'
        ]);

         Berita::create([
            'tgl_posting' => '2025-12-04',
            'judul' => 'Sebrangi Laut, Wali Kota Boyong Jajaran Pemkot Bitung ke Ibadah Perayaan Natal Kota Bitung',

            'isi_berita' => 'Bitung – Dalam persiapan menyambut kehangatan natal Tahun 2025. Pemkot Bitung yang di Kepalai Langsung oleh Hengky Honandar, SE selaku Wali Kota Bitung memboyong Jajaran Pemerintahan Kota Bitung sebrangi lautan dalam menghadiri Ibadah Perayaan Ibadah Oikumene dan Perayaan Natal Pemerintah Kota Bitung yang berlokasi di Boulevard Papusungan, Lembeh, Rabu (3/12).
            Dalam Ibadah tersebut Wakil Wali Kota Bitung Randito Maringka, Ketua TP-PKK Ny. Ellen Honandar-Sondak, SE, Sektretaris TP-PKK Ny. Jacinta Marybell Meringka, Sekertaris Daerah Ir. Ign. Rudy Theno, ST, MT , Ketua DWP Kota Bitung Ny. Nurjaya Theno Munarwin, SE serta seluruh Perangkat daerah di pemerintah Kota Bitung terlihat begitu menghayati.',

            'gambar' => 'berita/berita_3.jpg'
        ]);

        Potensi::create([
            'judul' => 'Wisata Alam',
            'deskripsi' => 'Potensi Wisata Alam yang terdapat di Kelurahan Girian Bawah',
            'deskripsi_lengkap' => 'Kota Bitung dikenal sebagai salah satu daerah pesisir yang memiliki perkembangan pariwisata sangat pesat di Sulawesi Utara. Selain populer dengan aksesnya menuju Taman Nasional Bunaken dan Taman Wisata Alam Batu Angus, Bitung juga menawarkan pengalaman wisata budaya, kuliner, dan maritim yang kuat. Keberagaman masyarakatnya, perpaduan antara kultur lokal dan pengaruh luar, menjadikan kota ini kaya akan tradisi serta khasanah sosial yang menarik bagi wisatawan. Dengan dukungan infrastruktur pelabuhan internasional serta berbagai event tahunan seperti Festival Pesona Selat Lembeh, Bitung terus memantapkan diri sebagai destinasi unggulan di kawasan timur Indonesia.

Di dalam konteks tersebut, Kelurahan Girian Bawah menjadi salah satu wilayah yang memiliki potensi strategis untuk dikembangkan. Letaknya yang dekat dengan pusat kota dan akses transportasi yang mudah membuat Girian Bawah menjadi pintu masuk yang nyaman bagi wisatawan yang ingin menjelajahi berbagai destinasi sekitarnya. Meskipun bukan kawasan wisata pesisir langsung, kelurahan ini tetap memiliki daya tarik tersendiri melalui atmosfer pemukiman yang tertata, aktivitas sosial masyarakat yang dinamis, serta pusat-pusat kegiatan yang mendukung pergerakan wisatawan menuju berbagai objek wisata di Bitung.

Selain sebagai wilayah transit dan pusat aktivitas masyarakat, Girian Bawah juga memiliki potensi wisata budaya dan kuliner yang dapat menjadi unggulan. Keberagaman masyarakat yang menghuni wilayah ini menciptakan kekayaan tradisi, baik dalam bentuk kuliner lokal, kegiatan keagamaan, maupun interaksi sosial yang rukun dan harmonis. Usaha kuliner, pasar lokal, serta ruang-ruang publik yang ramai menjadi daya tarik tersendiri bagi wisatawan yang ingin merasakan suasana lokal Bitung secara lebih dekat. Potensi ini bisa dikembangkan lebih jauh melalui penataan kawasan, promosi UMKM, serta penyelenggaraan event lokal yang menarik.

Dengan melihat potensi tersebut, Girian Bawah memiliki peluang besar untuk menjadi bagian penting dalam rantai destinasi pariwisata Kota Bitung. Pendekatan pengembangan wisata berbasis masyarakat, penguatan identitas lokal, serta dukungan infrastruktur dapat menjadi strategi utama dalam memaksimalkan daya tariknya. Jika dikelola dengan baik, Girian Bawah tidak hanya menjadi kawasan pendukung, tetapi juga mampu tampil sebagai salah satu ikon wisata budaya dan kuliner yang memperkaya pengalaman wisatawan selama berada di Kota Bitung.',
            'gambar' => 'potensi/potensi_wisata.jpg'
        ]);

         Potensi::create([
            'judul' => 'UMKM',
            'deskripsi' => 'Usaha Mikro Kecil Menengah yang ada di Kelurahan Girian Bawah',
            'deskripsi_lengkap' => 'Kota Bitung dikenal sebagai salah satu pusat pertumbuhan ekonomi di Sulawesi Utara, dan sektor UMKM menjadi tulang punggung penting dalam perkembangan tersebut. Dengan karakter kota pelabuhan yang dinamis, Bitung memiliki ekosistem usaha yang terus bergerak, mulai dari industri pengolahan hasil laut, kerajinan lokal, hingga kuliner khas. Keberagaman sumber daya alam dan manusia telah menciptakan peluang luas bagi UMKM untuk berkembang, sekaligus memberikan kontribusi nyata terhadap lapangan kerja dan peningkatan kesejahteraan masyarakat.

Di antara wilayah yang memiliki potensi UMKM cukup kuat, Kelurahan Girian Bawah menempati posisi yang strategis. Letaknya yang berdekatan dengan pusat perdagangan dan jalur transportasi utama membuat kelurahan ini menjadi tempat ideal bagi tumbuhnya berbagai bentuk usaha kecil dan menengah. Aktivitas ekonomi yang hidup—mulai dari warung, toko sembako, produsen makanan rumahan, hingga jasa perbengkelan—menunjukkan bahwa Girian Bawah memiliki struktur ekonomi masyarakat yang solid dan responsif terhadap kebutuhan pasar.

Selain itu, Girian Bawah memiliki keunggulan berupa keragaman produk UMKM yang terus bertambah dari waktu ke waktu. Produk makanan olahan, terutama yang berbasis hasil laut, menjadi salah satu potensi unggulan karena Bitung dikenal sebagai daerah yang kaya akan ikan dan produk perikanan. Di sisi lain, sektor jasa dan perdagangan juga berkembang pesat, ditopang oleh permintaan masyarakat yang tinggi dan mobilitas penduduk yang aktif. Ini memberikan peluang besar bagi UMKM untuk memperluas pasar, memperkuat branding lokal, dan meningkatkan kualitas produksi.

Dengan segala potensi yang ada, pengembangan UMKM di Girian Bawah memiliki masa depan yang cerah apabila terus ditunjang oleh pelatihan, pendampingan, serta akses permodalan yang memadai. Dukungan pemerintah daerah, kolaborasi antar–pelaku usaha, serta pemanfaatan teknologi digital dapat menjadi kunci untuk meningkatkan daya saing produk lokal. Jika dikelola dengan baik, Girian Bawah tidak hanya akan menjadi kawasan ekonomi yang maju, tetapi juga mampu mencetak pelaku UMKM unggulan yang dapat bersaing di tingkat kota, provinsi, bahkan nasional.',
            'gambar' => 'potensi/potensi_umkm.jpg'
        ]);

         Potensi::create([
            'judul' => 'Pertanian',
            'deskripsi' => 'Hasil produk Pertanian dan turunnanya yang ada di kelurahan Girian Bawah ',
            'deskripsi_lengkap' => 'Kota Bitung memang lebih dikenal sebagai kota industri dan pelabuhan, namun sektor pertanian tetap memiliki peran penting dalam menopang kehidupan masyarakat. Keberadaan lahan-lahan pertanian di beberapa wilayah kota memberikan kontribusi terhadap ketersediaan bahan pangan lokal serta mendukung ketahanan pangan daerah. Meskipun luas lahan pertanian tidak sebesar daerah pedesaan, Bitung tetap memiliki potensi untuk mengembangkan pertanian perkotaan (urban farming), tanaman hortikultura, dan beberapa komoditas yang sesuai dengan kondisi iklim tropis di kawasan pesisir.

Dalam konteks wilayah tersebut, Kelurahan Girian Bawah memiliki potensi pertanian yang dapat terus dikembangkan terutama dalam skala rumah tangga dan komunitas. Kondisi geografis yang relatif datar serta lingkungan permukiman yang tertata memberi peluang bagi masyarakat untuk memanfaatkan pekarangan sebagai lahan produktif. Aktivitas seperti budidaya sayuran cepat panen, tanaman herbal, cabai, tomat, hingga tanaman hias dapat menjadi solusi praktis untuk memenuhi kebutuhan rumah tangga sekaligus membuka peluang ekonomi kecil melalui penjualan hasil panen.

Selain budidaya pekarangan, Girian Bawah juga memiliki potensi kuat untuk pengembangan pertanian modern berbasis teknologi sederhana. Penggunaan metode hidroponik, vertikultur, dan polybag semakin diminati masyarakat perkotaan karena efisiensinya dalam penggunaan lahan yang terbatas. Potensi ini dapat diperkuat melalui pembentukan kelompok tani kota, pelatihan pertanian organik, serta pemanfaatan ruang publik sebagai lokasi kebun komunitas. Inisiatif seperti ini tidak hanya meningkatkan nilai ekonomi, tetapi juga menciptakan lingkungan yang lebih hijau dan sehat.

Apabila potensi tersebut dikelola secara berkelanjutan, sektor pertanian di Girian Bawah dapat berkembang menjadi sumber penghidupan tambahan bagi masyarakat sekaligus menjadi bagian dari strategi ketahanan pangan lokal Kota Bitung. Dukungan pemerintah kelurahan, kolaborasi antarwarga, serta pemanfaatan teknologi digital untuk pemasaran hasil tani dapat semakin memperkuat posisi Girian Bawah sebagai salah satu contoh pengembangan pertanian perkotaan yang berhasil. Dengan pendekatan yang tepat, sektor pertanian di wilayah ini mampu memberikan manfaat ekonomi, sosial, dan lingkungan bagi seluruh masyarakat.',
            'gambar' => 'potensi/potensi_pertanian.jpg'
        ]);


    }
}
