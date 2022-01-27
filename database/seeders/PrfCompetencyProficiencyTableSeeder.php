<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PrfCompetencyProficiencyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('prf_competency_proficiency')->delete();
        
        \DB::table('prf_competency_proficiency')->insert(array (
            0 =>
            array (
                'id' => 1,
                'type' => 'KNOWLEDGE',
                'competency_id' => null,
                'level' => 0,
                'level_description' => 'NOT APPLICABLE',
                'description' => 'Belum mengetahui konsep/teori/prinsip dasar
Belum mampu menjelaskan konsep/teori/prinsip dasar secara umum',
            ),
            1 =>
            array (
                'id' => 2,
                'type' => 'KNOWLEDGE',
                'competency_id' => null,
                'level' => 1,
                'level_description' => 'BASIC',
            'description' => 'Mengetahui konsep/teori/prinsip konvensional (eksemplar)
Mampu menjelaskan konsep/teori/prinsip secara umum',
            ),
            2 =>
            array (
                'id' => 3,
                'type' => 'KNOWLEDGE',
                'competency_id' => null,
                'level' => 2,
                'level_description' => 'INTERMEDIATE',
                'description' => 'Memahami seluruh elemen dari suatu konsep/teori/prinsip konvensional & mulai menjajaki perkembangan tren pengetahuan baru, sesuai dengan perkembangan tren pengetahuan
Mampu menjelaskan keterkaitan konsep/teori/prinsip secara detail & spesifik',
            ),
            3 =>
            array (
                'id' => 4,
                'type' => 'KNOWLEDGE',
                'competency_id' => null,
                'level' => 3,
                'level_description' => 'ADVANCED',
            'description' => 'Menguasai seluruh elemen dari konsep/teori/prinsip konvensional secara baik & terintegratif, termasuk faktor-faktor lain yang mempengaruhinya, serta memahami & terus mengikuti perubahan tren pengetahuan baru (updating)
Mampu membandingkan & menjelaskan hubungan sebab akibat antara konsep atau prinsip dengan lainnya (interdisciplinary)',
            ),
            4 =>
            array (
                'id' => 5,
                'type' => 'TECHNICAL SKILL',
                'competency_id' => null,
                'level' => 0,
                'level_description' => 'NOT APPLICABLE',
                'description' => 'Belum memahami konsep, metode, pendekatan, maupun tools dasar/konvensional terkait bidang pekerjaannya
Belum memiliki skill terkait dengan pekerjaannya',
            ),
            5 =>
            array (
                'id' => 6,
                'type' => 'TECHNICAL SKILL',
                'competency_id' => null,
                'level' => 1,
                'level_description' => 'AWARENESS',
                'description' => 'Mempelajari konsep, metode, pendekatan, maupun tools dasar/konvensional terkait bidang pekerjaannya
Belum mampu mengaplikasikan konsep, metode, pendekatan, maupun tools dasar/konvensional yang dipelajari secara baik & benar',
            ),
            6 =>
            array (
                'id' => 7,
                'type' => 'TECHNICAL SKILL',
                'competency_id' => null,
                'level' => 2,
                'level_description' => 'BASIC',
                'description' => 'Memahami & mampu mengaplikasikan konsep, metode, pendekatan, maupun tools dasar/konvensional terkait bidang pekerjaannya secara baik & benar, namun masih membutuhkan arahan ketat dalam bekerja
Mampu menyelesaikan permasalahan sederhana
Berfokus pada proses pengembangan skill melalui on-the-job experience',
            ),
            7 =>
            array (
                'id' => 8,
                'type' => 'TECHNICAL SKILL',
                'competency_id' => null,
                'level' => 3,
                'level_description' => 'INTERMEDIATE',
                'description' => 'Memahami konsep secara mendalam serta mampu mengaplikasikan, metode, pendekatan, maupun tools dasar/konvensional terkait bidang pekerjaannya secara baik & benar, dengan arahan minimal
Mulai menjajaki perkembangan tren konsep, metode, pendekatan, maupun tools terbaru
Mampu memberikan solusi terkait bidang pekerjaannya untuk menyelesaikan permasalahan cukup kompleks 
Berfokus pada proses penerapan dan peningkatan kompetensi (baik knowledge maupun skill)
Mampu memberikan transfer knowledge/pengajaran & pemahaman terkait suatu konsep kepada audiens internal',
            ),
            8 =>
            array (
                'id' => 9,
                'type' => 'TECHNICAL SKILL',
                'competency_id' => null,
                'level' => 4,
                'level_description' => 'ADVANCED',
                'description' => 'Menguasai beragam konsep secara mendalam serta mampu mengaplikasikan, metode, pendekatan, maupun tools dasar/konvensional terkait bidang pekerjaannya dengan baik, benar, dan mandiri
Memahami serta mampu mengaplikasikan beragam konsep, metode, pendekatan, maupun tools terbaru
Mampu memberikan solusi lintas fungsi pekerjaannya untuk menyelesaikan permasalahan kompleks 
Berfokus pada proses penanganan isu-isu organisasi/profesional secara luas serta memberikan rekomendasi perbaikan sistem 
Mampu memberikan pemahaman dengan menjelaskan intisari/hakekat/insight/wisdom dari suatu konsep kepada audiens internal',
            ),
            9 =>
            array (
                'id' => 10,
                'type' => 'TECHNICAL SKILL',
                'competency_id' => null,
                'level' => 5,
                'level_description' => 'MASTER',
                'description' => 'Diakui sebagai ahli terhadap beragam konsep, metode, pendekatan, maupun tools dasar/konvensional terkait bidang pekerjaannya oleh pihak internal dan eksternal
Mampu mempromosikan & mendorong penerapan konsep/metode/pendekatan/tools terbaru di organisasi
Mampu memberi solusi lintas fungsi pekerjaannya dengan menerapkan berbagai interdisiplin ilmu untuk menyelesaikan masalah sangat kompleks 
Berfokus pada proses penanganan isu-isu strategis secara luas serta mendorong inovasi terhadap sistem
Mampu memberikan pemahaman dengan menjelaskan intisari/hakekat/insight/wisdom dari suatu konsep kepada audiens internal dan eksternal',
            ),
            10 =>
            array (
                'id' => 15,
                'type' => 'DEFAULT TYPE',
                'competency_id' => null,
                'level' => 0,
                'level_description' => 'LEVEL 0',
                'description' => 'Belum memiliki competency yang dipersyaratkan',
            ),
            11 =>
            array (
                'id' => 16,
                'type' => '',
                'competency_id' => 1,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Menyesuaikan diri ketika dibutuhkan</b>
Menghargai dan terbuka terhadap umpan balik, masukan maupun perspektif baru.
Menerima perubahan terkait prioritas kerja, beban kerja, jadwal, dan target pekerjaan.
Bersikap terbuka untuk mempertimbangkan kembali ide-ide ketika ada informasi baru atau bukti yang berbeda.
Siap menerima/menjalankan terhadap hal-hal baru.',
            ),
            12 =>
            array (
                'id' => 17,
                'type' => '',
                'competency_id' => 2,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Berorientasi pada masa depan</b>
Memahami bahwa masa depan organisasi dapat dibentuk.
Memahami bahwa dengan mampu memperkirakan masa depan secara akurat akan memiliki kesempatan lebih besar dalam memanfaatkan peluang atau mengelola resiko.
Memahami dampak dari siklus proses : input, output dan outcome.',
            ),
            13 =>
            array (
                'id' => 18,
                'type' => null,
                'competency_id' => 3,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => 'Memahami dasar-dasar bisnis  Menunjukkan minat untuk memahami dasar-dasar bisnis yang terkait dengan peran pekerjaannya sendiri, dan dampaknya terhadap perusahaan Memahami kebijakan dan prosedur yang relevan, serta sumber referensi yang tepat untuk mendapatkannya Berupaya memahami dan mengklarifikasi tujuan serta sasaran umum yang ingin dicapai oleh perusahaan',
            ),
            14 =>
            array (
                'id' => 19,
                'type' => '',
                'competency_id' => 4,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Bekerja sama dan berkomunikasi</b>
Memiliki komitmen untuk menjalankan peran sebagai anggota tim.
Mengerjakan semua tugas sesuai tanggung jawab dengan tepat untuk mencapai tujuan tim.
Saling menghargai dengan menerapkan norma yang berlaku dalam tim.
Selalu menjaga komunikasi dengan baik dan efektif kepada anggota tim.',
            ),
            15 =>
            array (
                'id' => 20,
                'type' => '',
                'competency_id' => 5,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Menerapkan penalaran dan pengalaman</b>
Menerapkan aturan, nalar/akal sehat serta pengalaman untuk mengidentifikasi masalah
Mengenali jika situasi yang dihadapi saat ini sama dengan situasi pada masa lalu',
            ),
            16 =>
            array (
                'id' => 21,
                'type' => '',
                'competency_id' => 6,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Bekerja secara efisien</b>
Melakukan pekerjaan dengan cara yang paling efisien (misalnya dengan penggunaan kertas bekas atau bahan daur ulang)
Menghindari pemborosan (misalnya dengan menghindari penggunaan listrik secara berlebihan)
Mengurangi dampak penggunaan pribadi terhadap lingkungan serta memegang prinsip reducing, reusing dan recycling dalam menggunakan sumber daya',
            ),
            17 =>
            array (
                'id' => 22,
                'type' => '',
                'competency_id' => 7,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Memperhatikan standar</b>
Menanyakan kejelasan informasi, tugas, dll. yang seringkali tertuang dalam dokumen tertulis
Aktif mencari informasi terkait standar atau prosedur yang berlaku
Berupaya memahami peran, ekspektasi, tugas, dan/atau standar kinerja yang diharapkan dalam pekerjaannya sendiri
Menyimpan catatan dari setiap proses kerja dan aktivitas secara terperinci dan jelas ',
            ),
            18 =>
            array (
                'id' => 23,
                'type' => '',
                'competency_id' => 8,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Mengidentifikasi konflik</b>
Menyadari dan mengetahui adanya konflik antara dua pihak atau lebih
Mengidentifikasi masalah yang menyebabkan konflik
Melakukan tindakan untuk merespon keluhan',
            ),
            19 =>
            array (
                'id' => 24,
                'type' => '',
                'competency_id' => 9,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Memahami proses dan kendala</b>
Memahami proses, hasil kerja dan kendala yang terjadi sebelumnya.
Memahami kesalahan maupun masalah yang tidak terpecahkan serta proses yang tidak efisien.',
            ),
            20 =>
            array (
                'id' => 25,
                'type' => '',
                'competency_id' => 10,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Melayani sesuai standar layanan</b>
Mendengar permintaan pelanggan dan memahami layanan/solusi yang dibutuhkan pelanggan.
Menindaklanjuti pertanyaan, permintaan, serta keluhan pelanggan.
Melayani pelanggan sesuai dengan standar layanan.
Meminta umpan balik/masukan untuk layanan/solusi yang diberikan.',
            ),
            21 =>
            array (
                'id' => 26,
                'type' => '',
                'competency_id' => 11,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Memahami pentingnya data dalam mendukung proses pekerjaan</b>
Menunjukkan pemahaman tentang data yang dibutuhkan dalam melakukan pekerjaan.
Menunjukkan kesadaran terhadap pentingnya data saat melakukan pekerjaan ataupun memecahkan suatu masalah. 
Mampu melihat dan memahami gambaran besar dari suatu data.
Mengumpulkan data dari sumber yang terpercaya.',
            ),
            22 =>
            array (
                'id' => 27,
                'type' => '',
                'competency_id' => 12,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Membuat keputusan dengan mengintepretasikan prosedur yang relevan</b>
Membuat keputusan yang lugas dan tegas dengan mempertimbangkan faktor yang saling terkait ketika dihadapkan pada dua atau lebih prosedur yang tidak sesuai.
Menggunakan kriteria yang jelas dalam membuat keputusan walaupun dengan prosedur yang tidak lengkap.
Membuat keputusan pada area tanggung jawabnya dengan risiko sangat rendah.
Membuat keputusan dengan merujuk pada kasus sebelumnya atau solusi ‘best practices’ jika tidak terdapat prosedur yang relevan.
Mempertimbangkan dan menyadari adanya risiko serta konsekuensi dari tindakan dan/atau keputusan yang akan dibuat.',
            ),
            23 =>
            array (
                'id' => 28,
                'type' => '',
                'competency_id' => 13,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Memberikan umpan balik terhadap kinerja dan pengembangan kompetensi</b>
Memberikan umpan balik, arahan dan dukungan kepada anggota tim terkait kemampuan serta kinerjanya.
Bekerjasama dengan anggota tim untuk mengidentifikasi kinerja saat ini dengan tujuan pembelajaran atau program pengembangan yang sesuai untuk memenuhi kesenjangan (gap) keahliannya.
Memberikan orientasi kepada tim baru dan membantunya untuk mencapai tujuan.',
            ),
            24 =>
            array (
                'id' => 29,
                'type' => '',
                'competency_id' => 14,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Memahami dan menjalin komunikasi dengan para pemangku kepentingan</b>
Memahami dan mengenal profil para pemangku kepentingan
Menjalin komunikasi yang baik dengan para pemangku kepentingan
Menunjukkan kecakapan dalam berkomunikasi dengan menghargai dan berempati kepada para pemangku kepentingan
Responsif terhadap kemauan, kekhawatiran dan pertanyaan para pemangku kepentingan',
            ),
            25 =>
            array (
                'id' => 30,
                'type' => '',
                'competency_id' => 15,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Mempengaruhi orang lain menggunakan alasan yang jelas dan logis</b>
Menggunakan persuasi langsung dalam diskusi atau presentasi.
Dapat memberi alasan, menggunakan pengetahuan atau pengalaman sendiri untuk menjawab pertanyaan.
Menunjukkan suatu fakta atau menggunakan contoh nyata, alat bantu visual, demonstrasi, dan lainnya ketika memberikan penjelasan.',
            ),
            26 =>
            array (
                'id' => 31,
                'type' => '',
                'competency_id' => 16,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Sigap menanggapi peluang atau masalah saat ini</b>
Mengenali dan bertindak atas peluang yang ada
Menanggapi masalah dan mengatasi rintangan dengan segera
Siaga dengan peluang yang ada dan melihat apa yang perlu dilakukan
Mengerjakan tugasnya tanpa diingatkan oleh atasan atau orang lain ',
            ),
            27 =>
            array (
                'id' => 32,
                'type' => '',
                'competency_id' => 17,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Menggali ide baru</b>
Menggali ide baru yang dihasilkan oleh orang lain 
Menerima cara baru dalam melakukan pekerjaan meskipun cara lama masih berfungsi dengan baik
Berkontribusi secara aktif pada sesi brainstorming di area kerjanya untuk menghasilkan ide-ide baru
Meminta umpan balik  (feedback) dari user/customer untuk menggali ide baru',
            ),
            28 =>
            array (
                'id' => 33,
                'type' => '',
                'competency_id' => 18,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Mengklarifikasi situasi atau masalah</b>
Mengajukan pertanyaan langsung kepada orang-orang yang terlibat atau yang mengetahui situasi/masalah
Menggunakan berbagai informasi/dokumen yang telah tersedia atau berkonsultasi dengan ahli atau sumber daya lain untuk mengklarifikasi situasi atau masalah',
            ),
            29 =>
            array (
                'id' => 34,
                'type' => '',
                'competency_id' => 19,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Mengenali dan mengomunikasikan kebutuhan akan perubahan</b>
Mengenali atau identifikasi dan menguji potensi perubahan dan perbaikan pada diri atau unit kerja sendiri yang dapat mendorong perbaikan pencapaian kinerja
Mendefinisikan perubahan dan perbaikan pada diri atau unit kerja sendiri
Mengomunikasikan harapan positif terhadap agenda perubahan dan perbaikan',
            ),
            30 =>
            array (
                'id' => 35,
                'type' => '',
                'competency_id' => 20,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Menjalankan operasional tim</b>
Memahami dan mendistribusikan tugas dan tanggung jawab tim
Menetapkan target, harapan, norma, dan proses yang jelas bagi tim
Memantau dan mengevaluasi hasil kerja dari tim',
            ),
            31 =>
            array (
                'id' => 36,
                'type' => null,
                'competency_id' => 21,
                'level' => 1,
                'level_description' => 'LEVEL 1',
            'description' => 'Berorientasi pada pembelajaran dan pengembangan diri  Menunjukkan rasa ingin tahu terhadap materi dalam pekerjaan/profesinya sendiri Menunjukkan upaya untuk meningkatkan kapasitas diri Mengikuti informasi dan perkembangan baru atau praktik terbaik di bidang keahliannya sendiri (misalnya dengan membaca, berhubungan dengan jaringan kontak, atau dengan menghadiri pelatihan) Tetap terkini dengan alat, metode, teknologi, atau pendekatan baru yang mungkin berguna untuk pekerjaan atau proses kerja yang dimiliki Belajar dari orang lain untuk meningkatkan keterampilan dan mendapatkan pengetahuan baru Menerapkan pengetahuan dan keterampilan baru di tempat kerja   ',
            ),
            32 =>
            array (
                'id' => 37,
                'type' => null,
                'competency_id' => 22,
                'level' => 1,
                'level_description' => 'LEVEL 1',
            'description' => 'Membangun jaringan hubungan  Mengenali kebutuhan untuk mengembangkan jaringan dan hubungan, dan sejauh mana jaringan itu tersebar Membangun pendekatan (rapport)  dengan orang-orang yang relevan dan tetap berhubungan',
            ),
            33 =>
            array (
                'id' => 38,
                'type' => '',
                'competency_id' => 23,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Memberikan arahan</b>
Memberikan arahan yang memadai dan menjelaskan tugas secara detail 
Menyusun kebutuhan dan persyaratan tugas yang jelas 
Mendelegasikan rincian tugas rutin secara eksplisit dengan target dan ketentuan yang jelas (tenggat waktu, prosedur, hasil  yang diharapkan, do and don’ts, dll.) ',
            ),
            34 =>
            array (
                'id' => 39,
                'type' => null,
                'competency_id' => 24,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => 'Memahami struktur formal  Memahami dan menggunakan struktur, tanggung jawab menurut hukum, dan proses pengambilan keputusan resmi organisasi Memahami kebijakan, prosedur, aturan, dan regulasi Peka terhadap budaya dan konteks politik organisasi dan menggunakannya untuk bekerja secara efektif  Memperlakukan informasi organisasi sebagai hal yang sensitif dan rahasia',
            ),
            35 =>
            array (
                'id' => 40,
                'type' => '',
                'competency_id' => 25,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Merencanakan pekerjaan sendiri</b>
Melakukan perencanaan pekerjaan sendiri dan pengaturan sumber daya untuk mencapai tujuan yang ditetapkan
Memastikan informasi tentang kemajuan tugas diketahui oleh semua pihak terkait ',
            ),
            36 =>
            array (
                'id' => 41,
                'type' => '',
                'competency_id' => 26,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Menyelesaikan masalah yang simpel</b>
Menilai masalah secara logis dengan berdasarkan pengalaman atau histori
Menganalisa masalah untuk mengidentifikasi alternatif penyebabnya termasuk dengan pendekatan yang berbeda
Menyelesaikan masalah yang sudah diketahui solusinya',
            ),
            37 =>
            array (
                'id' => 42,
                'type' => null,
                'competency_id' => 27,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => 'Bekerja sama dalam tim  Memahami  batasan dan peran di dalam tim Berbagi seluruh informasi berharga dengan anggota tim Bersedia membantu orang lain di dalam tim Memperlakukan anggota tim lainnya dengan hormat; mengenali peran setiap anggota di dalam tim  ',
            ),
            38 =>
            array (
                'id' => 43,
                'type' => '',
                'competency_id' => 28,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Mendemonstrasikan minat dalam mempelajari teknologi baru dan yang sedang berkembang</b>
Menunjukkan ketertarikan atau semangat mempelajari teknologi baru
Mendorong, menyemangati dan mempengaruhi teman/orang lain untuk mempelajari teknologi baru
Mempelajari alat dan teknologi  yang sedang berkembang sesuai dengan bidang pekerjaannya 
Memanfaaatkan waktu untuk menciptakan kesempatan belajar teknologi baru bagi diri sendiri',
            ),
            39 =>
            array (
                'id' => 44,
                'type' => '',
                'competency_id' => 29,
                'level' => 1,
                'level_description' => 'LEVEL 1',
                'description' => '<b>Memahami strategi</b>
Mengidentifikasi elemen penting dari visi organisasi dan implikasinya untuk pekerjaannya sendiri
Memahami hubungan konteks pekerjaan saat ini dengan visi organisasi ',
            ),
            40 =>
            array (
                'id' => 45,
                'type' => '',
                'competency_id' => 1,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Menyesuaikan diri dengan cepat dalam suatu situasi</b>
Mengubah cara pendekatan kerja atau urutan prioritas sehingga sesuai dengan situasi yang terjadi.
Mempertimbangkan masukan orang lain dalam pengembangan ide untuk menanggapi/merespon suatu situasi.
Menyesuaikan dan mempelajari perilaku baru dengan situasi yang terjadi.
Menerapkan pola pikir dan sikap positif ketika dihadapkan pada tantangan/hambatan di tempat kerja.',
            ),
            41 =>
            array (
                'id' => 46,
                'type' => '',
                'competency_id' => 2,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Mengidentifikasi aspek-aspek terkait masa depan</b>
Memahami hubungan situasi saat ini dan dampaknya terhadap kondisi masa depan.
Menemukan keterkaitan antara beberapa faktor atau variabel dalam kondisi saat ini dan masa depan.
Mengidentifikasi aspek-aspek yang dapat mempengaruhi masa depan.
Mengidentifikasi peristiwa atau kejadian penting yang relevan di masa lalu untuk menangani permasalahan kompleks di masa depan',
            ),
            42 =>
            array (
                'id' => 47,
                'type' => null,
                'competency_id' => 3,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => 'Mengaitkan peran atau pekerjaan diri sendiri  dengan bisnis  Memahami aspek finansial pada area pekerjaan sendiri Berusaha untuk mempelajari masalah yang berkaitan dengan aspek bisnis di fungsi kerja lain Memahami dampak pekerjaan yang dilakukan terhadap fungsi kerja lain di organisasi, pelanggan serta pemangku kepentingan',
            ),
            43 =>
            array (
                'id' => 48,
                'type' => '',
                'competency_id' => 4,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => ' <b>Mendukung partisipasi tim</b>
Saling berbagi wawasan (insight) dan keahlian dengan anggota tim lainnya.
Memberi kesempatan anggota tim untuk menyampaikan pendapat.
Bersedia kompromi untuk kemajuan, pencapaian tujuan, dan/atau keputusan tim, meski berbeda dengan pendapat pribadi.
Mendukung anggota tim untuk mengatasi kendala dalam menyelesaikan pekerjaan guna mencapai tujuan tim.',
            ),
            44 =>
            array (
                'id' => 49,
                'type' => '',
                'competency_id' => 5,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Mengenali pola dari suatu data dan informasi</b>
Melihat pola, tren maupun kesenjangan/bagian yang hilang dari suatu informasi
Menyadari kemiripan/perbedaan antara situasi saat ini dengan situasi di masa lalu, serta mampu mengidentifikasi kemiripan dan/atau perbedaannya
Menggunakan pengalaman di masa lalu untuk membantu menghadapi/merespon situasi saat ini
Mengidentifikasi hubungan antara sebuah informasi dengan konteks situasi yang relevan',
            ),
            45 =>
            array (
                'id' => 50,
                'type' => '',
                'competency_id' => 6,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Bekerja secara efektif dan efisiensi sumber daya</b>
Mengelola rencana kerja  secara realistis, baik dari segi ketersediaan waktu maupun sumber daya dan menyadari keterkaitan keduanya
Menggunakan waktu serta sumber daya lainnya secara efektif dan efisien untuk mencapai tujuan dan hasil yang diinginkan
Mengidentifikasi inefisiensi atau pemborosan yang terjadi
Memahami pentingnya mengelola anggaran dan menerapkannya dalam bekerja',
            ),
            46 =>
            array (
                'id' => 51,
                'type' => '',
                'competency_id' => 7,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Mematuhi standar</b>
Mematuhi kebijakan, pedoman, dan prosedur yang relevan
Memeriksa kembali keakuratan data atau informasi sesuai standar
Memeriksa dan mengukur pekerjaannya sendiri secara teratur untuk memastikan kepatuhan terhadap aturan, standar, serta prosedur yang berlaku
Memberikan informasi kepada orang lain terkait standar dan prosedur yang berlaku; memberitahukan kepada pihak terkait tentang kemungkinan terjadinya ketidakpatuhan
Menunjukkan contoh praktek kerja yang dapat mengganggu standar dan kepatuhan kerja
Mengidentifikasi penyimpangan terhadap standar atau persyaratan tertentu, serta mencari informasi untuk menjaga keteraturan',
            ),
            47 =>
            array (
                'id' => 52,
                'type' => '',
                'competency_id' => 8,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Memahami sudut pandang setiap pihak</b>
Mengungkap konflik kepada pihak-pihak yang terlibat dengan tetap menghargai setiap sudut pandangnya
Mendengarkan setiap sudut pandang yang berbeda dengan tetap mendorong terciptanya situasi yang kondusif, saling memahami dan mengerti.
Mengidentifikasi area kepentingan yang menjadi konflik dengan pihak-pihak terkait secara terbuka, saling menghargai dan pada waktu yang tepat.',
            ),
            48 =>
            array (
                'id' => 53,
                'type' => '',
                'competency_id' => 9,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Belajar dari kinerja masa lalu</b>
Mengambil pembelajaran yang diperoleh dari pengalaman masa lalu.
Mengambil pembelajaran dari kesalahan masa lalu dan menindaklanjutinya melalui perbaikan.',
            ),
            49 =>
            array (
                'id' => 54,
                'type' => '',
                'competency_id' => 10,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Melayani melebihi standar layanan</b>
Mengatasi kekurangan dalam pelayanan guna mengembangkan solusi yang komprehensif dan melebihi standar yang sudah ada.
Mencari informasi, menganalisa dan menyusun rencana perbaikan/peningkatan yang diperlukan terkait kepuasan pelanggan melalui survei, wawancara, dll.
Meningkatkan kualitas layanan/solusi dan kebijakan pelayanan berdasarkan umpan balik pelanggan.',
            ),
            50 =>
            array (
                'id' => 55,
                'type' => '',
                'competency_id' => 11,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Mengelola data secara efisien</b>
Mengidentifikasi dan memastikan data yang dibutuhkan untuk mendapatkan jawaban dari permasalahan bisnis.
Berupaya untuk melakukan klarifikasi dan verifikasi data dengan mengajukan pertanyaan yang tepat.
Mengelola dan memastikan akurasi dan validitas data.
Mampu memilah berbagai data dan informasi secara efisien untuk memastikan relevansinya dengan masalah yang dihadapi.',
            ),
            51 =>
            array (
                'id' => 56,
                'type' => '',
                'competency_id' => 12,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Membuat keputusan dengan mengintepretasikan kebijakan yang relevan</b>
Mencari dan menerapkan kebijakan perusahaan sebagai pedoman untuk membuat kesimpulan/keputusan tertentu.
Mengacu pada kebijakan yang relevan untuk mendukung pengambilan keputusan dalam situasi yang kontradiktif.
Membuat keputusan yang berdampak pada tim sendiri maupun tim terkait lainnya, dengan dampak risiko rendah bagi unitnya.
Menyusun prioritas tindakan yang akan dilakukan setelah mengambil keputusan dengan mempertimbangkan risiko dan konsekuensinya.',
            ),
            52 =>
            array (
                'id' => 57,
                'type' => '',
                'competency_id' => 13,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Memberikan dukungan  pengembangan diri</b>
Menilai dan mengenali potensi anggota tim untuk rencana pengembangan karir yang sesuai dengan aspirasinya dan kebutuhan perusahaan.
Mendukung anggota tim untuk berpartisipasi aktif dalam belajar dan mengembangankan diri termasuk memonitor kemajuannya',
            ),
            53 =>
            array (
                'id' => 58,
                'type' => '',
                'competency_id' => 14,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Membina hubungan dengan para pemangku kepentingan</b>
Menjalin komunikasi secara terbuka dengan para pemangku kepentingan untuk memahami dan mengetahui kekhawatiran, kepentingan dan kaitannya dengan perusahaan serta potensi yang menghambat atau mendukung sukses perusahaan
Secara aktif melakukan pendekatan secara positif dengan para pemangku kepentingan dalam rangka memahami kebutuhannya.
Gigih dalam menemukan jawaban atas pertanyaan para pemangku kepentingan dengan cara bertanya, mencari informasi, atau mengangkat isu tertentu
',
            ),
            54 =>
            array (
                'id' => 59,
                'type' => '',
                'competency_id' => 15,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Memengaruhi orang lain menggunakan data yang komprehensif</b>
Menggunakan data yang komprehensif untuk meyakinkan orang lain.
Mengolah dan menyajikan data untuk menghasilkan dampak signifikan. 
Membuat dua atau lebih argumentasi dan/atau poin berbeda dalam diskusi.',
            ),
            55 =>
            array (
                'id' => 60,
                'type' => '',
                'competency_id' => 16,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Bertindak segera</b>
Mengambil tindakan pada situasi yang genting bahkan ketika informasi yang tersedia terbatas
Bertindak secara proaktif dalam situasi kritis atau mendesak
Bertindak tanpa harus diberitahu atau dipaksa oleh suatu keadaan (self-directed)
Menanggapi situasi atau peluang dengan sikap urgensi yang tepat',
            ),
            56 =>
            array (
                'id' => 61,
                'type' => '',
                'competency_id' => 17,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Mengevaluasi metode yang digunakan saat ini</b>
Mengidentifikasi masalah/kekurangan dari metode kerja yang digunakan saat ini
Memiliki rasa penasaran/kritis untuk menciptakan peluang dalam mengevaluasi metode saat ini berdasarkan umpan balik (feedback) dari user/customer
Mencoba solusi berbeda atau ide baru yang diterima (dari atasan atau rekan kerja), untuk memperbaiki metode yang ada  ',
            ),
            57 =>
            array (
                'id' => 62,
                'type' => '',
                'competency_id' => 18,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Menggali fakta</b>
Menggunakan pertanyaan khusus (tidak umum) dalam penyelidikan masalah atau situasi
Menemukan orang yang paling erat dengan masalah tersebut dan menyelidiki lebih lanjut
Mencari informasi dari berbagai sumber seperti surat kabar, majalah, sistem pencarian komputer atau sumber lainnya (mungkin termasuk pasar modal, transaksi keuangan, penelitian pesaing dll)',
            ),
            58 =>
            array (
                'id' => 63,
                'type' => '',
                'competency_id' => 19,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Menginisiasi perubahan</b>
Secara proaktif mencari inisiatif yang membuat organisasi tetap kompetitif
Bekerja untuk mengatasi tantangan dan peluang dalam perubahan dengan cara positif
Meneliti serta berbagi informasi dan pendekatan baru untuk memenuhi kebutuhan perubahan organisasi',
            ),
            59 =>
            array (
                'id' => 64,
                'type' => '',
                'competency_id' => 20,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Memastikan anggota tim mendapatkan informasi yang relevan</b>
Menjelaskan latar belakang alasan pengambilan keputusan
Memastikan bahwa tim telah memiliki semua informasi yang diperlukan sebelum memulai aktivitas kerja (misalnya rencana proyek, prioritas, tugas, dan tanggung jawab)
Menyediakan informasi yang komprehensif kepada tim sehingga memahami masalah atau situasi yang terjadi',
            ),
            60 =>
            array (
                'id' => 65,
                'type' => null,
                'competency_id' => 21,
                'level' => 2,
                'level_description' => 'LEVEL 2',
            'description' => 'Melakukan penilaian diri dan menetapkan target pengembangan   Melakukan penilaian pribadi untuk mengidentifikasi area yang perlu ditingkatkan Menganalisis kinerja diri untuk memahami pengalaman positif, kemunduran, dan kesenjangan dalam pengembangan Secara aktif mencari umpan balik (feedback) dari orang lain termasuk kolega dan manajer untuk mengetahui kekuatan dan kelemahan yang dimiliki Mengintegrasikan hasil penilaian pribadi dan umpan balik (feedback) ke dalam target pengembangan Mengenali peluang untuk pengembangan diri',
            ),
            61 =>
            array (
                'id' => 66,
                'type' => null,
                'competency_id' => 22,
                'level' => 2,
                'level_description' => 'LEVEL 2',
            'description' => 'Memanfaatkan jaringan untuk mendapatkan informasi dan wawasan (insight)  Menggunakan jaringan seseorang untuk bertukar informasi praktis  Membangun jaringan kontak dan hubungan sebagai benchmark dan pencarian informasi rutin Menggunakan jaringan untuk mendapatkan perspektif, sudut pandang, dan wawasan (insight)',
            ),
            62 =>
            array (
                'id' => 67,
                'type' => '',
                'competency_id' => 23,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Memastikan pencapaian target</b>
Menyusun dan menetapkan standar dan prosedur kerja dalam tim, serta konsekuensi akibat ketidakpatuhan terhadap standar dan prosedur 
Memantau kinerja bawahan atau tim sesuai standar dan prosedur yang jelas, sehingga semua proses kerja berjalan sesuai jalur dan tujuan tim
Mengapresiasi bawahan atau tim yang mampu melakukan pekerjaan sesuai standar dan prosedur
Menegur bawahan yang kinerjanya buruk dengan melakukan tindakan mendisiplinkan dan memberikan rekomendasi untuk perbaikan ',
            ),
            63 =>
            array (
                'id' => 68,
                'type' => null,
                'competency_id' => 24,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => 'Memahami struktur informal  Memahami struktur informal organisasi  Menggunakan pemahaman tentang struktur informal  untuk menyelesaikan sesuatu Mengidentifikasi pemangku kepentingan utama dan pembuatan keputusan dalam organisasi',
            ),
            64 =>
            array (
                'id' => 69,
                'type' => '',
                'competency_id' => 25,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Mengelola aktivitas yang beragam</b>
Merencanakan pekerjaan yang melibatkan adanya penentuan milestones, pengaturan sumber daya, penilaian dampak pekerjaan pada orang lain dan tahapan untuk komunikasi yang efektif
Membuat prioritisasi dari aktivitas yang beragam sesuai dengan tingkat kepentingan
Mengelola pekerjaan yang beragam dengan efektif dan efisien',
            ),
            65 =>
            array (
                'id' => 70,
                'type' => '',
                'competency_id' => 26,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Mengatasi masalah yang berulang</b>
Melakukan penelitian untuk mengumpulkan informasi dan menyelidiki akar penyebab masalah
Melihat lebih jauh fakta-fakta untuk memahami implikasi yang kurang jelas
Menghasilkan beberapa alternatif solusi, menentukan parameter untuk mengevaluasi risiko dan manfaat, untuk memilih solusi yang berkelanjutan atau permanen
Menyelesaikan masalah dengan memperhatikan pola, tren atau bagian yang hilang dan segala yang relevan',
            ),
            66 =>
            array (
                'id' => 71,
                'type' => null,
                'competency_id' => 27,
                'level' => 2,
                'level_description' => 'LEVEL 2',
            'description' => 'Berkontribusi untuk tujuan tim   Mendukung keputusan tim Mempercayai kemampuan orang lain dalam tim; membicarakan anggota tim dalam istilah yang positif Berbagi keahlian dan wawasan (insight) dengan yang lain Melihat tekanan dan kendala yang lain di dalam tim, bekerja sama  untuk menyelesaikan pekerjaan ',
            ),
            67 =>
            array (
                'id' => 72,
                'type' => '',
                'competency_id' => 28,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Memahami dampak teknologi terhadap bisnis</b>
Melakukan identifikasi, mempelajari kajian dan hasil riset terkait perkembangan teknologi terkini yang paling dominan serta dampaknya.
Mencoba teknologi terbaru dan mencari dampaknya terhadap bisnis
Melihat peluang dan memberikan rekomendasi untuk melakukan otomasi suatu proses sehingga didapatkan efisiensi dan kualitas yang lebih baik',
            ),
            68 =>
            array (
                'id' => 73,
                'type' => '',
                'competency_id' => 29,
                'level' => 2,
                'level_description' => 'LEVEL 2',
                'description' => '<b>Menyelaraskan pekerjaan saat ini dengan tujuan strategis</b>
Menerjemahkan strategi organisasi menjadi tujuan konkret yang harus dicapai 
Mengembangkan metrics/alat ukur untuk menilai pencapaian tujuan pekerjaan 
Mengalokasikan sumber daya untuk gagasan yang selaras dengan rencana yang dikembangkan ',
            ),
            69 =>
            array (
                'id' => 74,
                'type' => '',
                'competency_id' => 1,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Menyesuaikan diri dengan berbagai situasi ambigu/ketidakpastian</b>
Tetap bersikap positif dan responsif dalam situasi yang ambigu/ketidakpastian.
Bersedia mengambil peran baru atau beberapa peran sekaligus sesuai dengan kebutuhan perubahan
Terbuka atas perubahan ketika dihadapkan dengan perspektif baru serta mampu memanfaatkan ide, pendapat, dan hasil pengamatan
Mendorong beberapa perubahan dalam lingkup/area pekerjaannya sebagai dampak dari perubahan arah, strategi dan kebijakan.
Bekerja dengan baik dalam segala situasi, pihak dan kelompok.',
            ),
            70 =>
            array (
                'id' => 75,
                'type' => '',
                'competency_id' => 2,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Pemahaman menyeluruh terkait masa depan</b>
Menganalisis dan mengevaluasi peristiwa atau kejadian penting yang relevan untuk membuat prediksi masa depan secara komprehensif.
Mampu menyusun informasi tentang masa depan yang terdiri dari pasar, tren bisnis, keuangan dan menuangkannya menjadi skenario yang logis tentang masa depan, termasuk identifikasi risiko dan peluang yang akan muncul.
Memetakan faktor-faktor yang terdampak pada tren saat ini dan mendeskripsikan dampak tren tersebut terhadap setiap faktor.',
            ),
            71 =>
            array (
                'id' => 76,
                'type' => null,
                'competency_id' => 3,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => 'Menunjukkan sikap berorientasi pada bisnis  Menyeimbangkan pendapatan dan kontrol biaya ketika menetapkan target atau membuat keputusan Menginisiasi tindakan untuk mengatasi permasalahan bisnis yang berdampak pada kinerja organisasi Secara aktif mencari umpan balik atau masukan dari pelanggan/pemangku kepentingan terkait strategi untuk meningkatkan kinerja bisnis Mengetahui diferensiasi yang dimiliki perusahaan dengan pesaing di industri sejenis dan nilai tambah yang ditawarkan perusahaan kepada pelanggan',
            ),
            72 =>
            array (
                'id' => 77,
                'type' => '',
                'competency_id' => 4,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Membangun tim</b>
Membangun kerjasama tim dalam menyelesaikan masalah, krisis, atau kendala dan memanfaatkan peluang.
Menjelaskan dan mengingatkan anggota tim mengenai norma perilaku dan proses kerja yang telah disepakati.
Melibatkan seluruh anggota tim dalam pengambilan keputusan termasuk menyepakati perbedaan pendapat yang muncul. 
Memberikan apresiasi kepada anggota tim dengan kinerja baik dan memotivasi anggota tim yang kinerjanya belum sesuai harapan.',
            ),
            73 =>
            array (
                'id' => 78,
                'type' => '',
                'competency_id' => 5,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Menerapkan model dan konsep</b>
Menggunakan pengetahuan tentang teori atau kerangka kerja tertentu dalam memahami situasi 
Menerapkan dan memodifikasi suatu konsep, teori, maupun metode secara tepat dalam memahami suatu permasalahan
Menerapkan model untuk mengidentifikasi kompleksitas situasi dan dampaknya pada output/hasil pencapaian
Memberikan penjelasan tentang suatu masalah bisnis, situasi, maupun peluang berdasarkan teori atau kerangka kerja tertentu',
            ),
            74 =>
            array (
                'id' => 79,
                'type' => '',
                'competency_id' => 6,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Meningkatkan efektivitas dan efisiensi sumber daya</b>
Mengambil tindakan untuk mencegah dan/atau mengatasi inefisiensi yang terjadi
Memperbaiki proses bisnis untuk mengoptimalkan penggunaan sumber daya
Senantiasa memantau dan menjaga kesesuaian antara rencana dengan penggunaan anggaran
Menggunakan sumber daya yang dimiliki secara efektif dan efisien',
            ),
            75 =>
            array (
                'id' => 80,
                'type' => '',
                'competency_id' => 7,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Mengevaluasi standar</b>
Mengidentifikasi potensi terjadinya ketidaksesuaian pekerjaan terhadap standar yang berlaku
Melakukan pengukuran untuk mengevaluasi kualitas hasil dan proses kerja
Mengidentifikasi kelemahan dan point yang perlu ditingkatkan dari kebijakan, pedoman dan prosedur yang berlaku, serta memberikan rekomendasi perbaikan
Mampu membandingkan standar saat ini dengan yang ideal (best practices), mengambil pelajaran dan mengidentifikasi ruang untuk perbaikan',
            ),
            76 =>
            array (
                'id' => 81,
                'type' => '',
                'competency_id' => 8,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Menyelesaikan permasalahan secara langsung</b>
Menyelesaikan permasalahan melalui pertemuan dengan pihak yang terlibat
Menangani kekhawatiran pihak-pihak yang terlibat dengan memberikan informasi akurat dan tepat untuk mengurangi perselisihan. 
Melakukan tindakan untuk menangani isu perilaku dan memastikan lingkungan kerja yang kondusif',
            ),
            77 =>
            array (
                'id' => 82,
                'type' => '',
                'competency_id' => 9,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Mengembangkan proses dan metode kerja serta solusi</b>
Mengevaluasi proses kerja dan kualitasnya yang biasa dilakukan.
Menyesuaikan dan mengembangkan metode kerja agar selaras dengan kebijakan, prosedur, atau cara baru dalam melakukan suatu pekerjaan.
Mengenali situasi yang membutuhkan pendekatan baru atau berpotensi mendapatkan keuntungan.
Terbuka atas perubahan ketika dihadapkan pada perspektif baru dengan memanfaatkan ide, pendapat dan hasil pengamatan.
Mencoba dan mengembangkan solusi yang berbeda.',
            ),
            78 =>
            array (
                'id' => 83,
                'type' => '',
                'competency_id' => 10,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Melayani melebihi harapan pelanggan</b>
Mengantisipasi pertumbuhan kebutuhan dan harapan pelanggan untuk meningkatkan produk serta layanan perusahaan.
Memetakan ‘customer-experience journey’ untuk memahami harapan pelanggan pada setiap aspek interaksi pelanggan dengan bisnis perusahaan.
Memberikan layanan/solusi yang melebihi harapan pelanggan berdasarkan ‘customer-experience journey’.',
            ),
            79 =>
            array (
                'id' => 84,
                'type' => '',
                'competency_id' => 11,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Memanfaatkan data guna menghasilkan dampak</b>
Menganalisis serta menafsirkan data menggunakan metode tertentu berdasarkan wawasan ataupun pengalaman yang dimiliki.
Memiliki pemahaman tentang manfaat dari setiap data yang disajikan beserta dampaknya.
Menggunakan data yang relevan dan tepat untuk melaksanakan setiap proses pekerjaan dan pengambilan keputusan yang memberikan dampak.
Memanfaatkan berbagai data untuk meningkatkan wawasan, makna dan memberikan dampak yang terbaik.
Memproses data secara efektif untuk mendukung proses pengambilan keputusan yang menghasilkan dampak terbaik.',
            ),
            80 =>
            array (
                'id' => 85,
                'type' => '',
                'competency_id' => 12,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Membuat keputusan saat kebijakan yang ada belum memadai</b>
Membuat keputusan terbaik di saat belum adanya panduan atau kebijakan internal yang memadai dengan menggunakan pemahaman yang komprehensif. 
Mengidentifikasi masalah utama dari kebijakan yang kontradiktif dengan memberikan penilaian sebagai masukan dalam membuat keputusan.
Membuat keputusan yang berdampak pada pencapaian tujuan bisnis dengan dampak risiko menengah bagi unitnya.
Mempertimbangan aspek biaya dan manfaat dari suatu keputusan secara tepat dengan mengantisipasi hambatan dan dampak keputusan tersebut.',
            ),
            81 =>
            array (
                'id' => 86,
                'type' => '',
                'competency_id' => 13,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Mendorong perencanaan dan pengembangan jangka panjang</b>
Mendorong untuk membuat perencanaan pengembangan karir dan membimbing serta memberikan tugas kerja yang menantang
Bersedia melepaskan anggota tim yang berpotensi ke fungsi atau tim lain sebagai peluang pengembangan diri
Berpartisipasi aktif dalam pengembangan karir atau suksesi dengan menggunakan data hasil analisis untuk merekrut dan mengembangkan tim.
Mengelola rotasi atau promosi tim sesuai dengan rencana pengembangannya',
            ),
            82 =>
            array (
                'id' => 87,
                'type' => '',
                'competency_id' => 14,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Melibatkan masukan dari pemangku kepentingan terhadap bisnis</b>
Mengakui dan menanggapi umpan balik para pemangku kepentingan dengan segera serta mendiskusikannya dengan pikiran terbuka
Mempertimbangkan informasi yang diterima dari para pemangku kepentingan ke dalam keputusan bisnis, memfasilitasi proses tindak lanjut umpan balik, serta aktif mencari informasi terbaru terkait cara mereka berkontribusi untuk organisasi',
            ),
            83 =>
            array (
                'id' => 88,
                'type' => '',
                'competency_id' => 15,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Memengaruhi orang lain menggunakan pendekatan secara personal</b>
Melakukan observasi untuk memengaruhi orang lain dengan pendekatan secara personal sesuai minatnya.
Melakukan usaha yang maksimal baik dalam waktu, relasi, dan empati secara personal untuk memengaruhi orang lain.
Memengaruhi orang lain dengan menyesuaikan bahasa dan terminologi maupun menggunakan pendekatan minat. ',
            ),
            84 =>
            array (
                'id' => 89,
                'type' => '',
                'competency_id' => 16,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Berpikir dan merencanakan ke depan</b>
Berpikir ke depan dan merencanakan suatu kontingensi sebelum dibutuhkan dan mempersiapkan sumber daya serta kegiatan secara efektif
Menyiapkan rencana darurat untuk menghadapi perubahan di menit terakhir, dengan tindak lanjut yang cukup dalam memastikan kemajuan/kelancaran pekerjaan 
Mengantisipasi dan berjaga-jaga dari masalah yang dapat mengganggu pencapaian target kerja',
            ),
            85 =>
            array (
                'id' => 90,
                'type' => '',
                'competency_id' => 17,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Mengembangkan ide baru</b>
Menemukan ide baru dengan memanfaatkan kreativitas dan sumber daya yang ada
Mengembangkan ide baru yang berbeda dengan metode sebelumnya 
Bekerja dengan menggunakan ide baru atau proses kreatif untuk mengatasi masalah ',
            ),
            86 =>
            array (
                'id' => 91,
                'type' => '',
                'competency_id' => 18,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Menyelidiki akar situasi atau masalah</b>
Mengajukan pertanyaan menyelidik untuk menggali akar suatu masalah atau situasi atau kemungkinan lain di luar isu yang nampak di permukaan
Menghubungi orang yang tidak terlibat langsung, untuk mendapatkan perspektif lain, kronologis, informasi, latar belakang, pengalaman dll.
Tidak berhenti pada jawaban pertama, terus mencari tahu mengapa hal itu dapat terjadi sehingga mendapatkan informasi yang faktual
Membuat pertanyaan hipotesis dan menemukan fakta untuk mencari jawaban akar masalah sesungguhnya',
            ),
            87 =>
            array (
                'id' => 92,
                'type' => '',
                'competency_id' => 19,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Melibatkan orang lain dalam perubahan</b>
Melakukan pendekatan personal untuk menyampaikan pesan atau visi perubahan kepada semua orang  yang terdampak
Mengembangkan program yang melibatkan orang lain, menyediakan sumber daya dan dukungan yang diperlukan untuk meningkatkan implementasi perubahan
Menangani dan mengantisipasi hambatan terkait perilaku tim untuk menjalankan perubahan
Membantu tim mengembangkan keterampilan yang diperlukan untuk perubahan dan perbaikan',
            ),
            88 =>
            array (
                'id' => 93,
                'type' => '',
                'competency_id' => 20,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Membangun tim yang efektif</b>
Menciptakan kondisi yang memungkinkan tim untuk melakukan yang terbaik (misalnya, menetapkan arah yang jelas, menyediakan struktur yang sesuai, mendapatkan orang yang tepat)
Menggunakan strategi yang tepat dan komprehensif, seperti keputusan perekrutan dan pemberhentian, penugasan tim, cross-training, dll. untuk meningkatkan motivasi dan produktivitas tim
Bertindak untuk membangun semangat tim dengan tujuan meningkatkan efektivitas kerja tim
Meminta masukan atau umpan balik (feedback) dari orang/tim lain untuk meningkatkan efektivitas kerja tim',
            ),
            89 =>
            array (
                'id' => 94,
                'type' => null,
                'competency_id' => 21,
                'level' => 3,
                'level_description' => 'LEVEL 3',
            'description' => 'Menggunakan pendekatan sistematis untuk proses pengembangan diri  Bergabung dengan asosiasi profesional yang terkait dengan keahliannya Merencanakan cara sistematis untuk meningkatkan kapabilitas (menetapkan tujuan/target pembelajaran, timeline) Mengatur sumber daya (waktu, anggaran, jaringan, dll.) untuk mendukung pengembangan diri Mengambil kursus jangka pendek sesuai dengan spesialisasinya untuk meningkatkan kemampuan Mengidentifikasi sumber daya, alat, atau metode khusus yang sesuai untuk pengembangan diri',
            ),
            90 =>
            array (
                'id' => 95,
                'type' => null,
                'competency_id' => 22,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => 'Memperkuat hubungan dengan jaringan  Membangun hubungan yang dapat  memberi dukungan aktif Menciptakan hubungan saling percaya sehingga seseorang secara spontan mau memberikan informasi yang berharga  Menggunakan jaringan untuk tetap mengikuti perkembangan penting di sektor terkait Mendapatkan kepercayaan rekan-rekan di dalam jaringan  ',
            ),
            91 =>
            array (
                'id' => 96,
                'type' => '',
                'competency_id' => 23,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Mendorong pencapaian melebihi target</b>
Menerapkan standar kinerja baru yang berbeda atau lebih tinggi 
Melakukan coaching dan counseling terhadap bawahan atau tim untuk berkinerja melebihi target
Menggunakan pengaruh/pendekatan personal untuk mendorong tim menunjukkan kinerja terbaiknya 
Menunjukkan empati dan memberikan dukungan emosional kepada bawahan untuk meningkatkan semangat  
Memberikan alasan yang logis dan rasional terhadap suatu keputusan atau tujuan, untuk meningkatkan keterlibatan tim sehinggadapat menunjukkan kinerja terbaiknya',
            ),
            92 =>
            array (
                'id' => 97,
                'type' => null,
                'competency_id' => 24,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => 'Memahami budaya   Memahami budaya dan prioritas organisasi serta menggunakannya untuk memahami apa yang mungkin berhasil dan apa yang tidak Mengenali  dan menggunakan budaya atau pendekatan yang akan menghasilkan respons terbaik Mengenali batasan organisasi yang tersirat',
            ),
            93 =>
            array (
                'id' => 98,
                'type' => '',
                'competency_id' => 25,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Mengkoordinasikan aktivitas dalam tim</b>
Mengembangkan dan menerapkan rencana kerja yang efektif dengan penggunaan sumber daya terbatas secara efisien
Mengalokasikan dan menentukan prioritas terkait keterlibatan tim dalam beberapa inisiatif yang serentak
Memastikan pekerjaan yang dilakukan menggunakan pendekatan yang efektif dan efisien dengan tetap mempertahankan atau meningkatkan kualitas output ',
            ),
            94 =>
            array (
                'id' => 99,
                'type' => '',
                'competency_id' => 26,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Mengatasi masalah sistemis</b>
Melakukan rekonsiliasi fakta dan informasi yang bertentangan dan/atau yang tidak lengkap untuk mengidentifikasi masalah multi-dimensi yang kompleks
Melakukan validasi masalah dari berbagai perspektif untuk mencapai titik temu terbaik dari solusi yang berbeda
Menyelesaikan masalah sistemis dengan membentuk tim inter-disciplinary untuk meneliti kemungkinan penyebab masalah serta mengembangkan solusi terintegrasi',
            ),
            95 =>
            array (
                'id' => 100,
                'type' => null,
                'competency_id' => 27,
                'level' => 3,
                'level_description' => 'LEVEL 3',
            'description' => 'Menghargai masukan dan kontribusi dari orang lain   Memberikan pujian bagi mereka yang memiliki kinerja baik Mengenali dan membangun ide-ide bagus satu sama lain Menghormati keahlian orang lain dan memanfaatkan kesempatan untuk belajar dari orang tersebut  Meminta saran dan umpan balik (feedback) dari rekan kerja Menghargaii keberagaman bakat, keterampilan, dan latar belakang anggota tim dan memanfaatkannya dengan sebaik-baiknya  ',
            ),
            96 =>
            array (
                'id' => 101,
                'type' => '',
                'competency_id' => 28,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Memanfaatkan teknologi untuk optimasi proses</b>
Mengambil peran dalam mendefinisikan kebutuhan dan implementasi teknologi yang sesuai untuk organisasi 
Mengambil peran penting dalam proses digitalisasi (misalnya dalam otomasi proses manual ke dalam sistem aplikasi).  
Membuat rencana kontingensi untuk implementasi teknologi serta mengukur hasilnya ',
            ),
            97 =>
            array (
                'id' => 102,
                'type' => '',
                'competency_id' => 29,
                'level' => 3,
                'level_description' => 'LEVEL 3',
                'description' => '<b>Menyesuaikan implementasi strategi dengan tuntutan situasi</b>
Menghasilkan rencana taktis atau inisiatif untuk mencapai tujuan atau menangani hambatan operasi
Menilai peluang atau risiko yang muncul kemudian melakukan penyesuaikan pelaksanaan rencana taktis
Mengeksplorasi kemungkinan baru untuk masukan penyesuaian/perbaikan strategi',
            ),
            98 =>
            array (
                'id' => 103,
                'type' => '',
                'competency_id' => 1,
                'level' => 4,
                'level_description' => 'LEVEL 4',
                'description' => '<b>Melakukan penyesuaian secara taktis</b>
Berinisiasi dalam mengubah tujuan maupun fungsi pekerjaan guna menyelaraskannya dengan prioritas baru di organisasi.
Menciptakan perubahan operasional/jangka pendek di organisasi untuk memenuhi kebutuhan terhadap situasi tertentu.
Merespon dengan sigap dan efektif terhadap kondisi tak terduga dan menyesuaikan pendekatan secara cepat sesuai situasi yang dihadapi.',
            ),
            99 =>
            array (
                'id' => 104,
                'type' => '',
                'competency_id' => 2,
                'level' => 4,
                'level_description' => 'LEVEL 4',
                'description' => '<b>Menyusun strategi untuk mengantisipasi kondisi masa depan</b>
Menilai potensi risiko dan peluang guna mendapatkan pemahaman yang jelas tentang cara mitigasi risiko dan pengelolaan peluang.
Menyusun rencana sistematis untuk mendayagunakan peluang yang diprediksi akan muncul di masa depan.
Merancang strategi dan rencana mitigasi yang terintegrasi untuk menghadapi risiko di masa depan dengan mempertimbangkan seluruh aspek yang terkait, seperti manusia, teknologi, organisasi dan keuangan.',
            ),
            100 =>
            array (
                'id' => 105,
                'type' => null,
                'competency_id' => 3,
                'level' => 4,
                'level_description' => 'LEVEL 4',
                'description' => 'Memanfaatkan peluang dan solusi bisnis  Memanfaatkan peluang yang tersedia Menyadari munculnya kompetitor dan/atau risiko terkait, serta mengambil Tindakan yang diperlukan Memahami perspektif pelanggan dan/atau pemangku kepentingan terhadap program/layanan dari segi biaya/manfaat Memanfaatkan analisis ‘cost-benefit’ untuk memahami implikasi finansial dari skenario bisnis dan keuangan pada saat merancang dan menerapkan program',
            ),
            101 =>
            array (
                'id' => 106,
                'type' => '',
                'competency_id' => 4,
                'level' => 4,
                'level_description' => 'LEVEL 4',
                'description' => '<b>Menciptakan kolaborasi/kerjasama lintas fungsi</b>
Mengumpulkan individu dari berbagai fungsi/unit kerja untuk saling bekerja sama dalam mengatasi masalah atau krisis dan memanfaatkan peluang
Mendapatkan dukungan manajemen sehingga memungkinkan terjadinya kerjasama/kolaborasi antar anggota tim lintas fungsi/unit kerja
Menunjukkan empati dan dukungan kepada seluruh anggota tim termasuk dari fungsi/unit kerja lain dalam rangka membina hubungan baik antar anggota tim
Mendorong kekompakan tim dengan memperjelas peran dan tanggung jawab setiap anggota tim serta mengingatkan kembali tujuan yang hendak dicapai',
            ),
            102 =>
            array (
                'id' => 107,
                'type' => '',
                'competency_id' => 5,
                'level' => 4,
                'level_description' => 'LEVEL 4',
                'description' => '<b>Menjelaskan data maupun situasi yang rumit/kompleks</b>
Membuat suatu ide atau konsep yang abstrak dan kompleks menjadi sederhana, jelas dan mudah dipahami
Memilah dan merangkum informasi, ide, masalah atau hasil pengamatan menjadi sebuah informasi yang jelas, bermanfaat dan komprehensif untuk mengidentifikasi pokok permasalahan
Menjelaskan kembali hasil pengamatan dan/atau pengetahuan yang diperoleh dengan cara sederhana
Menyimpulkan ide/permasalahan, meringkas informasi yang kompleks dan mengambil intisari dari sebuah informasi sehingga mudah dipahami orang awam
Melihat keterkaitan dari berbagai faktor dan mengidentifikasi bagian penting yang hilang dari suatu sistem/proses',
            ),
            103 =>
            array (
                'id' => 108,
                'type' => '',
                'competency_id' => 6,
                'level' => 4,
                'level_description' => 'LEVEL 4',
                'description' => '<b>Menetapkan skema kerja dan alokasi sumber daya secara optimal</b>
Menyediakan rekomendasi/solusi praktis untuk mengatasi kendala yang dapat berdampak pada efektivitas penggunaan sumber daya
Memastikan kinerja keuangan dan efisiensi tim serta memastikan penyelesaian pekerjaan sesuai anggaran
Mampu menyelaraskan tugas dan sumber daya sehingga menghasilkan output secara efektif & efisien
Mengelola prioritas untuk meningkatkan efisiensi serta memenuhi tuntutan kerja internal maupun eksternal',
            ),
            104 =>
            array (
                'id' => 109,
                'type' => '',
                'competency_id' => 7,
                'level' => 4,
                'level_description' => 'LEVEL 4',
                'description' => '<b>Meningkatkan standar kualitas dan level kepatuhan</b>
Menunjukkan perpektif yang menyeluruh terhadap cara kerja yang dilakukan dan mengambil tindakan untuk memastikan kepatuhan serta keteraturan proses kerja
Mengembangkan sistem yang dapat memantau hasil dan proses kerja secara berkelanjutan
Menginisiasi dan memperjuangkan upaya peningkatan standar kualitas
Merancang tata kelola perusahaan yang baik untuk memastikan kualitas dan standar operasional selalu terjaga
Mempromosikan program kepatuhan yang terintegrasi untuk meningkatkan level kepatuhan di seluruh organisasi',
            ),
            105 =>
            array (
                'id' => 110,
                'type' => '',
                'competency_id' => 8,
                'level' => 4,
                'level_description' => 'LEVEL 4',
                'description' => '<b>Mengatasi permasalahan mendasar dari konflik</b>
Melakukan pertemuan secara pribadi dengan pihak yang terlibat perselisihan dan membahas permasalahan kritis yang terjadi secara terbuka dan jujur
Memastikan pihak-pihak yang terlibat menerima proses mediasi untuk menyelesaikan permasalahan yang dapat berdampak lebih besar; 
Menerapkan perubahan yang diperlukan untuk memastikan permasalahan mendasar tersolusi.',
            ),
            106 =>
            array (
                'id' => 111,
                'type' => '',
                'competency_id' => 9,
                'level' => 4,
                'level_description' => 'LEVEL 4',
                'description' => '<b>Menerapkan pendekatan baru untuk melakukan perbaikan berdasarkan pengalaman sebelumnya</b>
Menerapkan pendekatan baru dengan mengimplementasikan ide yang diperoleh dari berbagai pengalaman sebelumnya, baik di dalam maupun luar area bisnis/industri untuk perbaikan.
Menerapkan pendekatan baru melalui penyesuaian pola pemikiran dengan tuntutan perubahan atau kendala eksternal yang tak terduga serta dapat memberikan nilai tambah.
Menerapkan pendekatan baru dengan menyesuaikan konsep, metode, atau ide yang telah digunakan di organisasi lain sebagai rujukan dalam melakukan perbaikan.',
            ),
            107 =>
            array (
                'id' => 112,
                'type' => '',
                'competency_id' => 10,
                'level' => 4,
                'level_description' => 'LEVEL 4',
                'description' => '<b>Meningkatkan layanan berdasarkan kebutuhan nyata pelanggan</b>
Memahami kebutuhan nyata pelanggan lebih dari sekedar apa yang diungkapkan oleh pelanggan.
Mengedukasi pelanggan terkait kebutuhan nyata mereka, yang dapat meningkatkan pengalaman dan kepuasan pelanggan secara signifikan.
Menciptakan dan menetapkan layanan/solusi baru di masa depan berdasarkan kebutuhan nyata pelanggan.',
            ),
            108 =>
            array (
                'id' => 113,
                'type' => '',
                'competency_id' => 11,
                'level' => 4,
                'level_description' => 'LEVEL 4',
                'description' => '<b>Memanfaatkan data yang menghasilkan analisa lebih tajam dan berdampak signifikan</b>
Menemukan pola dari sekumpulan data untuk menghasilkan analisa yang lebih tajam.
Menggunakan beberapa variabel dalam proses analisis data sehingga berdampak signifikan.
Melakukan analisis data secara komprehensif sehingga menghasilkan analisis data yang lengkap dan multi perspektif
Mampu menggabungkan beberapa data untuk meningkatkan pemahaman atau menghasilkan kesimpulan yang lebih tajam.',
            ),
            109 =>
            array (
                'id' => 114,
                'type' => '',
                'competency_id' => 12,
                'level' => 4,
                'level_description' => 'LEVEL 4',
                'description' => '<b>Membuat keputusan saat belum ada  kebijakan</b>
Membuat keputusan strategis dalam menghadapi ketidakpastian ketika belum ada kebijakan/peraturan terkait yang berlaku guna mendukung pencapaian kinerja bisnis.
Mempertimbangkan informasi komprehensif dari berbagai sumber sesuai prioritas, risiko, serta implikasi dalam pengambilan keputusan.
Membuat keputusan kunci (utama) dan mengantisipasi dampak resiko tinggi baik bagi pihak internal maupun eksternal serta mengambil tindakan untuk mengatasinya.',
            ),
            110 =>
            array (
                'id' => 115,
                'type' => '',
                'competency_id' => 13,
                'level' => 4,
                'level_description' => 'LEVEL 4',
                'description' => '<b>Mendorong keadilan dalam pengembangan talenta</b>
Mendorong keadilan dalam memperoleh kesempatan untuk proses pengembangan
Menyadari dan mengingatkan orang lain terkait subyektiftas berdasarkan latar belakang, gaya pribadi, karakteristik individu, etnis, pandangan politik, agama dll) serta dampaknya terhadap pengembangan talenta
Berkomitmen untuk menjaga dan memastikan prioritas keragaman dan pengembangan bakat yang sesuai dengan kebutuhan organisasi',
        ),
        111 =>
        array (
            'id' => 116,
            'type' => '',
            'competency_id' => 14,
            'level' => 4,
            'level_description' => 'LEVEL 4',
            'description' => '<b>Memastikan keterlibatan dan keterikatan pemangku kepentingan</b>
Membangun hubungan personal secara profesional dengan para pemangku kepentingan, menggunakan metode komunikasi serta pendekatan pribadi yang tepat untuk setiap kelompok pemangku kepentingan dan menyesuaikan praktiknya
Membangun hubungan yang produktif dan suportif, baik formal maupun informasl dengan para pemangku kepentingan
Menggunakan pemahaman pribadi untuk mengembangkan rencana pelibatan para pemangku kepentingan dengan memaksimalkan interaksi positif serta mempertimbangkan sudut pandang yang berbeda sehingga mampu mencapai hasil yang saling menguntungkan',
        ),
        112 =>
        array (
            'id' => 117,
            'type' => '',
            'competency_id' => 15,
            'level' => 4,
            'level_description' => 'LEVEL 4',
            'description' => '<b>Memengaruhi orang lain menggunakan pendekatan emosional</b>
Menyampaikan pesan yang menimbulkan perasaan nyaman sesuai nilai-nilai kepribadian individu. 
Menetapkan pendekatan tertentu ketika berbicara atau menyampaikan pesan/ide untuk memotivasi atau mengubah perilaku seseorang.
Memengaruhi orang lain dari berbagai perspektif sehingga mendapatkan buy in emosional.',
        ),
        113 =>
        array (
            'id' => 118,
            'type' => '',
            'competency_id' => 16,
            'level' => 4,
            'level_description' => 'LEVEL 4',
            'description' => '<b>Mengambil tindakan untuk peluang jangka menengah</b>
Mengantisipasi dan mengambil tindakan untuk menghindari potensi krisis
Menjadikan krisis sebagai suatu peluang/kesempatan
Mengejar peluang yang bisa direalisasikan dalam jangka menengah
Secara aktif mencari kesempatan untuk mencoba ide atau inisiatif baru',
        ),
        114 =>
        array (
            'id' => 119,
            'type' => '',
            'competency_id' => 17,
            'level' => 4,
            'level_description' => 'LEVEL 4',
            'description' => '<b>Menciptakan nilai</b> 
Menggali imajinasi atau “outside the box” untuk mengimplementasikan dan/atau mengembangkan solusi kreatif sehingga memberikan nilai tambah
Menciptakan pendekatan baru untuk berinovasi dengan mengeksplorasi berbagai perspektif sehingga memberikan nilai tambah
Merealisasikan pendekatan baru yang memberikan nilai tambah pada produk, layanan atau proses untuk mencapai tujuan',
        ),
        115 =>
        array (
            'id' => 120,
            'type' => '',
            'competency_id' => 18,
            'level' => 4,
            'level_description' => 'LEVEL 4',
            'description' => '<b>Melakukan penelitian resmi</b>
Melakukan upaya sistematis dalam jangka waktu terbatas untuk mendapatkan data atau umpan balik (feedback) yang dibutuhkan 
Melakukan upaya investigasi mendalam dari sumber yang tidak biasa
Melakukan penelitian resmi secara langsung atau melalui pihak lain',
        ),
        116 =>
        array (
            'id' => 121,
            'type' => '',
            'competency_id' => 19,
            'level' => 4,
            'level_description' => 'LEVEL 4',
            'description' => '<b>Memperkuat perubahan</b>
Mengembangkan rencana transisi yang efektif untuk menerapkan inisiatif perubahan
Menciptakan lingkungan yang dapat mendorong terjadinya perubahan dan perbaikan, termasuk memberdayakan karyawan untuk membuat keputusan, menoleransi kesalahan pada saat mencoba ide baru dengan risiko yang terukur
Menunjukkan nilai perubahan dalam berbagai ukuran/parameter
Mengatasi masalah kompleks terkait perubahan dan memastikan bahwa solusi yang dihasilkan, dipertimbangkan dan diterapkan sejalan dengan tujuan/strategi organisasi ',
        ),
        117 =>
        array (
            'id' => 122,
            'type' => '',
            'competency_id' => 20,
            'level' => 4,
            'level_description' => 'LEVEL 4',
            'description' => '<b>Memastikan pencapaian tujuan tim</b>
Memastikan kebutuhan praktis tim terpenuhi: mendapatkan personel, sumber daya, informasi yang diperlukan untuk tim
Mengatasi kendala dan masalah yang dapat menurunkan kinerja tim
Menyediakan atau mengamankan dukungan dan pengembangan yang dibutuhkan baik untuk individu maupun kepemimpinan sebagai tim ',
        ),
        118 =>
        array (
            'id' => 123,
            'type' => null,
            'competency_id' => 21,
            'level' => 4,
            'level_description' => 'LEVEL 4',
        'description' => 'Menetapkan tujuan jangka panjang untuk pengembangan diri  Menetapkan target untuk pengembangan pribadi jangka panjang Menelusuri perjalanan untuk program pengembangan individu Penuh gairah/semangat dan menunjukkan tekad yang tinggi untuk mencapai target dalam pengembangan diri Melakukan investasi diri yang besar (waktu, tenaga, uang) untuk mendukung pengembangan diri Membuat jaringan/asosiasi profesional sendiri yang terkait dengan keahliannya, untuk mendukung pengembangan diri ',
        ),
        119 =>
        array (
            'id' => 124,
            'type' => null,
            'competency_id' => 22,
            'level' => 4,
            'level_description' => 'LEVEL 4',
            'description' => 'Memanfaatkan jaringan untuk membangun kemitraan   Menggunakan jaringan untuk menemukan mitra usaha joint ventures, corporate citizenship atau kegiatan kolaboratif lintas organisasi lainnya Bertukar informasi yang sensitif dan strategis dengan tepat',
        ),
        120 =>
        array (
            'id' => 125,
            'type' => '',
            'competency_id' => 23,
            'level' => 4,
            'level_description' => 'LEVEL 4',
            'description' => '<b>Mempertahankan kinerja yang tinggi</b>
Meninjau kinerja tim berdasarkan standar atau target yang jelas
Menangani masalah kinerja secara tepat waktu dan meminta tindakan perbaikan sehingga target dapat selalu tercapai
Menciptakan lingkungan (sistem dan proses) yang mampu mendukung dan memotivasi karyawan untuk mempertahankan kinerja yang tinggi
Mengelola kolaborasi dan komunikasi di dalam tim atau antartim
Mengedepankan budaya kompetitif dalam tim',
        ),
        121 =>
        array (
            'id' => 126,
            'type' => null,
            'competency_id' => 24,
            'level' => 4,
            'level_description' => 'LEVEL 4',
        'description' => 'Memahami politik internal  Mengenali kekuatan yang sedang berlangsung dan hubungan politik dalam organisasi (aliansi, persaingan), dengan kepekaan akan dampak organisasi yang jelas Mempertimbangkan dimensi politik informal dari suatu situasi ketika meninjau suatu pendekatan Menggunakan pemahaman tentang perbedaan antara pemangku kepentingan yang senior di dalam organisasi untuk meningkatkan hubungan kerja  Menerjemahkan perubahan agenda politik menjadi suatu tindakan   ',
        ),
        122 =>
        array (
            'id' => 127,
            'type' => '',
            'competency_id' => 25,
            'level' => 4,
            'level_description' => 'LEVEL 4',
            'description' => '<b>Merencanakan dan mengimplementasikan pada cakupan lebih luas</b>
Mengembangkan dan menerapkan rencana kerja yang efektif untuk pekerjaan kompleks lintas fungsi dengan penggunaan sumber daya terbatas secara efisien
Mengantisipasi dengan menyiapkan penanganan masalah atau hambatan secara efektif 
Membuat tindakan alternatif beserta identifikasi implikasi dan resikonya pada cakupan yang lebih luas serta menjalankan tindakan alternatif tersebut jika diperlukan ',
        ),
        123 =>
        array (
            'id' => 128,
            'type' => '',
            'competency_id' => 26,
            'level' => 4,
            'level_description' => 'LEVEL 4',
        'description' => '<b>Mengatasi masalah yang multitafsir (ambigu)</b>
Memperjelas masalah yang ambigu, meninjau asumsi untuk mencapai pemahaman yang lebih lengkap tentang masalah tersebut
Mencari dan menggabungkan beragam perspektif dengan berpikir di luar masalah utama untuk menghasilkan solusi/strategi yang dapat diterapkan dalam menyelesaikan masalah multitafsir (ambigu)
Menyelesaikan masalah yang multitafsir (ambigu) dengan mempertimbangkan implikasi jangka panjang',
        ),
        124 =>
        array (
            'id' => 129,
            'type' => null,
            'competency_id' => 27,
            'level' => 4,
            'level_description' => 'LEVEL 4',
            'description' => 'Mendukung satu sama lain  Membangun pemahaman tentang kebutuhan dan tujuan bersama Mendorong dan memberdayakan orang lain, membuat mereka merasa kuat dan penting Memberikan bimbingan dan dukungan kepada anggota tim, anggota tim baru, atau tim lain untuk memfasilitasi pembelajaran dan pencapaian pekerjaan Secara objektif mewakili kebutuhan tim sendiri  baik dalam lintas fungsional atau tim itu sendiri',
        ),
        125 =>
        array (
            'id' => 130,
            'type' => '',
            'competency_id' => 28,
            'level' => 4,
            'level_description' => 'LEVEL 4',
            'description' => '<b>Melakukan modernisasi strategi dan operasi bisnis dengan memanfaatkan teknologi baru</b>
Memanfaatkan teknologi baru untuk menghadapi tantangan bisnis sehingga tetap menjadi yang terdepan
Mempertimbangkan teknologi dalam merumuskan strategi dan tujuan bisnis
Menggunakan teknologi baru dalam model bisnis perusahaan untuk memberikan sumber pendapatan baru, penghematan biaya atau eksplorasi peluang bisnis
',
        ),
        126 =>
        array (
            'id' => 131,
            'type' => '',
            'competency_id' => 29,
            'level' => 4,
            'level_description' => 'LEVEL 4',
            'description' => '<b>Mengembangkan strategi dari segi lintas fungsi atau kelompok bisnis</b> 
Mengantisipasi tren masa depan dalam lingkungan organisasi (pasar, demografi, pemerintah, industri, dll.) dan kebutuhan organisasi yang muncul guna merumuskan perencanaan strategis jangka panjang 
Menetapkan pengukuran kinerja strategis agar organisasi dapat terus memantau progress pencapaian implementasi strategi dan menyesuaikan strategi organisasi jika diperlukan
Menggabungkan ide-ide dan cara pendekatan baru yang mengarah pada perubahan besar dalam teknologi, model bisnis, model operasi, dan lain-lain yang digunakan organisasi',
        ),
        127 =>
        array (
            'id' => 132,
            'type' => '',
            'competency_id' => 1,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Bertahan di situasi/lingkungan baru</b>
Melebur/membaur dalam situasi baru yang ekstrim dengan menjadi teladan/role model bagi orang lain.
Bertahan di lingkungan baru dengan merespon perubahan secara ‘lincah’ dan menekankan manfaat beradaptasi untuk mencapai kesuksesan jangka panjang bagi organisasi.
Menyesuaikan diri dengan mengembangkan strategi baru untuk menanggapi perubahan besar di organisasi.',
        ),
        128 =>
        array (
            'id' => 133,
            'type' => '',
            'competency_id' => 2,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Menyempurnakan strategi guna meningkatkan efektivitas dalam mengantisipasi kondisi di masa depan</b>
Mengembangkan atau menyempurnakan strategi untuk menghadapi peluang serta resiko yang muncul di masa depan dengan lebih efektif dan efisien.
Menggunakan informasi yang sistematis dan komprehensif untuk memprediksi situasi masa depan serta mengembangkan visi yang dapat berdampak pada arah strategis perusahaan.
Menyusun rencana mitigasi untuk menghadapi risiko yang dapat berdampak luas bagi organisasi dan pemangku kepentingan di masa depan',
        ),
        129 =>
        array (
            'id' => 134,
            'type' => null,
            'competency_id' => 3,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => 'Mengoptimalkan program dan solusi untuk meningkatkan keuntungan bisnis  Mempelajari tren dan perubahan dalam lingkup sosial, politik, dan lingkungan bisnis secara luas untuk menangkap peluang serta mengenali risiko bisnis di masa depan Peka terhadap berbagai aspek permasalahan yang terkait ketika membuat keputusan maupun menetapkan strategi, serta tetap fokus untuk mencapai hasil yang diinginkan Mengajukan penawaran bisnis yang menarik kepada calon pelanggan dan mitra bisnis',
        ),
        130 =>
        array (
            'id' => 135,
            'type' => '',
            'competency_id' => 4,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Menciptakan engagement seluruh tim</b>
Memastikan komitmen seluruh tim terhadap progress dan objektif yang telah ditentukan
Menciptakan dan memastikan engagement seluruh anggota di setiap tim untuk mencapai tujuan 
Memastikan dukungan dan komitmen dari manajemen untuk pencapaian objektif setiap tim
Menginspirasi tim dari berbagai fungsi di internal perusahaan maupun antar perusahaan untuk mencapai tujuan strategis jangka panjang',
        ),
        131 =>
        array (
            'id' => 136,
            'type' => '',
            'competency_id' => 5,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Menciptakan konsep baru</b>
Menciptakan suatu konsep yang belum pernah dipahami dan belum pernah dipelajari pada jenjang pendidikan maupun dialami oleh orang lain, untuk menjelaskan situasi ataupun menyelesaikan masalah
Mampu melihat berbagai hal dengan cara pandang yang baru untuk membuat suatu terobosan
Mampu mengubah paradigma dan menciptakan konsep pemikiran baru
Berpikir mendalam untuk memahami akar permasalahan serta mampu melihat berbagai perspektif dalam mengambil kesimpulan',
        ),
        132 =>
        array (
            'id' => 137,
            'type' => '',
            'competency_id' => 6,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Menerapkan inisiatif strategis untuk memastikan keberlangsungan sumber daya</b>
Memastikan  penggunaan anggaran dan waktu penyelesaian pekerjaan terpenuhi sesuai target dengan memfasilitasi serta melakukan penilaian terhadap proses situasi, dan masalah, termasuk mengambil tindakan korektif sesuai kebutuhan 
Menetapkan anggaran dan struktur biaya yang dikelola, serta mendorong tim untuk mencapai efisiensi yang lebih baik
Mengevaluasi dampak finansial suatu keputusan dan mengembangkan strategi untuk menangani dampak tersebut
Memastikan organisasi mendapatkan dan menggunakan sumber daya secara seimbang, serta bertanggung jawab',
        ),
        133 =>
        array (
            'id' => 138,
            'type' => '',
            'competency_id' => 8,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Memitigasi potensi terjadinya konflik pada lingkup perusahaan</b>
Mengantisipasi dan menangani area yang berpotensi memunculkan kesalahpahaman serta perselisihan
Mengambil tindakan untuk menghindari/mengurangi potensi konflik (misalnya dengan mendorong atau mendukung berbagai pihak untuk mengatasi masalah)
Mencegah keresahan yang muncul  terkait isu-isu di perusahaan dengan melakukan penyelidikan dan mengambil tindakan yang sesuai
Menyelesaikan konflik dan mengelola respon perusahaan untuk penyelesaian permasalahan melalui proses konsensus',
        ),
        134 =>
        array (
            'id' => 139,
            'type' => '',
            'competency_id' => 9,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Menciptakan sistem untuk melakukan perbaikan secara berkelanjutan</b>.
Menciptakan/menemukan ide-ide yang dapat menjadi dasar dalam mengembangkan strategi bisnis baru.
Menciptakan sistem dan proses pemantauan untuk memastikan keberlanjutan proses perbaikan dalam organisasi.',
        ),
        135 =>
        array (
            'id' => 140,
            'type' => '',
            'competency_id' => 10,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Meningkatkan loyalitas pelanggan untuk bisnis yang berkelanjutan</b>
Memfokuskan perencanaan strategis perusahaan serta program-program kuncinya untuk meningkatkan loyalitas pelanggan berdasarkan data dan kebutuhan nyata pelanggan serta tren bisnis.
Menciptakan solusi/layanan yang lengkap, baru dan lebih baik untuk meningkatkan loyalitas pelanggan.
Menginisiasi lini bisnis baru atau berinvestasi dalam teknologi baru dengan risiko yang terukur serta memiliki potensi pendapatan/pengembalian tinggi untuk meningkatkan loyalitas pelanggan.',
        ),
        136 =>
        array (
            'id' => 141,
            'type' => '',
            'competency_id' => 12,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Membuat keputusan etis yang sejalan dengan filosofi/strategi bisnis</b>
Memastikan keputusan yang diambil sejalan dengan filosofi/strategi bisnis perusahaan dengan menggunakan prinsip, nilai, dan etika bisnis.
Membuat keputusan dengan mempertimbangkan kepentingan berbagai stakeholder.
Membuat keputusan strategis yang berisiko sangat tinggi namun memiliki dampak positif bagi kelangsungan bisnis untuk memenuhi kepentingan perusahaan dan stakeholder.
Memastikan dampak keputusan yang diambil bermanfaat bagi semua pihak.',
        ),
        137 =>
        array (
            'id' => 142,
            'type' => '',
            'competency_id' => 13,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Membangun kapabilitas untuk masa depan</b>
Menyelaraskan strategi organisasi dengan rencana pengembangan sumber daya manusia masa depan sehingga tercipta model bisnis, keterampilan, dan struktur pekerjaan yang sesuai.
Berkolaborasi dengan pemangku kepentingan (seperti perguruan tinggi, pemerintah dll.) untuk menyesuaikan metode pembelajaran dengan keahlian atau keterampilan yang dibutuhkan organisasi masa depan.
Merekrut atau bertukar talenta dari luar perusahaan atau industry untuk dapat menyiapkan talenta sesuai kebutuhan bisnis masa depan.',
        ),
        138 =>
        array (
            'id' => 143,
            'type' => '',
            'competency_id' => 14,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Menjamin keterlibatan dan dukungan jangka panjang dari para pemangku kepentingan</b>
Menyusun program pelibatan jangka panjang para pemangku kepentingan dan mengelola implementasinya
Membangun jaringan komprehensif yang mencakup berbagai pemangku kepentingan serta menghubungkan mereka untuk mendukung pencapaian tujuan bersama
Menginspirasi pemangku kepentingan untuk mendukung tujuan strategis dan operasional perusahaan secara lebih luas',
        ),
        139 =>
        array (
            'id' => 144,
            'type' => '',
            'competency_id' => 15,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Memengaruhi orang lain menggunakan strategi yang komprehensif/kompleks</b>
Mengidentifikasi pihak yang dapat memengaruhi pengambil keputusan dan membangun kepercayaan dengan pihak tersebut.
Membangun kredibilitas sehingga dapat meyakinkan pengambil keputusan melalui pihak lain
Mengumpulkan koalisi para pemangku kepentingan untuk mendukung agenda organisasi.
Menggunakan pemahaman mendalam dari interaksi di dalam koalisi untuk menggerakkan orang lain ke agenda tertentu.',
        ),
        140 =>
        array (
            'id' => 145,
            'type' => '',
            'competency_id' => 16,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Mengambil tindakan untuk peluang jangka panjang</b>
Menetapkan proses untuk dapat  mengidentifikasi peluang yang akan membuahkan hasil dalam jangka panjang
Menangani potensi ancaman atau krisis di masa depan sebelum orang lain melihatnya sebagai suatu masalah
Menciptakan peluang jangka panjang di masa depan',
        ),
        141 =>
        array (
            'id' => 146,
            'type' => '',
            'competency_id' => 17,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Menciptakan bisnis</b>
Mengintegrasikan konsep/model baru ke dalam visi yang tidak ada pada road map sebelumnya
Merealisasikan ide untuk membentuk kembali bisnis dalam jangka panjang
Memunculkan cara-cara baru yang mendasar untuk mendukung kemampuan organisasi dalam menjalankan strateginya
Menginspirasi orang untuk merancang produk, layanan, atau proses baru yang dapat memenuhi kebutuhan yang tidak terpenuhi',
        ),
        142 =>
        array (
            'id' => 147,
            'type' => '',
            'competency_id' => 18,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Membuat sistem pencarian data yang berkelanjutan</b>
Menetapkan sistem atau kebiasaan yang dilakukan rutin untuk mendapatkan informasi lebih detail, seperti: pola perjalanan, perilaku di sosial media, konsumsi makanan, akses internet atau memindai publikasi tertentu
Mengembangkan cara untuk menyelidiki masalah atau situasi saat dihadapkan pada sumber daya yang terbatas atau kurangnya informasi awal
Mengembangkan sistem penyelidikan yang dapat melakukan pencarian informasi/data secara digital',
        ),
        143 =>
        array (
            'id' => 148,
            'type' => '',
            'competency_id' => 19,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Menciptakan visi untuk perubahan</b>
Mengantisipasi kebutuhan atau perubahan organisasi di masa depan
Menciptakan visi dan strategi untuk perubahan yang sesuai dengan kebutuhan organisasi di masa depan
Menciptakan kepekaan terhadap krisis atau ketidakseimbangan guna mempersiapkan landasan bagi perubahan
Mengelola risiko terkait dengan perubahan melalui perencanaan kontingensi yang tepat, dibangun dari pengalaman perubahan sebelumnya',
        ),
        144 =>
        array (
            'id' => 149,
            'type' => '',
            'competency_id' => 20,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Menetapkan budaya dan norma yang diinginkan</b>
Menetapkan aturan terkait perilaku tim (“rules of engagement”) sesuai metode kerja tim
Memberikan contoh yang baik dengan menunjukkan perilaku yang diinginkan (menjadi role model)
Mengambil tindakan untuk memastikan anggota tim setuju dengan misi, tujuan, agenda, dan kebijakan yang ditetapkan
Memberikan reward atau punishment kepada anggota tim yang mematuhi atau melanggar aturan tersebut ',
        ),
        145 =>
        array (
            'id' => 150,
            'type' => null,
            'competency_id' => 22,
            'level' => 5,
            'level_description' => 'LEVEL 5',
        'description' => 'Memanfaatkan jaringan untuk membentuk lingkungan bisnis  Menggunakan hubungan dengan key people dalam jaringan untuk membentuk lingkungan kerja eksternal (misalnya yang berdampak pada industri, undang-undang, standar, dll.) Mengambil peran kepemimpinan dalam organisasi di industri dengan tujuan membentuk industri  ',
        ),
        146 =>
        array (
            'id' => 151,
            'type' => '',
            'competency_id' => 23,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Mendorong kinerja tinggi yang berkelanjutan</b>
Membangun sistem yang dapat memastikan kinerja organisasi yang tinggi meskipun terjadi perubahan, situasi krisis atau situasi yang tidak biasa
Mengantisipasi dampak krisis atau perubahan situasi dalam organisasi (contohnya, kehilangan sumber daya, pergantian pemimpin, penggabungan unit kerja) untuk memastikan kinerja organisasi tetap tinggi ',
        ),
        147 =>
        array (
            'id' => 152,
            'type' => null,
            'competency_id' => 24,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => 'Memiliki wawasan organisasi yang dalam dan luas   Memahami alasan atau sejarah dibalik keputusan dan praktik, serta mempertimbangkan hal tersebut saat akan memutuskan suatu tindakan Memahami dan mengatasi alasan yang mendasari perilaku organisasi saat ini Memahami konteks sosial, ekonomi, dan politik yang lebih luas  yang dapat memperngaruhi organisasi  Mengantisipasi dan menanggapi tekanan politik secara tepat dan profesional, yang membangkitkan keyakinan dan kepercayaan dari pemangku kepentingan senior',
        ),
        148 =>
        array (
            'id' => 153,
            'type' => '',
            'competency_id' => 25,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Merencanakan dan mengelola pekerjaan strategis dengan mempertimbangkan kepentingan stakeholder</b>
Merencanakan dan menjalankan pekerjaan yang sangat kompleks, yang melibatkan kepentingan internal dan eksternal
Mengambil keputusan strategis dan tepat waktu dengan mempertimbangkan kepentingan seluruh stakeholder
Mengoptimalkan pemanfaatan sumber daya dari internal dan eksternal untuk menyelesaikan pekerjaan tepat waktu',
        ),
        149 =>
        array (
            'id' => 154,
            'type' => '',
            'competency_id' => 26,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Menyelesaikan masalah multidimensi atau kompleks</b>
Menggunakan beberapa teknik analisis untuk menemukan akar permasalahan dan memecahkan masalah yang multidimensi atau kompleks 
Mengembangkan solusi multi-tier (bertingkat) untuk masalah multidimensi atau kompleks termasuk masalah yang belum pernah terjadi sebelumnya
Menyelesaikan masalah multidimensi atau kompleks dengan menerapkan rencana perbaikan untuk memulihkan kerusakan/kerugian atau ketidakstabilan yang ditimbulkan',
        ),
        150 =>
        array (
            'id' => 155,
            'type' => null,
            'competency_id' => 27,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => 'Mempertahankan komitmen tim  Bertindak untuk menyatukan tim dengan mempromosikan iklim kerja yang bersahabat, moral yang baik, dan bekerja sama  Bekerja untuk menyelesaikan konflik, berkonsultasi dengan yang lain, dan menjaga objektivitas saat menangani masalah Memperjelas norma dan ekspektasi perilaku lainnya dalam tim Mengelola proses grup untuk meningkatkan transparansi ',
        ),
        151 =>
        array (
            'id' => 156,
            'type' => '',
            'competency_id' => 28,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Mengarahkan transformasi teknologi</b>
Mengembangkan visi agar teknologi dapat mendukung dan mendorong pertumbuhan bisnis organisasi ke depan
Mendorong penggunaan teknologi dan penerapan budaya digital pada semua proses dan fungsi di organisasi 
Mengarahkan transformasi teknologi dengan cara menyusun strategi implementasi yang tepat dan akurat sehingga organisasi mendapatkan impact bisnis yang maksimal.',
        ),
        152 =>
        array (
            'id' => 157,
            'type' => '',
            'competency_id' => 29,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Menciptakan bisnis yang bermanfaat bagi bangsa</b>
Mengantisipasi perubahan dalam lanskap bisnis dan demografi melalui perumusan tujuan, implementasi dan prioritas stategis organisasi yang menciptakan manfaat bagi bangsa
Merancang pendekatan dan prosedur yang melibatkan berbagai pemangku kepentingan untuk mengembangkan rencana strategis yang mendukung tujuan pembangunan nasional
Mempertimbangkan implikasi jangka panjang dari strategi organisasi dan memberikan usulan yang paling bermanfaat bagi organisasi dan bangsa
Membangun kerjasama dengan stakeholder nasional untuk mengembangkan dan mengumpulkan dukungan dalam menjalankan program bersama yang bermanfaat bagi bangsa',
        ),
        153 =>
        array (
            'id' => 158,
            'type' => 'DIGITAL CULTURE',
            'competency_id' => null,
            'level' => 1,
            'level_description' => 'TIDAK PERNAH',
            'description' => 'TIDAK PERNAH',
        ),
        154 =>
        array (
            'id' => 159,
            'type' => 'DIGITAL CULTURE',
            'competency_id' => null,
            'level' => 2,
            'level_description' => 'JARANG',
            'description' => 'JARANG',
        ),
        155 =>
        array (
            'id' => 160,
            'type' => 'DIGITAL CULTURE',
            'competency_id' => null,
            'level' => 3,
            'level_description' => 'SERING',
            'description' => 'SERING',
        ),
        156 =>
        array (
            'id' => 161,
            'type' => 'DIGITAL CULTURE',
            'competency_id' => null,
            'level' => 4,
            'level_description' => 'SELALU',
            'description' => 'SELALU',
        ),
        157 =>
        array (
            'id' => 163,
            'type' => '',
            'competency_id' => 331,
            'level' => 1,
            'level_description' => 'LEVEL 1',
            'description' => '<b>Memahami dasar-dasar bisnis</b>
Menunjukkan minat untuk memahami dasar-dasar bisnis yang terkait dengan peran pekerjaannya sendiri dan dampaknya terhadap perusahaan
Memahami kebijakan dan prosedur yang relevan serta mengetahui sumber referensi yang tepat untuk mendapatkannya
Berupaya memahami dan mengklarifikasi tujuan serta sasaran umum yang ingin dicapai oleh perusahaan',
        ),
        158 =>
        array (
            'id' => 164,
            'type' => '',
            'competency_id' => 331,
            'level' => 2,
            'level_description' => 'LEVEL 2',
            'description' => '<b>Mengaitkan pekerjaan diri sendiri dengan bisnis</b>
Memahami aspek bisnis termasuk aspek finansial pada area pekerjaan sendiri
Memahami dampak pekerjaan yang dilakukan terhadap fungsi kerja lain di organisasi, pelanggan serta pemangku kepentingan
Berusaha untuk mempelajari aspek bisnis di fungsi kerja lain yang terkait ',
        ),
        159 =>
        array (
            'id' => 165,
            'type' => '',
            'competency_id' => 331,
            'level' => 3,
            'level_description' => 'LEVEL 3',
            'description' => '<b>Berorientasi pada bisnis dalam bertindak</b>
Mengetahui diferensiasi yang dimiliki perusahaan dengan pesaing di industri sejenis dan nilai tambah yang ditawarkan perusahaan kepada pelanggan
Menyeimbangkan pendapatan dan kontrol biaya ketika menetapkan target atau membuat keputusan
Menginisiasi tindakan untuk mengatasi permasalahan unit yang berdampak pada bisnis organisasi
Secara aktif mencari umpan balik atau masukan dari pelanggan/pemangku kepentingan terkait implementasi strategi untuk meningkatkan kinerja bisnis',
        ),
        160 =>
        array (
            'id' => 166,
            'type' => '',
            'competency_id' => 331,
            'level' => 4,
            'level_description' => 'LEVEL 4',
            'description' => '<b>Memanfaatkan peluang dan solusi bisnis</b>
Memanfaatkan peluang bisnis yang tersedia
Menyadari munculnya kompetitor dan/atau risiko terkait serta mengambil tindakan yang diperlukan
Memahami perspektif pelanggan dan/atau pemangku kepentingan terhadap program/layanan dari segi biaya/manfaat
Memanfaatkan analisis cost-benefit untuk memahami implikasi finansial dari skenario bisnis dan keuangan pada saat merancang dan menerapkan program',
        ),
        161 =>
        array (
            'id' => 167,
            'type' => '',
            'competency_id' => 331,
            'level' => 5,
            'level_description' => 'LEVEL 5',
            'description' => '<b>Mengoptimalkan program dan solusi untuk meningkatkan keuntungan bisnis</b>
Mempelajari tren dan perubahan dalam lingkup sosial, politik, dan lingkungan bisnis secara luas untuk menangkap peluang serta mengenali risiko bisnis di masa depan
Peka terhadap berbagai aspek permasalahan yang terkait ketika membuat keputusan dan menetapkan strategi serta tetap fokus untuk mencapai hasil yang diinginkan
Mengajukan penawaran bisnis yang menarik kepada calon mitra bisnis',
        ),
        162 =>
        array (
            'id' => 168,
            'type' => '',
            'competency_id' => 332,
            'level' => 1,
            'level_description' => 'LEVEL 1',
            'description' => '<b>Berorientasi pada pengembangan diri terkait dengan pekerjaannya</b>
Menunjukkan rasa ingin tahu terhadap pengetahuan dan ketrampilan pada pekerjaannya
Menunjukkan upaya untuk meningkatkan kapasitas dan kapabilitas diri
Mengikuti informasi, alat, metode, teknologi dan perkembangan baru di bidang keahliannya yang berguna untuk pekerjaannya (misalnya dengan membaca, belajar dari orang lain atau dengan mengikuti pelatihan)
Menerapkan pengetahuan dan keterampilan baru di dalam pekerjaannya',
        ),
        163 =>
        array (
            'id' => 169,
            'type' => '',
            'competency_id' => 332,
            'level' => 2,
            'level_description' => 'LEVEL 2',
            'description' => '<b>Melakukan penilaian diri dan menetapkan target pengembangan</b>
Melakukan penilaian pribadi (self evaluation) terhadap kinerja diri untuk memahami pengalaman positif, kemunduran dan kesenjangan (gap) yang dibutuhkan dalam pengembangan diri
Secara aktif mencari umpan balik (feedback) dari orang lain termasuk kolega dan manajer untuk mengetahui kekuatan dan kelemahan yang dimiliki
Mengintegrasikan hasil penilaian pribadi dan umpan balik (feedback) ke dalam target pengembangan
Mengenali peluang (potensial) untuk pengembangan diri dalam karir',
        ),
        164 =>
        array (
            'id' => 170,
            'type' => '',
            'competency_id' => 332,
            'level' => 3,
            'level_description' => 'LEVEL 3',
            'description' => '<b>Menggunakan pendekatan sistematis untuk proses pengembangan diri</b>
Bergabung dengan organisasi profesi yang terkait dengan keahliannya
Merencanakan cara pengembangan diri secara sistematis untuk meningkatkan kapabilitas (menetapkan tujuan/target pembelajaran, timeline) jangka pendek
Mengatur dan mengidentifikasi sumber daya (waktu, anggaran, jaringan, dll.), alat atau metode khusus untuk mendukung pengembangan diri
Meningkatkan keahlian/spesialisasinya melalui sertifikasi keahlian',
        ),
        165 =>
        array (
            'id' => 171,
            'type' => '',
            'competency_id' => 332,
            'level' => 4,
            'level_description' => 'LEVEL 4',
            'description' => '<b>Menetapkan pengembangan diri jangka panjang</b>
Merencanakan cara pengembangan diri secara sistematis untuk meningkatkan kapabilitas (menetapkan tujuan/target pembelajaran, timeline) jangka panjang
Melakukan investasi pengembangan diri dengan usaha yang besar (waktu, tenaga, pikiran, materi) 
Memberikan inspirasi kepada orang lain dengan menjadi pembicara pada seminar, training dll.
Membuat atau mengembangkan jaringan/asosiasi organisai profesi secara mandiri yang terkait dengan keahliannya, untuk mendukung pengembangan diri ',
        ),
        166 =>
        array (
            'id' => 172,
            'type' => '',
            'competency_id' => 340,
            'level' => 1,
            'level_description' => 'Tidak Pernah',
            'description' => '',
        ),
        167 =>
        array (
            'id' => 173,
            'type' => '',
            'competency_id' => 340,
            'level' => 2,
            'level_description' => 'Jarang',
            'description' => '',
        ),
        168 =>
        array (
            'id' => 174,
            'type' => '',
            'competency_id' => 340,
            'level' => 3,
            'level_description' => 'Sering',
            'description' => '',
        ),
        169 =>
        array (
            'id' => 175,
            'type' => '',
            'competency_id' => 340,
            'level' => 4,
            'level_description' => 'Selalu',
            'description' => '',
        ),
        ));
    }
}
