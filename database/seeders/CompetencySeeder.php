<?php

namespace Database\Seeders;

use App\Models\Competency;
use Illuminate\Database\Seeder;

class CompetencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $competencies = [
            //General Knowledge
            [
                "name" => "Business Strategy Fundamentals",
                "description" => "Pengetahuan dan pemahaman terhadap detail arahan serta strategi bisnis perusahaan secara keseluruhan (Corporate Strategic Plan), baik jangka panjang, menengah, maupun pendek",
                "is_general_knowledge" => 1,
                "job_family_id" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Process Fundamentals",
                "description" => "Pengetahuan dan pemahaman terhadap keseluruhan proses bisnis yang berlaku di dalam perusahaan, termasuk framework yang digunakan (e.g., eTom, ITIL, dll.) serta keterkaitan proses bisnis tersebut dengan tugas & tanggung jawab setiap fungsi dan/atau antar unit kerja",
                "is_general_knowledge" => 1,
                "job_family_id" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Knowledge",
                "description" => "Pengetahuan dan pemahaman terhadap lingkungan, dinamika, kondisi bisnis (domestik, regional, maupun global), tren industri bisnis saat ini & akan datang, kompetitor, partner strategis, hingga preferensi, permintaan, karakteristik & perilaku customer, guna memperoleh pemahaman yang komprehensif atas bisnis korporasi",
                "is_general_knowledge" => 1,
                "job_family_id" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Literacy",
                "description" => "Pengetahuan dan pemahaman dalam menggunakan teknologi informasi & komunikasi digital (e.g., internet platforms, social media, mobile devices, dll.) guna mengevaluasi, menyusun, dan mengkomunikasikan suatu informasi, dimana kompetensi ini membutuhkan sejumlah set kompetensi lain, meliputi critical thinking, online safety, cultural & social understanding, collaboration, finding information, communication skills, serta basic computer skil",
                "is_general_knowledge" => 1,
                "job_family_id" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Administration Management Fundamentals",
                "description" => "Pengetahuan dan pemahaman menyeluruh terkait prosedur dan sistem administrasi dokumen serta administrasi operasional, termasuk surat menyurat, pengarsipan, pengorganisasian, penggandaan, pemusnahan, dan kegiatan administrasi lainnya yang mendukung kegiatan bisnis perusahaan",
                "is_general_knowledge" => 1,
                "job_family_id" => 2,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Product/Service Knowledge",
                "description" => "Pengetahuan dan pemahaman terhadap varian/jenis product/services, keseluruhan fitur, kegunaan, penerapan, serta informasi/syarat pendukung lain (e.g., tata cara pengajuan, siapa saja yang dapat mengajukan/memiliki, dll.), termasuk mengikuti perkembangan informasi terkait product/services Telkomsel secara mendetail",
                "is_general_knowledge" => 1,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Games Product Knowledge",
                "description" => "Pengetahuan dan pemahaman terkait tren & kebutuhan pasar terhadap jenis/variasi genre, spesifikasi, sistem, fitur (e.g., grafik, audio, dll.), syarat-syarat penggunaan (e.g., batasan usia, in-app-purchases, dll.) dari sebuah game, serta kepekaan terhadap perubahan dan/atau perkembangan aspek-aspek dalam game tersebut (e.g., event games yang digemari, dll.), termasuk ketentuan/aturan/regulasi hukum yang mengatur bisnis game, hingga penawaran-penawaran yang diberikan kompetitor kepada pelanggan/end-user (e.g., paket pembelian item, dll.)",
                "is_general_knowledge" => 1,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Video Product Knowledge",
                "description" => "Pengetahuan dan pemahaman terkait tren & kebutuhan pasar terhadap jenis tontonan video (e.g., drama, movie, serial TV, dll.), persyaratan untuk menonton (e.g., batasan usia,wilayah, dll.), serta kepekaan terhadap perubahan dan/atau perkembangan tren tontonan video, termasuk ketentuan/aturan/regulasi hukum yang mengatur bisnis video, platform yang sering digunakan & paling berpengaruh bagi masyarakat, hingga penawaran-penawaran yang diberikan kompetitor kepada pelanggan/end-user (e.g., subscribe, paket streaming video, membership, freemium, dll.)",
                "is_general_knowledge" => 1,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Music Product Knowledge",
                "description" => "Pengetahuan dan pemahaman terkait tren & kebutuhan pasar terhadap jenis/variasi genre musik (e.g., hip hop, rock, dll.), persyaratan penggunaan paket/aplikasi musik (e.g., batasan usia, wilayah, dll.), serta kepekaan terhadap perubahan dan/atau perkembangan tren lagu/musik terpopuler di tangga musik nasional maupun internasional, termasuk ketentuan/aturan/regulasi hukum yang mengatur bisnis musik, platform yang sering digunakan & paling berpengaruh bagi masyarakat (e.g, LangitMusik, Spotify, JOOX, Smule, Resso, Svara, Deezer, dll.), hingga penawaran-penawaran yang diberikan kompetitor kepada pelanggan/end-user (e.g., subscribe, Pay As You Go membership, paket streaming musik, freemium, dll.)",
                "is_general_knowledge" => 1,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "VAS Product Knowledge",
                "description" => "Pengetahuan dan pemahaman terkait tren & kebutuhan pasar terhadap layanan dukungan komunikasi (e.g., transfer pulsa, collect SMS, berbagi kuota, personal ring back tone, dll.), serta kepekaan terhadap perubahan dan/atau perkembangan konten layanan dukungan komunikasi (standar/premium), termasuk ketentuan/aturan/regulasi hukum yang terkait, penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan konten layanan yang digemari dan/atau untuk memenuhi kebutuhan pelanggan/end-user",
                "is_general_knowledge" => 1,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Legacy Product (Prepaid & Post-Paid) Knowledge",
                "description" => "Pengetahuan dan pemahaman terkait tren & kebutuhan pasar terhadap produk prepaid & post-paid, yang meliputi prosedur aktivasi, policies, terms & conditions, tarif, keseluruhan fitur-fitur layanan (e.g., discount, usage detail, prepaid and postpaid subscription plan, dll.), skenario billing process prepaid & post-paid, serta macam-macam perkembangan tren billing process saat ini maupun yang akan datang (e.g., Authenticating, Authorizing, dll.), termasuk ketentuan/aturan/regulasi hukum yang terkait, hingga penawaran-penawaran yang diberikan kompetitor kepada pelanggan/end-user (e.g., diskon telpon, bundling sms, dll.)",
                "is_general_knowledge" => 1,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Banking Solution Knowledge",
                "description" => "Pengetahuan dan pemahaman terkait tren & kebutuhan enterprise terhadap layanan keuangan berbasis digital (e.g., money deposits, withdrawals, transfers checking/saving account management, bill pay, dll.), serta kepekaan terhadap perubahan dan/atau perkembangan layanan keuangan berbasis digital, termasuk ketentuan/aturan/regulasi hukum yang terkait, platform yang sering digunakan & paling berpengaruh, penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan layanan yang mampu memberikan kemudahan bertransaksi & manfaat bagi perusahaan/klien",
                "is_general_knowledge" => 1,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Advertising Solution Knowledge",
                "description" => "Pengetahuan dan pemahaman terkait tren & perkembangan kebutuhan enterprise terhadap solusi pemasaran produk/layanan melalui platform digital (e.g., social media, digital media, dll.), serta kepekaan terhadap perubahan dan/atau perkembangan layanan/solusi pemasaran produk/layanan, termasuk ketentuan/aturan/regulasi hukum yang terkait, platform yang sering digunakan & paling berpengaruh, penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan solusi yang mampu memberikan manfaat bagi perusahaan/klien untuk melaksanakan aktivitas pemasaran berbasis digital",
                "is_general_knowledge" => 1,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IoT Solution Knowledge",
                "description" => "Pengetahuan dan pemahaman terkait tren & kebutuhan enterprise, keseluruhan fitur- fitur layanan (e.g., monitoring, organizing, dll.), pertimbangan dalam mendesain produk IoT, yang meliputi kondisi lingkungan, tipe sensor yang akan digunakan, volume data yang akan dikumpulkan, kebutuhan power, range, dan speed dalam desain perangkat, serta biaya unit perangkat dan total biaya ownership, keunggulan layanan, termasuk ketentuan/aturan/regulasi hukum yang terkait (e.g., standarisasi frekuensi, perangkat, TKDN, dll.), penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan layanan yang mampu memberikan manfaat bagi perusahaan/klien",
                "is_general_knowledge" => 1,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Fleet Solution Knowledge",
                "description" => "Pengetahuan dan pemahaman terkait tren & kebutuhan enterprise terhadap solusi pemantauan logistik, transportasi & kendaraan operasional (e.g., mobil, kapal, van, truk, bus, dll.), serta kepekaan terhadap keunggulan, perubahan, dan/atau perkembangan fitur layanannya, termasuk ketentuan/aturan/regulasi hukum yang terkait, penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan fitur-fitur layanan yang mampu memberikan kemudahan, manfaat, meningkatkan efisiensi & evaluasi kinerja bagi perusahaan/klien",
                "is_general_knowledge" => 1,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Mobility Solution Knowledge",
                "description" => "Pengetahuan dan pemahaman terkait tren & kebutuhan enterprise, keseluruhan fitur-fitur layanan (e.g., Mobile device management, dll.), memahami end-user point of view (e.g., develop mobile apps, facilitate BYOD, make mobile-ready business platforms, dll.), platform selection, serta kepekaan terhadap keunggulan, perubahan, dan/atau perkembangan teknologi, baik smartphone maupun perangkat lainnya, termasuk ketentuan/aturan/regulasi hukum yang terkait, penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan fitur-fitur layanan yang mampu memberikan kemudahan (mobile), manfaat, meningkatkan efisiensi & evaluasi kinerja bagi perusahaan/klien",
                "is_general_knowledge" => 1,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Cloud Solution Knowledge",
                "description" => "Pengetahuan dan pemahaman terkait tren & kebutuhan enterprise, keseluruhan fitur-fitur layanan komputasi berbasis internet (e.g., storage, database, public, private, hybrid dll.), serta kepekaan terhadap keunggulan, perubahan, persyaratan keamanan & kepatuhan yang dibutuhkan, dan/atau perkembangan layanan, termasuk ketentuan/aturan/regulasi hukum yang terkait, penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan fitur-fitur layanan yang mampu memberikan kemudahan & manfaat bagi perusahaan/klien",
                "is_general_knowledge" => 1,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Security Solution Knowledge",
                "description" => "Pengetahuan dan pemahaman terkait tren & kebutuhan enterprise terhadap solusi terkait privasi & keamanan, keunggulan, jenis solusi keamanan (e.g., firewall protection, security information, dll.), serta kepekaan terhadap keunggulan, keseluruhan fitur & layanannya (e.g., malware, spyware, VPN, dll.), dan/atau perkembangan layanan, termasuk ketentuan/aturan/regulasi hukum yang terkait, penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan fitur-fitur layanan yang mampu memberikan kemudahan & manfaat bagi perusahaan/klien",
                "is_general_knowledge" => 1,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Solution Knowledge",
                "description" => "Pengetahuan dan pemahaman terkait tipe & karakteristik data, fungsi (e.g., pencapaian data availability, governance, security, centralization, dll.), tren & kebutuhan enterprise terhadap solusi penunjang pengelolaan data, serta kepekaan terhadap keunggulan, perubahan/perkembangan layanan, termasuk ketentuan/aturan/regulasi hukum yang terkait, penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan fitur-fitur layanan yang mampu memberikan kemudahan & manfaat bagi perusahaan/klien untuk melakukan pengelolaan data di perusahaan",
                "is_general_knowledge" => 1,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Marketing Fundamentals",
                "description" => "Pengetahuan dan pemahaman terkait konsep, strategi, kerangka, serta unsur-unsur yang terkandung dalam model marketing mix (Product, Place, Price, Promotion, People, Process, Physical Evidence, dll.), termasuk mengikuti perkembangan model marketing mix tersebut",
                "is_general_knowledge" => 1,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Sales Fundamentals",
                "description" => "Pengetahuan dan pemahaman terkait prinsip, metode, serta teknik-teknik untuk menjual suatu produk/jasa, mencakup di dalamnya strategi & target penjualan, pelaksanaan demonstrasi produk, hingga pengelolaan proses monitoring & kontrol kegiatan penjualan",
                "is_general_knowledge" => 1,
                "job_family_id" => 4,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Telecoms Billing Fundamentals",
                "description" => "Pengetahuan dan pemahaman tentang prinsip, sistem, pelayanan, serta end-to-end billing process (e.g., roaming, interconnection, TAP, prepaid, postpaid, dll.), termasuk proses mediasi, rating, tarif, manajemen akses, manajemen issue, negosiasi, settlement, serta penanganan complain handling dari pelanggan",
                "is_general_knowledge" => 1,
                "job_family_id" => 4,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Customer Services Fundamentals",
                "description" => "Pengetahuan dan pemahaman terkait prinsip & proses pemberian jasa/layanan kepada pelanggan, yang meliputi wawasan akan customer needs assessment, standar kualitas pelayanan, serta evaluasi kepuasan pelanggan",
                "is_general_knowledge" => 1,
                "job_family_id" => 4,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IT Architecture Fundamentals",
                "description" => "Pengetahuan dan pemahaman terhadap desain, konsep, roadmap serta strategi jangka panjang IT, termasuk arahan terkait pengembangan solusi yang tepat bagi keberlangsungan bisnis perusahaan",
                "is_general_knowledge" => 1,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Cloud Computing Fundamentals",
                "description" => "Pengetahuan dan pemahaman terhadap konsep dasar, arsitektur, fitur, model, layanan, infrastruktur, serta tata cara mengimplementasikan cloud secara tepat, sesuai dengan kebutuhan bisnis perusahaan",
                "is_general_knowledge" => 1,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "ICT Network Fundamentals",
                "description" => "Pengetahuan dan pemahaman tentang konsep fundamental, sistem, protokol, hingga komponen/elemen network (core, radio, transport, serta komponen/elemen lainnya) dan IT yang terkait dengan pengelolaan network (Software Define Network, Service platform, dll) yang dibutuhkan di perusahaan",
                "is_general_knowledge" => 1,
                "job_family_id" => 6,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Network Architecture Fundamentals",
                "description" => "Pengetahuan dan pemahaman terhadap desain, konsep, roadmap, kerangka/rancang bangun, serta arahan strategis terkait pengelolaan network perusahaan yang tepat bagi keberlangsungan bisnis perusahaan",
                "is_general_knowledge" => 1,
                "job_family_id" => 6,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Management Fundamentals",
                "description" => "Pengetahuan dan pemahaman terhadap landasan serta konsep-konsep pengelolaan data sebagaimana tertuang dalam DAMA Body of Knowledge (DMBoK), meliputi tata cara pengaturan, pencarian, pengurutan, hingga pendefinisian data menjadi informasi yang optimal & efisien",
                "is_general_knowledge" => 1,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Project Management Fundamentals",
                "description" => "Pengetahuan dan pemahaman tentang konsep, standar, istilah, dan life cycle dalam manajemen proyek, termasuk pengetahuan terkait menentukan kebutuhan sumber daya, sistem komunikasi, workflow, project phases, project plan, project charter, serta tata cara dan tools yang dibutuhkan dalam mengukur kemajuan saat proyek berjalan",
                "is_general_knowledge" => 1,
                "job_family_id" => 8,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Agile Project Management Fundamentals",
                "description" => "Pengetahuan dan pemahaman tentang konsep dasar, metodologi, ruang lingkup, tahapan detail pelaksanaan, serta teknik/tools, untuk merancang, memonitor, mengevaluasi, serta meningkatkan efektivitas dan efisiensi setiap tahapan proyek berbasis agile",
                "is_general_knowledge" => 1,
                "job_family_id" => 8,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Supply Chain Management Fundamentals",
                "description" => "Pengetahuan dan pemahaman terkait siklus pengelolaan rantai pasok, yang terdiri dari proses pengadaan, pengelolaan supplier/vendor, optimalisasi kegiatan produksi (dari raw material hingga menjadi suatu produk), proses penerimaan dan pengiriman/distribusi produk, serta kegiatan inventori",
                "is_general_knowledge" => 1,
                "job_family_id" => 9,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Human Resources Management Fundamentals",
                "description" => "Pengetahuan dan pemahaman terkait keseluruhan proses pengelolaan sumber daya manusia, meliputi kebijakan, aturan, serta penerapan kegiatan perencanaan SDM, penyusunan desain organisasi, perekrutan, pelatihan & pengembangan, performance evaluation, career management, competency (behaviour & technical), rewards/recognition, hubungan tenaga kerja/industrial, hingga employee experience",
                "is_general_knowledge" => 1,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Finance and Accounting Fundamentals",
                "description" => "Pengetahuan dan pemahaman tentang seluruh prinsip & konsep keuangan meliputi budgets, investing, banking, financial products, interest and compounding, financial regulations and resource, financial statement (balance sheet, income statement & cash flow statement), financial metrics yang diantaranya; ROI, IRR, WACC, Profit & Loss, istilah dalam akuntansi termasuk pendapatan (revenue), biaya (expenses), assets & kewajiban (liabilities), equity/net worth, value generation dan value consumption, serta kepekaan terhadap tren, perubahan dan/atau perkembangan tentang topik keuangan",
                "is_general_knowledge" => 1,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Taxation Fundamentals",
                "description" => "Pengetahuan dan pemahaman perusahaan sebagai wajib pajak (batas waktu pembayaran, penyetoran, dan pelaporan pajak), asas-asas pemungutan & pengenaan pajak, jenis-jenis pajak (PPh, PPN, dll.), istilah umum perpajakan, serta hal-hal mengenai administrasi pajak lainnya sebagai kepentingan dan jalannya bisnis perusahaan",
                "is_general_knowledge" => 1,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Legal Fundamentals --> Legal Fundamental : Civil, Criminal, Telecoms, Land (Agrarian), ITE, Consumer, Arbitriation, Partnership, etc",
                "description" => "Pengetahuan dan pemahaman tentang hirarki, struktur, subjek hukum, sumber hukum (material dan formal), asas-asas, peraturan & norma hukum yang berlaku, apa saja hal yang dapat dihukum (tindak, perbuatan, peristiwa, ataupun delik), hak dan tanggung jawab dalam hukum, tata cara mengatasi, memastikan, dan mencegah masalah/pelanggaran hukum termasuk kewajiban dan perizinan yang harus dipenuhi, paham akan bagaimana dan dimana mencari sumber daya atau informasi hukum, serta kepekaan terhadap perubahan dan/atau perkembangan tentang hukum",
                "is_general_knowledge" => 1,
                "job_family_id" => 12,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Corporate Law --> terkait corporate matters --> Corporate Law : Merger & Acquisition, Affililation, Invesment, Company, Bankrupcty, Anti Bribery, etc tambahin definisi",
                "description" => "Pengetahuan dan pemahaman tentang jenis-jenis & kegiatan badan usaha (e.g., CV, PT, Perum, Perseroan, dll.), dasar hukum perusahaan, tugas dan kewajiban perusahaan (termasuk pelaporan perusahaan yang diatur oleh undang-undang, perizinan/license sebagai syarat keberlangsungan bisnis perusahaan), lifecycle perusahaan (pembentukkan, pendanaan, kegiatan tata kelola perusahaan, & konsekuensi hukum dari pembubaran), aspek hukum mengenai peraturan persaingan usaha yang adil serta aspek hukum lainnya yang mengatur investor, direksi, karyawan, dan pemangku kepentingan lainnya berinteraksi satu sama lain yang sesuai dengan kebutuhan bisnis perusahaan, serta kepekaan terhadap perubahan dan/atau perkembangan tentang hukum perusahaan",
                "is_general_knowledge" => 1,
                "job_family_id" => 12,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Labour Law",
                "description" => "Pengetahuan dan pemahaman tentang perkembangan hukum ketenagakerjaan, asas-asas dalam hubungan industrial & tanggung jawab pekerja baik yang diatur dalam dasar hukum Indonesia dan International Labour Organization/ILO (UU Ketenagakerjaan) yang mengatur; manpower planning, manpower information, perjanjian kerja, tenaga kerja asing, hubungan kerja, perlindungan pengupahan & kesejahteraan pekerja, lembaga penyelesaian perselisihan hubungan industrial & hal-hal lainnya mengenai ketenagakerjaan, serta kepekaan terhadap perubahan dan/atau perkembangan tentang hukum ketenagakerjaan",
                "is_general_knowledge" => 1,
                "job_family_id" => 12,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Tax Law",
                "description" => "Pengetahuan dan pemahaman tentang peraturan, asas-asas hukum, subjek hukum (perorangan atau badan hukum), perbuatan-perbuatan hukum (perjanjian sewa-menyewa, pinjam-meminjam, dll.), hubungan subjek dengan hukum, dan sumber hukum yang menyangkut hubungan antar-individu atau individu dengan suatu perusahaan, asosiasi, atau badan lainnya, baik itu hukum perdata ataupun hukum perniagaan (dagang), dan lainnya yang berkaitan dengan bisnis perusahaan, serta kepekaan terhadap perubahan dan/atau perkembangan tentang hukum privat",
                "is_general_knowledge" => 1,
                "job_family_id" => 12,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Criminal Law (Public)",
                "description" => "Pengetahuan dan pemahaman tentang peraturan, subjek hukum, asas-asas hukum, jenis-jenis hukuman (pokok & tambahan), apa saja yang dapat dihukum (tindak, perbuatan, peristiwa, ataupun delik), ketentuan umum, golongan kejahatan, golongan pelanggaran, dan tujuan hukum yang menyangkut kepentingan publik, hubungan antara negara sebagai pemerintah dan pribadi serta pengaruh antara tindakan individu/perusahaan terhadap negara, baik itu hukum pidana, baik umum (KUHP) maupun khusus (tindak pidana korupsi & pencucian uang) ataupun lainnya yang berkaitan dengan bisnis perusahaan, serta kepekaan terhadap perubahan dan/atau perkembangan tentang hukum public",
                "is_general_knowledge" => 1,
                "job_family_id" => 12,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Business Law",
                "description" => "Pengetahuan dan pemahaman tentang norma, kebijakan, dan perizinan terkait transformasi digital di dunia bisnis, acuan regulasi yang dapat melindungi aktivitas bisnis (penyelenggaraan sistem, informasi, transaksi elektronik/digital, dll.) serta aspek-aspek hukum lainnya yang berhubungan dengan bisnis perusahaan di era ekonomi digital, serta kepekaan terhadap perubahan dan/atau perkembangan tentang hukum bisnis digital",
                "is_general_knowledge" => 1,
                "job_family_id" => 12,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Cyber Law --> sudah mencakup semua terkait digital business",
                "description" => "Pengetahuan dan pemahaman tentang prinsip, ruang lingkup, kebijakan dan sanksi terkait aspek-aspek dan persoalan yang berhubungan dengan pemanfaatan teknologi informasi dan dunia siber (e.g., perlindungan data konsumen/perusahaan, penyadapan/perekaman telekomunikasi, transaksi elektronik, cyber crimes, dll.)",
                "is_general_knowledge" => 1,
                "job_family_id" => 12,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Intellectual Property Rights",
                "description" => "Pengetahuan dan pemahaman tentang prinsip, ruang lingkup, kebijakan, sanksi, dan tata cara upaya perlindungan HaKI yang meliputi informasi kekayaan intelektual (business plans, research & development cycle, dll.), hak paten, hak cipta, desain industri, layout design of integrated circuit, trademark, dan rahasia dagang baik secara fisik ataupun digital",
                "is_general_knowledge" => 1,
                "job_family_id" => 12,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Land Documents",
                "description" => "Pengetahuan dan pemahaman tentang proses pengelolaan pertanahan yang meliputi proses identifikasi, penelitian dan pengumpulan dokumen tanah (atas hak) dalam rangka peningkatan hak atas tanah",
                "is_general_knowledge" => 1,
                "job_family_id" => 12,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Telecoms Law & Regulations",
                "description" => "Pengetahuan dan pemahaman tentang perkembangan hukum, instruksi, aturan, regulasi, dan aspek-aspek kepastian hukum terkait tata kelola penyebaran jaringan, pemberlakuan teknologi telekomunikasi baru, akses, interkoneksi, penomoran, alokasi & kapasitas jaringan (e.g., spektrum frekuensi radio, dll.) dan infrastruktur internet yang diatur dalam UU Telekomunikasi No.36/1999 dan norma hukum lainnya",
                "is_general_knowledge" => 1,
                "job_family_id" => 12,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Communication Fundamentals",
                "description" => "Pengetahuan dan pemahaman terkait prinsip, konsep, proses pelaksanaan, serta ruang lingkup komunikasi, baik di internal maupun eksternal, yang meliputi public relations, penyusunan konten/materi komunikasi, jurnalistik, periklanan, pemasaran, hingga hubungan dengan media dan stakeholders (e.g., pemerintah, masyarakat, dll.) guna mendukung identity, image & branding",
                "is_general_knowledge" => 1,
                "job_family_id" => 13,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Audit Fundamentals",
                "description" => "Pengetahuan dan pemahaman tentang tata cara pengecekan, pengawasan, dan pengukuran suatu sistem, produk, layanan, dan/atau aktivitas fungsional suatu unit yang bertujuan untuk mengidentifikasi serta mengatasi suatu risiko, memastikan kepatuhan prosedur dan kebijakan, serta merekomendasikan langkah peningkatan kualitas berkelanjutan",
                "is_general_knowledge" => 1,
                "job_family_id" => 14,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Risk Management Fundamentals",
                "description" => "Pengetahuan dan pemahaman tentang konsep, prinsip, tipe-tipe risiko & mitigasinya serta proses manajemen risiko yang meliputi perencanaan, identifikasi, analisis, implementasi risk response, monitoring dan kontrol terhadap jenis risiko tersebut",
                "is_general_knowledge" => 1,
                "job_family_id" => 14,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Compliance Fundamentals",
                "description" => "Pengetahuan dan pemahaman tentang konsep dasar kepatuhan yang meliputi kode etik, anti korupsi, kebijakan persaingan usaha, keamanan informasi, perlindungan data dan pencegahan fraud/kecurangan",
                "is_general_knowledge" => 1,
                "job_family_id" => 14,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Physical Asset Management Fundamentals",
                "description" => "Pengetahuan dan pemahaman terkait lifecycle, fungsi, sistem, dan prinsip-prinsip pengelolaan aset fisik perusahaan (e.g., properti/gedung, prasarana, alat kantor, dll.), termasuk tata cara perancangan, pemilihan, pemeliharaan, hingga pengembangan kapasitas asset (Property, Plant, and Equipment (PP&E))",
                "is_general_knowledge" => 1,
                "job_family_id" => 15,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "HSE Fundamentals",
                "description" => "Pengetahuan dan pemahaman secara menyeluruh terkait prinsip, prosedur, dan kebijakan keselamatan, kesehatan kerja, pengukuran kinerja HSE, serta pengelolaan lingkungan (ISO 14001, OHSAS 18001, SMK3, dll.), termasuk penanganan keadaan darurat/bahaya untuk mengurangi efek samping terhadap operasional bisnis perusahaan",
                "is_general_knowledge" => 1,
                "job_family_id" => 15,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Corporate Strategic Planning",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan strategi & detail arahan bisnis jangka pendek, menengah, hingga panjang (termasuk skenario pencapaian target, arahan terkait optimalisasi alokasi modal, sumber daya manusia, maupun resource lainnya, dll.) yang selaras serta mendukung pencapaian visi, misi, nilai, target & tujuan perusahaan melalui proses pengumpulan data bisnis (melalui studi literatur, riset, dll.) serta analisis dengan menggunakan teknik tertentu, e.g., PESTLE (Political, Economic, Social, Technological, Legal, Environmental), SWOT (Strengths, Weaknesses, Opportunities, Threats), STEER (Socio-cultural, Technological, Economic, Ecological, Regulatory), dll.",
                "is_general_knowledge" => 0,
                "job_family_id" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Strategy Development",
                "description" => "Pengetahuan dan kemampuan dalam melakukan review & evaluasi efektivitas implementasi strategi bisnis perusahaan (merefleksikan pencapaian saat ini serta cara mencapainya sejauh ini dengan menggunakan action checklist maupun metode lain), serta menyusun most promising strategic options yang fleksibel, realistis, challenging, selaras, serta mendukung pencapaian visi, misi, nilai, target & tujuan perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Analysis & Forecasting",
                "description" => "Pengetahuan dan kemampuan dalam menganalisis data historis terkait kondisi bisnis eksisting serta memprediksi kemungkinan kondisi bisnis yang akan datang dengan menggunakan model analisis statistik tertentu (e.g., regresi, dll.) guna menghasilkan rekomendasi terhadap pengambilan keputusan bisnis perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Emerging Technology",
                "description" => "Pengetahuan dan kemampuan dalam mengidentifikasi, memantau, menganalisis informasi terkait tren/potensi perkembangan teknologi (termasuk melakukan gap & cost benefit analysis) hingga menghasilkan rekomendasi strategi serta program implementasi teknologi baru (technology adoption) yang mampu mendukung keberlangsungan & meningkatkan nilai bisnis di perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Modelling",
                "description" => "Pengetahuan dan kemampuan dalam mengidentifikasi, menuangkan, hingga merumuskan permasalahan bisnis yang kompleks menjadi suatu gambaran/model bisnis operational yang sederhana namun terukur, fleksibel, komprehensif, serta selaras dengan strategi, value, tujuan bisnis perusahaan juga perspektif stakeholders (termasuk menggambarkan model hubungan antara pelanggan, product/services, proses & pelaku bisnis), melalui simulasi kondisi bisnis perusahaan yang akan datang (e.g., business model canvas, 9 building blocks, dll.) sebagai pertimbangan dalam pengambilan keputusan manajemen terkait bisnis perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Opportunity Assessment",
                "description" => "Pengetahuan dan kemampuan dalam melakukan kajian, analisis & evaluasi terhadap informasi terkait peluang-peluang pengembangan bisnis (e.g., feasibility assessment, impact assessment, etc.), serta menentukan peluang pengembangan bisnis yang dapat memberikan nilai tambah bagi perusahaan dengan mempertimbangkan lingkungan bisnis internal/eksternal (pasar, teknis, kompetitor finansial, dll.) dengan memahami faktor-faktor terkait pengembangan bisnis yang perlu dipertimbangkan, baik untuk bisnis eksisting maupun bisnis baru (melalui proses merger & acquisition atau pun tidak)",
                "is_general_knowledge" => 0,
                "job_family_id" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Valuation",
                "description" => "Pengetahuan dan kemampuan dalam memahami business & market data (e.g., capital structure, assets, entitas portofolio bisnis, dll.) serta melakukan penilaian/perhitungan nilai ekonomi dari suatu bisnis berdasarkan pada total asset yang dimiliki (asset-based approaches), probabilitas nilai pendapatan (earning value approaches), maupun perbandingan nilai di pasar (market value approaches) sebagai dasar pertimbangan/rekomendasi dalam pengambilan keputusan manajemen",
                "is_general_knowledge" => 0,
                "job_family_id" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Merger & Acquisition Management",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan strategi & rencana detail, melakukan implementasi, monitoring, hingga closing proses penggabungan & pengambilalihan perusahaan (baik purchase mergers maupun consolidation mergers), dengan melakukan negosiasi yang berdasarkan pada hasil opportunity assessment, sebagai upaya untuk memperluas jangkauan, pangsa pasar, dan/atau meningkatkan nilai perusahaan dimata pemegang saham",
                "is_general_knowledge" => 0,
                "job_family_id" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Strategic Investment",
                "description" => "Pengetahuan dan kemampuan dalam memahami portofolio bisnis perusahaan, melakukan identifikasi, penilaian & seleksi terhadap portofolio investasi (dari segi keuangan, risiko, dll.), serta menyusun rekomendasi/prioritas keputusan investasi strategis yang berpotensi mendapat return of investment maksimal bagi perusahaan, guna mengoptimalisasi portofolio bisnis perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Performance Management",
                "description" => "Pengetahuan dan kemampuan dalam menetapkan, memonitor, mengevaluasi target kinerja bisnis perusahaan (mencakup indikator keuangan maupun operasional, e.g., EBITDA, revenue, dll.), untuk periode triwulanan, semesteran, maupun tahunan, merujuk pada performance management cycle & strategi bisnis perusahaan, termasuk mampu menentukan tools Performance Management System yang akan digunakan (e.g., Balance Scorecard, OKR, 4DX, dll.), guna meningkatkan efektivitas, efisiensi, & performansi bisnis perusahaan (reduced cost, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 2,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Process Management",
                "description" => "Pengetahuan dan kemampuan dalam menentukan framework proses bisnis (e.g., eTom, APQC, dll.), melakukan identifikasi, pemetaan, serta penyelarasan proses & sub-proses pekerjaan di perusahaan yang saling berkesinambungan (termasuk analisis, monitoring implementasi, hingga melakukan redesain) dengan menggunakan metode/tools tertentu (Process Maker, Kissflow, dll.), guna mendapatkan gambaran keseluruhan proses pekerjaan secara komprehensif, berkesinambungan, dan menemukan area-area yang perlu dikembangkan",
                "is_general_knowledge" => 0,
                "job_family_id" => 2,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Partnership Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan identifikasi & penilaian calon partner potensial (berdasarkan analisis kesempatan yang dilakukan), menyusun strategi, serta menerapkan teknik pembinaan hubungan (melalui proses negosiasi) sehingga tercapai kesepakatan kerjasama bisnis dengan para pemangku kepentingan (e.g., Kerjasama Marketing, Joint Venture, Equity Strategic Alliance, dll.), guna mendukung terciptanya progress, opsi-opsi terbaik untuk mencapai tujuan maupun menyelesaikan masalah bisnis perusahaan dan meningkatkan kesempatan pengembangan kapabilitas perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 2,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Policy & Procedure Management",
                "description" => "Pengetahuan dan kemampuan dalam menentukan standar, metode & tools terkait penyusunan kebijakan dan prosedur, membuat draft yang lengkap, fleksibel, terukur, sesuai dengan visi, misi, & nilai-nilai perusahaan, serta selaras dengan kebijakan/prosedur lainnya (policy integration) untuk mengantisipasi terjadinya tumpang tindih, mengelola persetujuan/pengesahan, mendistribusikan, memutakhirkan, melakukan monitoring hingga evaluasi relevansi kebijakan dan prosedur di perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 2,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Change Management",
                "description" => "Pengetahuan dan kemampuan dalam mengidentifikasi kebutuhan perubahan, menyusun strategi & rencana (baik dari segi proses bisnis, cara mengintervensi, maupun penyediaan perangkat & resources), melakukan sosialisasi, memastikan keberlangsungan implementasi proses perubahan pada seluruh bagian di perusahaan secara berkelanjutan, termasuk mengatasi resistensi & isu-isu terkait perubahan tersebut, hingga mengukur keberhasilan perubahan dengan instrumen tertentu (e.g., Change Management Indicator, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 2,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Innovation Management",
                "description" => "Pengetahuan dan kemampuan dalam mengideasi (ideation), mendesain program inovasi, menentukan prioritas, melakukan sosialisasi, serta memfasilitasi implementasi ide/inisiatif tersebut pada kegiatan operasional sehari-hari menggunakan tools tertentu (e.g., Ideawake, Viima, Exago SMART, dll.), hingga mendorong terjadinya inovasi secara berkelanjutan, guna memaksimalkan potensi peningkatan efektivitas dan efisiensi kegiatan operasional di perusahaan (dari segi resources, cost, dll.) berdasarkan pada pemahaman terhadap konsep/prinsip inovasi (yang mencakup tahapan, tingkah laku & peran individu terkait inovasi)",
                "is_general_knowledge" => 0,
                "job_family_id" => 2,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Standardization Management System",
                "description" => "Pengetahuan dan kemampuan dalam memahami standar-standar yang berlaku pada sektor nasional, maupun internasional, serta melakukan identifikasi kebutuhan, menentukan, mendapatkan, hingga mempertahankan sistem manajemen terstandarisasi (e.g., ISO, dll.) yang sesuai dengan kebutuhan operasional bisnis perusahaan, guna meningkatkan & meningkatkan kualitas output yang dihasilkan",
                "is_general_knowledge" => 0,
                "job_family_id" => 2,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Reporting & Analysis",
                "description" => "Pengetahuan dan kemampuan dalam melakukan pengumpulan & pengolahan data (operasional, keuangan, maupun data perusahaan lainnya), hingga menyusun laporan hasil kerja secara lengkap, efektif, serta mudah dipahami dengan menggunakan tata bahasa yang baik dan benar (e.g., laporan bisnis perusahaan, laporan tahunan, laporan berkelanjutan, laporan unit/fungsi dll.), termasuk menyampaikannya kepada pihak-pihak terkait sebagai input untuk menyusun rekomendasi terhadap pengambilan keputusan di perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 2,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Negotiation",
                "description" => "Pengetahuan dan kemampuan dalam menyusun strategi berdasarkan pemahaman terhadap latar belakang, kepentingan, maupun kebutuhan bisnis perusahaan yang disasar), mengkomunikasikan/mengemukakan maksud & tujuan, berkompromi, mempersuasi, serta melakukan proses tawar menawar dengan menggunakan teknik/pendekatan tertentu (soft bargaining, hard bargaining, principled negotiation) guna mencapai kesepakatan (win-win, win-lose, dll.) yang dapat diterima oleh kedua belah pihak",
                "is_general_knowledge" => 0,
                "job_family_id" => 2,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Office Secretarial",
                "description" => "Pengetahuan dan kemampuan dalam merencanakan & mengatur kegiatan korespondensi serta operasional perusahaan (e.g., meeting, appointment, dll.), berperan sebagai perantara komunikasi (e.g., screening phone calls, dll.), hingga mengumpulkan (compile) materi rapat, dll., guna mendukung kelancaran kegiatan operasional perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 2,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Records & File Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan pengaturan (penyusunan kategorisasi, penyimpanan & penggunaan) dokumen, baik bentuk digital maupun non-digital, agar dokumen-dokumen tersebut dapat terkelola secara efektif serta efisien",
                "is_general_knowledge" => 0,
                "job_family_id" => 2,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Product Design",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan ide/konsep produk (e.g., legacy product, dll.) yang menarik, kreatif, namun feasible, termasuk penyusunan rencana monetisasi, dll., dengan membandingkan desain produk pesaing & preferensi target audiens, serta mengevaluasi nilai komersial dari desain produk tersebut berdasarkan pada prinsip-prinsip & teknik pengembangan desain produk",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Product Design",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan ide/konsep desain produk digital (e.g., produk video, audio, games, dll.) yang menarik, kreatif, namun feasible, termasuk penyusunan rencana monetisasi, dll., dengan mempertimbangkan user experience, membandingkan desain produk digital pesaing & preferensi target audiens, serta mengevaluasi nilai komersial dari desain produk digital tersebut berdasarkan pada prinsip-prinsip & teknik pengembangan desain produk digital (software engineering)",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Services Design",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan ide/konsep desain services (e.g., IoT, Advertising, Data Solution, Cloud, dll.) yang menarik, kreatif, namun feasible, termasuk penyusunan rencana monetisasi, dll., dengan membandingkan desain services pesaing, preferensi target audiens & pengalaman pelanggan, serta mengevaluasi nilai komersial dari desain services tersebut berdasarkan pada prinsip-prinsip & teknik pengembangan pengembangan desain service, serta interaksi manusia dengan computer/mesin (devices)",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Product Prototyping",
                "description" => "Pengetahuan dan kemampuan dalam melakukan review, penerjemahan, serta simulasi terhadap ide/konsep desain produk (e.g., legacy product, dll.), hingga menjadi suatu prototipe (dengan mempertimbangkan bentuk & fitur desain produk), termasuk menyusun roadmap pengembangan prototipe itu sendiri berdasarkan pada teknik-teknik penyusunan prototipe",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Product Prototyping",
                "description" => "Pengetahuan dan kemampuan dalam melakukan review, penerjemahan, serta simulasi terhadap ide/konsep desain produk digital (e.g., produk video, audio, games, dll.), hingga menjadi suatu prototipe (alpha/beta release, MVP, dll.), dengan mempertimbangkan bentuk & fitur desain produk, termasuk menyusun roadmap pengembangan prototipe itu sendiri berdasarkan pada teknik-teknik penyusunan prototipe (e.g., Low-Fidelity Prototyping, High-Fidelity Prototyping, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Services Prototyping",
                "description" => "Pengetahuan dan kemampuan dalam melakukan review, penerjemahan, serta simulasi terhadap ide/konsep desain services (e.g., IoT, Advertising, Data Solution, Cloud, dll.), hingga menjadi suatu prototipe (dengan mempertimbangkan bentuk & fitur desain produk), termasuk menyusun roadmap pengembangan prototipe itu sendiri berdasarkan pada teknik-teknik penyusunan prototipe (e.g., Low-Fidelity Prototyping, High-Fidelity Prototyping, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Product Testing Management",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan protokol, pedoman pelaksanaan & penentuan metode pengujian produk berdasarkan pada konsep & teknik-teknik pengujian terhadap produk, melaksanakan market testing (termasuk menyusun jadwal pelaksanaan), hingga menginterpretasi hasil pengujian tersebut, guna memastikan performa & tingkat penerimaan pasar terhadap produk Telkomsel sebelum dilakukan launching",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Product Testing Management",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan protokol serta pedoman pelaksanaan & penentuan metode pengujian produk digital berdasarkan pada konsep & teknik-teknik pengujian terhadap produk digital, melaksanakan user testing, usability testing, dll., dengan menggunakan tools tertentu (e.g., Validately, UsabilityHub, Userlytics, dll.), hingga menginterpretasi hasil pengujian tersebut, guna memastikan performa produk digital sebelum dilakukan launching",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Services Testing Management",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan protokol serta pedoman pelaksanaan & penentuan metode pengujian services berdasarkan pada konsep & teknik-teknik pengujian terhadap services, melaksanakan pengujian integrasi jaringan, konektivitas services, dll., dengan menggunakan tools tertentu (e.g., TestingWhiz, dll.), hingga mengintepretasi hasil pengujian tersebut, guna memastikan performa services sebelum dilakukan launching",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Pricing Strategy",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan model penentuan harga/tarif product/services, melakukan price sensitivity analysis, price elasticity of demand, dll., serta modifikasi harga/tarif, berdasarkan pada kebutuhan, karakteristik, perilaku pelanggan, tren ekonomi, value-based pricing, competitor-based pricing, dsb., serta sesuai dengan kebijakan dan/atau aturan penentuan harga yang berlaku, sehingga menghasilkan harga/tarif product/services terbaik, guna mendukung pencapaian kepuasan pelanggan (enterprise maupun consumer), profit margin & revenue maksimal",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Product/Services Performance Management",
                "description" => "Pengetahuan dan kemampuan dalam memahami standar kualitas kinerja product/services, melakukan monitoring, analisis performansi (performance assessment, baik dengan form secara manual, maupun bantuan software tertentu), serta menyusun rekomendasi tindak lanjut terhadap kinerja product/services (ditingkatkan, diteruskan, ditangguhkan, atau dihentikan)",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Product/Services Quality Assurance",
                "description" => "Pengetahuan dan kemampuan dalam menyusun standar kualitas berdasarkan pada prinsip-prinsip penjaminan kualitas product/service, melakukan monitoring, serta menjamin pelaksanaan product/services (baik digital maupun non-digital), berjalan sesuai dengan ekspektasi & standar kualitas yang telah ditetapkan",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Visual Design",
                "description" => "Pengetahuan dan kemampuan dalam menerapkan elemen-elemen estetik (e.g., gambar, warna, tipografi, tata letak, dll.), pada websites, apps, maupun platform digital lainnya, berdasarkan pada prinsip-prinsip, standar, aturan desain visual, dengan menggunakan tools tertentu (e.g., Adobe Photoshop, Sketch, Illustrator, Adobe XD, dll.), guna mendukung peningkatan fitur-fitur pada product/services Telkomsel",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Information Architecture Design",
                "description" => "Pengetahuan dan kemampuan dalam menyusun rencana serta melakukan pengaturan penggunaan label, konten, fungsi, fitur & aspek-aspek penting lain dari situs/aplikasi web/seluler, ke dalam suatu struktur/hierarki/ taksonomi berdasarkan pada prinsip-prinsip pengelolaan desain arsitektur informasi, dengan menggunakan metode tertentu (e.g., affinity diagramming, wireframing, dll.), sehingga mendukung kemudahan penggunaan & pencarian pada perangkat lunak",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "User Interface Design & Optimization",
                "description" => "Pengetahuan dan kemampuan dalam merancang, menambah, menghapus, maupun memodifikasi tampilan antar muka product/services pada berbagai platform, melalui proses review serta analisis terhadap information architecture, elemen visual, teknis & fungsional, berdasarkan pada human-computer interaction principles, guna mencapai tampilan antar muka yang optimal",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "User Experience Design & Optimization",
                "description" => "Pengetahuan dan kemampuan dalam mengkonseptualisasikan & merancang interaction design product/services yang presisi, nyaman, serta mudah digunakan, melalui proses integrasi terhadap information architecture, visual interface design, maupun elemen lainnya dengan bantuan tools terkait (e.g., Hotjar, Optimizely, Usabilla, dll.) serta berdasarkan pada user-centered design principles, sehingga mendukung terciptanya pengalaman positif pelanggan terhadap product/services Telkomsel",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "User Research",
                "description" => "Pengetahuan dan kemampuan dalam menyusun rencana, menentukan metode, hingga melaksanakan penelitian guna memahami kebutuhan, perilaku, pengalaman, motivasi, serta persepsi dari pengguna (user) terhadap tampilan desain product/services dengan menggunakan pendekatan berbasis riset metodologis, baik kualitatif (e.g., interviewing, untuk menggali alasan mengapa pengguna tidak menyadari halaman/tombol action tertentu, dll.) maupun kuantitatif (e.g., A/B testing, guna mengetahui conversion rate, jumlah click, persentase pemahaman user terhadap stimulus action tertentu, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "UX Writing",
                "description" => "Pengetahuan dan kemampuan dalam mendesain strategi & rencana penulisan, serta memilih kosakata untuk menciptakan suatu konten pada product/services (e.g., judul, deskripsi pesan, dll.) secara ringkas, akurat, jelas, konsisten, mempertimbangkan perspektif/sudut pandang manusia sebagai pengguna (empati) & berdasarkan pada teknik-teknik penulisan yang berkaitan dengan human-computer interaction principles, guna mendukung interaksi pengguna dengan product/service Telkomsel, membangun pengalaman positif, kepercayaan & memudahkan penyelesaian proses transaksi",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Loyalty & Retention Program",
                "description" => "Pengetahuan dan kemampuan dalam menyusun program loyalty berdasarkan tipe-tipe & metode pengelolaan loyalitas pelanggan, memberikan informasi program kepada pelanggan (e.g., special offers, pemberian reward untuk customer VIP, dll.), melakukan review partisipasi pelanggan, termasuk memelihara hubungan kerjasama dengan merchants, mitra, dll., hingga evaluasi efektivitas program, guna menjaga keterikatan jangka panjang pelanggan terhadap product/services Telkomsel serta mencegah terjadinya churn",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Market Research",
                "description" => "Pengetahuan dan kemampuan dalam melaksanakan pengumpulan data lapangan terkait kebutuhan, preferensi, serta perilaku pasar, termasuk menentukan framework, tujuan, serta metode pelaksanaannya (e.g., kualitatif/kuantitatif), hingga menyusun laporan hasil interpretasi data tersebut berdasarkan pada prinsip-prinsip penelitian terstruktur, guna menghasilkan input yang bermakna bagi pelaksanaan analisis pemasaran (e.g., market trend analysis, customer behavior analysis, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Market Research",
                "description" => "Pengetahuan dan kemampuan dalam melakukan pengumpulan data terkait kebutuhan, preferensi, aktivitas, serta perilaku pasar (e.g., purchase rate, dll.) secara daring, baik melalui survei digital maupun penarikan data, baik real time maupun historikal, yang bersumber dari media sosial (e.g., Twitter, Facebook,dll.), termasuk memproses data tersebut dengan bantuan digital platform (e.g., Google Analytics, dll.) berdasarkan pada prinsip-prinsip penelitian di dunia maya, sehingga menghasilkan data pasar yang bermakna",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Market Trend Analysis",
                "description" => "Pengetahuan dan kemampuan dalam melakukan analisis & evaluasi terhadap perubahan tren pasar, mengidentifikasi peluang, serta memprediksi arah permintaan product/services di masa depan dengan menggunakan teknik/tools tertentu (e.g., 200-day moving average, relative strength index, Fibonacci retracement, dll.) berdasarkan pada hasil riset pasar",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Marketing Strategy and Planning",
                "description" => "Pengetahuan dan kemampuan dalam menentukan strategi, tujuan (launching/maintaining), target segmen, metode pemasaran, menentukan positioning product/services (value proposition), baik untuk segmen enterprise (e.g., sejauh mana impact dari product/services Telkomsel terhadap perusahaan klien) maupun consumer (e.g., sejauh mana product/services Telkomsel mampu memenuhi keinginan, harapan, serta persepsi konsumen), termasuk strategi dan rencana Go to Market (GTM) berdasarkan pada pertimbangan terhadap rencana pemasaran para kompetitor dan hasil analisis kecenderungan tren pasar",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Brand Strategy",
                "description" => "Pengetahuan dan kemampuan dalam menciptakan brand profile bagi product/services (e.g., logo, key brand messaging, dll.) serta merancang strategi peningkatan nilai dari brand tersebut di mata konsumen berdasarkan prinsip-prinsip pengelolaan brand product/services secara efektif, dengan menggunakan teknik/metode tertentu (e.g., Name Brand Recognition, Crowdsourcing, etc.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "E-Branding Strategy",
                "description" => "Pengetahuan dan kemampuan dalam merancang strategi peningkatan nilai dari brand product/services di mata konsumen dengan memanfaatkan platform digital dan/atau media internet (e.g., media sosial, dll.) maupun tools yang ditawarkan di internet, berdasarkan pada prinsip-prinsip pengelolaan brand product/services secara efektif",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Graphic Design",
                "description" => "Pengetahuan dan kemampuan dalam mengembangkan/menggunakan elemen-elemen visual (e.g., motion, tipografi, estetika, komposisi, teori & jenis warna, dll.) untuk menjawab permasalahan komunikasi, baik untuk kebutuhan marketing maupun korporasi, berdasarkan pada prinsip-prinsip desain grafis & komunikasi visual, dengan bantuan tools terkait (e.g., Pixlr, Adobe Creative Suite, InDesign, Affinity Designer, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Promotion and Campaign Management",
                "description" => "Pengetahuan dan kemampuan dalam menentukan tujuan, target, sasaran, jadwal, serta ruang lingkup program promosi & kampanye (marketing communication), melakukan implementasi (melalui media press releases, web sites, public relations events, dll.), hingga melaksanakan evaluasi efektivitas program berdasarkan pada prinsip-prinsip komunikasi marketing serta selaras dengan products/services brand strategy",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "E-commerce and Online Merchandising",
                "description" => "Pengetahuan dan kemampuan dalam merancang strategi & menentukan rencana presentasi/tampilan produk secara visual pada platform digital dan/atau media internet (media sosial, website, dll.) dengan mempertimbangkan perilaku konsumen, hasil penjualan produk, umpan balik dari pelanggan, dll., baik secara manual maupun menggunakan tools terkait, guna menarik perhatian pelanggan serta mendukung tercapainya kepuasan pelanggan ketika berbelanja melalui platform digital dan/atau media internet (media sosial, website, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Telemarketing",
                "description" => "Pengetahuan dan kemampuan dalam menggunakan perangkat telekomunikasi, menghubungi calon pelanggan potensial, serta melaksanakan penyebaran informasi komersial (e.g., promo, penawaran produk, dll.) melalui telepon dan/atau fax, tidak mencakup pemasaran melalui pesan langsung (direct mail marketing)",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Search Engine Optimization (SEO)",
                "description" => "Pengetahuan dan kemampuan dalam melakukan upaya-upaya terkait optimasi laman web, peningkatan visibilitas laman web (e.g., modifikasi judul, keyword, integrasi dengan sosial media, dll.), guna mengoptimalkan hasil temuan, terkait informasi komersial product/services (e.g., promo, penawaran produk, dll.) pada mesin telusur (Search Engine, e.g., Google, DuckDuckGo, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Social Media Marketing",
                "description" => "Pengetahuan dan kemampuan dalam melaksanakan penyebaran informasi komersial (e.g., promo, penawaran produk, dll.) dengan memanfaatkan fitur-fitur media sosial (e.g., tag, hashtag, dll.) yang memungkinkan terjadinya share, like, re-tweet hingga membentuk word of mouth (Buzz Marketing) berdasarkan pada prinsip serta aturan pemasaran berbasis media sosial & pemanfaatan channel-channel pemasarannya",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Mobile Marketing",
                "description" => "Pengetahuan dan kemampuan dalam mengirimkan pesan komersial (e.g., promo, penawaran produk, dll.) dengan memanfaatkan layanan/fitur dari perangkat seluler (e.g., tablet, smartphone) & jaringan, seperti e-mail, SMS, MMS, mobile apps via push notification, dll., termasuk location based services, berdasarkan pada prinsip & aturan pemasaran berbasis perangkat seluler yang berlaku, sehingga menjamin kecepatan dan kemutakhiran informasi pemasaran diterima oleh calon pelanggan",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Advertising",
                "description" => "Pengetahuan dan kemampuan dalam menentukan channel digital terbaik serta melakukan pemasangan iklan berbasis digital pada media internet (e.g., DisplayAds, Pop-up Ads, dll.), sebagai sarana untuk menjalankan aktivitas pemasaran product/services (e.g., memberikan informasi terkait promo, penawaran produk, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Sales Strategy and Planning",
                "description" => "Pengetahuan dan kemampuan dalam menyusun strategi, menetapkan target penjualan (untuk segmen consumer) dan/atau target pengembangan/pembinaan hubungan bisnis (win or retain—untuk segmen enterprise), termasuk melakukan cascading & adjustment terhadap strategi dan target tersebut (jika diperlukan), sehingga selaras & mampu mendukung pencapaian strategi serta tujuan bisnis perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 4,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Selling",
                "description" => "Pengetahuan dan kemampuan dalam mengenali (understanding), menarget calon pelanggan (prospecting/ targeting), menawarkan product/services (termasuk memberikan saran untuk upselling, dll.) kepada pelanggan eksisting maupun baru, hingga melakukan pendekatan secara terstruktur, baik secara verbal maupun non-verbal (e.g., assumptive close, option close, suggestion close, dll.) untuk menyelesaikan/menutup proses penjualan product/services serta menjamin komitmen membeli dari pelanggan",
                "is_general_knowledge" => 0,
                "job_family_id" => 4,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Sales Performance Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan monitoring secara berkala, evaluasi, serta menyusun rekomendasi kinerja penjualan",
                "is_general_knowledge" => 0,
                "job_family_id" => 4,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Billing and Collection",
                "description" => "Pengetahuan dan kemampuan dalam melaksanakan strategi penagihan piutang kepada setiap pelanggan sesuai dengan tanggal jatuh tempo pembayarannya masing-masing, penanganan keterlambatan pembayaran (bad debt), hingga penyelesaian penagihan (billing settlement), dengan teknik negosiasi, mengirimkan surat pemberitahuan, menghentikan pemberian layanan, dll., apabila diperlukan guna memperoleh komitmen pelanggan dalam menyelesaikan pembayaran sesuai dengan kebijakan dan prosedur perusahaan yang berlaku",
                "is_general_knowledge" => 0,
                "job_family_id" => 4,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Channel Management",
                "description" => "Pengetahuan dan kemampuan dalam menyusun strategi manajemen channel, melakukan pemilihan dengan mengidentifikasi mitra potensial, mengevaluasi performa, hingga memelihara hubungan dengan channel penjualan (merchants, mitra, dll) sesuai dengan jenis dan tata cara pembinaan hubungan yang berlaku, guna memperluas jangkauan serta mendukung peningkatan pencapaian penjualan product/services Telkomsel",
                "is_general_knowledge" => 0,
                "job_family_id" => 4,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Customer Experience Design",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan roadmap customer experience (termasuk customer journey map, persona, dll.), melakukan perbaikan/pengembangan desain tersebut secara berkelanjutan, berdasarkan prinsip-prinsip pengelolaan pengalaman pelanggan (customer experience), serta melalui analisis mendalam yang berfokus pada karakteristik, perilaku, kecenderungan, minat & aspek penting lain dari para customer (customer-centric), sehingga mampu mencapai customer satisfaction index yang diharapkan",
                "is_general_knowledge" => 0,
                "job_family_id" => 4,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Customer Experience Evaluation",
                "description" => "Pengetahuan dan kemampuan dalam melakukan tracking dan evaluasi, terhadap keseluruhan aspek pengalaman pelanggan (mencakup sikap, emosi, pemikiran, perilaku, dll.) atas product/service Telkomsel, dengan menggunakan metode/tools tertentu (seperti NPS, tNPS, CES), baik sebelum, saat, maupun setelah menyelesaikan proses transaksi, guna menghasilkan rekomendasi perbaikan desain pengalaman pelanggan perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 4,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Customer Service Design",
                "description" => "Pengetahuan dan kemampuan dalam mengembangkan serta mensosialisasikan strategi & desain operasional layanan pelanggan (sistem, mekanisme, pedoman, SLA, dll.) secara berkelanjutan, termasuk standar/indikator penilaian performa layanan, melalui proses brainstorming, review desain eksisting, dll., guna mendukung terciptanya efektivitas pelayanan (service excellence)",
                "is_general_knowledge" => 0,
                "job_family_id" => 4,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Customer Care",
                "description" => "Pengetahuan dan kemampuan dalam menerima permintaan dan/atau kebutuhan pelanggan dengan menerapkan teknik mendengar aktif, empati, dll., serta memberikan respon yang sesuai berdasarkan pada metode, pedoman & desain pelayanan pelanggan, termasuk menghasilkan solusi atas permasalahan yang dihadapi pelanggan, melakukan eskalasi (jika diperlukan), monitoring, hingga menjamin penyelesaian masalah selaras dengan SLA yang telah ditetapkan, guna mencapai service excellence & emotional connection terhadap pelanggan",
                "is_general_knowledge" => 0,
                "job_family_id" => 4,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Service Level Agreement Assessment",
                "description" => "Pengetahuan dan kemampuan dalam mengukur pencapaian Service Level Agreement (SLA), dengan menggunakan metode-metode pengukuran SLA yang telah disepakati (e.g., survey, interview, feedback, dll.), guna menghasilkan rekomendasi perbaikan desain maupun operasional pemberian layanan",
                "is_general_knowledge" => 0,
                "job_family_id" => 4,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Customer Touch Point Evaluation",
                "description" => "Pengetahuan dan kemampuan dalam memahami serta menganalisis informasi terkait perilaku pelanggan di berbagai touch point (didapat melalui assessment, survei, wawancara, monitoring, dll.), guna menghasilkan rekomendasi peningkatan performansi layanan perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 4,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "After-sales Service",
                "description" => "Pengetahuan dan kemampuan dalam mengidentifikasi kebutuhan pelayanan hingga melakukan implementasi pemberian layanan teknis pasca penjualan kepada pelanggan (e.g., membantu proses aktivasi, mengelola penukaran/pengembalian, dll.) secara akurat, tepat waktu, serta sesuai dengan tipe & prosedur pelayanan pasca penjualan yang ditentukan, termasuk melakukan monitoring dan eskalasi (jika diperlukan)",
                "is_general_knowledge" => 0,
                "job_family_id" => 4,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Educating Customers",
                "description" => "Pengetahuan dan kemampuan dalam memahami, memberikan pemahaman, serta mendemonstrasikan kelebihan, kegunaan/manfaat & fitur-fitur product/services Telkomsel kepada pelanggan, dengan memberikan penjelasan formal, pengajuan probing, dll.",
                "is_general_knowledge" => 0,
                "job_family_id" => 4,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IT Strategic Planning",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan konsep, rencana (roadmap) & strategi jangka panjang IT berdasarkan hasil analisis (baik empirik maupun literature review), serta penyelarasan terhadap strategi bisnis, proses bisnis, dan kebutuhan/inisiatif/ekspektasi stakeholder terhadap teknologi informasi, sebagai dasar atau arahan terkait pengembangan solusi yang tepat bagi keberlangsungan bisnis perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IT Architecture Design",
                "description" => "Pengetahuan dan kemampuan dalam merumusakan desain rancang bangun IT (e.g., Cobit, ITIL, TOGAF, APQC, dll.), termasuk struktur/ kerangka pengembangan solusi IT (baik hardware, software, maupun komponen IT lainnya), berdasarkan pada prinsip-prinsip, metode, standar, serta pedoman penyusunan yang berlaku, dengan memperhatikan keselarasannya pada IT strategic plan perusahaan, guna mendukung pencapain tujuan & target pengembangan solusi IT",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Cloud Architecture Design",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan desain rancang bangun cloud, termasuk struktur pengelolaan, guidelines, serta mekanisme integrasi komponen, infrastruktur, services, serta software ke dalam platform & resources yang telah ditetapkan, guna mendukung terciptanya proses virtualisasi berbasis cloud efektif, efisien, tepat guna, fleksibel, serta selaras dengan prinsip & aturan yang berlaku",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IT Governance",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan, menyampaikan, hingga monitoring kepatuhan penerapan tata kelola IT di perusahaan, guna memastikan kesesuaian, keselarasan & efektivitas praktik IT dengan prinsip-prinsip, panduan, kebijakan, visi, misi, rencana strategis, maupun standar pelayanan IT di perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "ICT Business Continuity",
                "description" => "Pengetahuan dan kemampuan dalam melakukan identifikasi elemen, proses & kondisi kritikal terkait kontinuitas ICT, baik yang terduga (e.g., bisnis, market, dll.) maupun tidak terduga (e.g., bencana alam, wabah, dll.), merumuskan strategi mitigasi bencana, menentukan tujuan, metode & desired level, termasuk memastikan ketersediaan resources & tools yang dibutuhkan (e.g., ClearView, BCMFort, dll.), serta menguji kesesuaian & kesiapan rencana ICT business continuity, melakukan penanganan, hingga pemulihan komponen/elemen ICT saat terjadi bencana/keadaan darurat, guna menjamin keberlangsungan & stabilitas sistem kritikal ICT yang mendukung jalannya bisnis perusahaan secara berkelanjutan",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Application/Software Requirement Analysis",
                "description" => "Pengetahuan dan kemampuan dalam mengumpulkan informasi terkait kebutuhan bisnis (business requirement) & keinginan/harapan/persepsi user (user requirement) terkait pengembangan aplikasi/software, melakukan klarifikasi, analisis (e.g., gap analysis, analisis dampak dari solusi tsb.—terhadap cost, profit, margin, dll.), termasuk mempertimbangkan probability cases & menentukan prioritas solusi yang feasible untuk dijalankan, hingga menerjemahkannya menjadi solusi yang tepat guna, bermanfaat bagi keberlangsungan bisnis perusahaan, serta mampu memenuhi ekspektasi stakeholders dan/atau end-user",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Application/Software Design",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan ide, hingga merancang konsep aplikasi/software, baik mobile apps, web software, dan lain sebagainya berdasarkan pada prinsip-prinsip pengembangan desain aplikasi/software serta selaras dengan requirement document serta mempertimbangkan dampak dari desain tersebut (baik terhadap cost maupun faktor-faktor terdampak lainnya",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Application Programming",
                "description" => "Pengetahuan dan kemampuan dalam memahami, menginput (coding) bahasa pemrograman tertentu (e.g., Java, Kotlin, dll.), serta menggunakan tools terkait untuk mengembangkan aplikasi client-side",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Systems Programming",
                "description" => "Pengetahuan dan kemampuan dalam memahami, menginput (coding) bahasa pemrograman tertentu (Machine Oriented High Order Languages/MOHOL, Scripting Language, e.g., ALGOL, Pascal, dll.), menggunakan tools terkait untuk mengembangkan software system, termasuk di dalamnya software server-side maupun software platform, serta mengendalikan & mengatur skenario pemrosesan kode/script, guna mengantisipasi terjadinya perlambatan pada software/platform software",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IoS App Programming",
                "description" => "Pengetahuan dan kemampuan dalam memahami, menginput (coding) bahasa pemrograman tertentu (e.g., Swift, dll.), serta menggunakan tools terkait (e.g., Xcode, dll.) untuk mengembangkan aplikasi client-side berbasis IoS",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Android App Programming",
                "description" => "Pengetahuan dan kemampuan dalam memahami, menginput (coding) bahasa pemrograman tertentu (e.g., Java, Kotlin, C++, dll.), serta menggunakan tools terkait (e.g., Android Studio, dll.) untuk mengembangkan aplikasi client-side berbasis Android",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Web Software Programming",
                "description" => "Pengetahuan dan kemampuan dalam memahami, menginput (coding) algoritma/bahasa pemrograman tertentu (e.g., HHTML, CSS, Python, PHP, dll.), serta memodifikasi perangkat lunak (software) client-side berbasis web",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Clean Code Programming",
                "description" => "Pengetahuan dan kemampuan dalam memahami serta menginput (coding) algoritma/bahasa pemrograman tertentu secara jelas, terstruktur, mudah dipahami, dibaca, dikembangkan & dikelola oleh anggota tim, khususnya untuk project-project berbasis agile",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Application/Software Testing",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan detail rencana pengujian, yang terdiri dari tujuan, kriteria keberhasilan, penentuan kondisi/persyaratan pengujian, definisi kasus yang mungkin terjadi, dll., melaksanakan pengujian aplikasi/software (baik secara konvensional maupun dengan bantuan tools, e.g., Selenium, Testing-Whiz, Katalon Studio, dll.), serta mengevaluasi permasalahan yang terjadi saat pengujian (e.g., gangguan umum, bug, kesalahan, dll.), sehingga menghasilkan rekomendasi perbaikan/modifikasi lanjutan terhadap aplikasi/software",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Continuous Integration/Continuous Deployment (CI/CD)",
                "description" => "Pengetahuan dan kemampuan dalam melakukan pengaturan/integrasi input (coding) antara kode baru & kode utama secara bersama-sama dengan bantuan version control system (git repositories), serta melaksanakan serangkaian pengujian berkelanjutan terotomatisasi (automated testing), hingga memastikan akurasi & kesiapan kode aplikasi baru yang telah terinput, termasuk menerapkan beragam pola berisiko rendah pada proses deployment (low-risk deployment pattern, e.g., canary, A/B, blue-green, dll.), guna menghasilkan software bersifat agile yang sesuai kebutuhan user maupun bisnis",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Container",
                "description" => "Pengetahuan dan kemampuan dalam melakukan pengemasan/isolasi kode aplikasi/software ke dalam suatu teknologi/unit standar yang disebut wadah (container), termasuk keseluruhan standar/keadaan yang diperlukan aplikasi/software agar dapat berfungsi (runtime environment), terdiri dari binaries, configuration file, dependencies & libraries, memastikan keberfungsiannya meskipun berada pada lingkungan/infrastruktur komputasi berbeda, mengoperasikan platform terkait (e.g., Docker, Openshift, K8S, dll.), hingga memanfaatkan fitur registry dari platform tersebut (e.g., push and pull, dll.), sesuai dengan konsep virtual machine berkapasitas memori rendah, guna memudahkan utilisasi aplikasi/software serta menghemat resources",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Application Programming Interface (API)",
                "description" => "Pengetahuan dan kemampuan dalam menyusun rencana & diagram interaksi antar aplikasi, melakukan integrasi/penggabungan hingga penyelarasan bahasa pemrograman dari satu aplikasi dengan aplikasi lainnya berdasarkan pada standar serta protokol terkait integrasi aplikasi (e.g., Representational State Transfer Protocol – URL format, status code), dengan menggunakan alat bantu/tools tertentu (e.g., SoapUI, Apigee, Postman, dll.), sesuai dengan tipe platform dari aplikasi tersebut, guna mengoptimalisasi fitur serta fungsionalitas/penggunaan aplikasi di perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "System Integration",
                "description" => "Pengetahuan dan kemampuan dalam menyelaraskan komponen-komponen ICT terintegrasi (e.g., jaringan, server, platform, interface, sub-sistem, dll.), sesuai protokol penyelarasan yang berlaku, dengan menggunakan teknik/metode integrasi tertentu (e.g., computer networking, enterprise application, manual programming, dll.), serta melalui proses assessment & identifikasi terhadap technical requirement, termasuk mengevaluasi efektivitas penggunaannya, guna mengoptimalisasi kapabilitas & interoperabilitas antar komponen-komponen ICT tersebut",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "ERP Module",
                "description" => "Pengetahuan dan kemampuan dalam menganalisis, merancang, serta mengembangkan kebutuhan modul ERP (Enterprise Resource Planning), guna mengelola berbagai proses bisnis di perusahaan pada satu aplikasi terpusat, termasuk menyusun rekomendasi agar prosesnya menjadi lebih optimal, efektif & efisien",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Cloud Computing",
                "description" => "Pengetahuan dan kemampuan dalam mengembangkan serta mengintegrasikan komponen, infrastruktur, services, serta software melalui virtualisasi, termasuk melakukan konfigurasi kapasitas & jaringan berdasarkan pada prinsip-prinsip virtualisasi berbasis cloud, guna meningkatkan efisiensi, utilisasi, serta fleksibilitas dari teknologi/resources yang ada saat ini",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Machine Learning",
                "description" => "Pengetahuan dan kemampuan dalam memahami & menerapkan konsep kecerdasan buatan (artificial intelligence) dengan melakukan konfigurasi, permutasi data set, serta menentukan algoritma/metode komputasi matematika tertentu untuk menciptakan model 'pembelajaran' (training data) sehingga aplikasi/software mampu menyelesaikan suatu pekerjaan dan/atau menghasilkan solusi secara mandiri",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Internet of Things Management",
                "description" => "Pengetahuan dan kemampuan dalam menganalisis, memformulasikan, serta mengembangkan platform yang dibutuhkan (baik hardware maupun software), melakukan integrasi dan/atau automasi terhadap komponen/perangkat komputasi IT (termasuk sensor/alat penunjangnya), data & konektivitas ke dalam satu jaringan internet, dengan menggunakan enterprise built tools atau open source tools, berdasarkan pada konsep & prinsip-prinsip terkait virtual connectivity, sehingga tercipta suatu solusi spesifik yang sesuai kebutuhan pelanggan",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IT Capacity Planning",
                "description" => "Pengetahuan dan kemampuan dalam menentukan kebutuhan spesifikasi serta kapasitas infrastruktur IT, baik hardware, software, maupun infrastruktur lainnya (e.g., hard disk storage, computing power, software & network resources, dll.), dengan melakukan perhitungan dan analisis terhadap requirement document yang telah disepakati, serta berdasarkan pada prinsip & framework IT Capacity Planning, guna mendukung penyediaan infrastruktur yang optimal dan selaras dengan kebutuhan perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Hardware Infrastructure",
                "description" => "Pengetahuan dan kemampuan dalam melakukan penyediaan, konfigurasi, hingga pengaturan (setting) terhadap komponen-komponen perangkat keras (hardware infrastructure, e.g., storage devices, desktop, computer, printer, dll.) yang dibutuhkan perusahaan, termasuk melaksanakan tes/deaktivasi komponen-komponen tertentu, untuk memastikan infrastruktur tersebut dapat digunakan & berfungsi dengan baik",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Software Infrastructure",
                "description" => "Pengetahuan dan kemampuan dalam melakukan penyediaan, konfigurasi, serta instalasi terhadap komponen-komponen perangkat lunak (software infrastructure) yang dibutuhkan perusahaan, baik berbasis ERP maupun Non ERP, termasuk melaksanakan tes/mencopot pemasangan komponen-komponen tertentu, untuk memastikan infrastruktur tersebut dapat digunakan & berfungsi dengan baik",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Multimedia Infrastructure",
                "description" => "Pengetahuan dan kemampuan dalam melakukan penyediaan, konfigurasi, serta pengaturan (setting) terhadap komponen-komponen layanan multimedia (multimedia infrastructure, e.g., audio video conference, audio visual system, dll.) yang dibutuhkan perusahaan, termasuk melaksanakan tes/deaktivasi komponen-komponen tertentu, untuk memastikan infrastruktur tersebut dapat digunakan & berfungsi dengan baik",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Centre Facilities Management",
                "description" => "Pengetahuan dan kemampuan dalam mempersiapkan, melakukan pengaturan, monitoring/inspeksi secara rutin, mengoperasikan perangkat data centre (e.g., AC/DC, generator, kabel, dll.), hingga menindaklanjuti perihal terkait data centre resources & facilities (e.g., pengaturan energi, alokasi daya, lingkungan sekitar data centre, dll.) sesuai dengan standar fasilitas/perangkat data centre (termasuk resources terkaitnya), guna mendukung kelancaran dan stabilitas operasional data centre di perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IT Asset Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan identifikasi aset, menyusun strategi dan rencana tata kelola aset IT, termasuk memonitor penggunaan, memaksimalkan aset IT sesuai life-cyle-nya masing-masing, melaporkan, hingga memutakhirkan inventory data aset IT, baik secara manual maupun menggunakan tools terkait, serta sesuai dengan kebijakan pengendalian, standar, serta persyaratan manajemen aset yang berlaku",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IT Operation and Maintenance",
                "description" => "Pengetahuan dan kemampuan dalam menyusun petunjuk teknis operasional, melakukan monitoring, hingga pemeliharaan terhadap perangkat & sistem teknologi informasi, termasuk bagian-bagian kritikal pada perangkat IT di perusahaan, guna memastikan efektivitas, keandalan, serta stabilitas operasional IT di perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "End User Support",
                "description" => "Pengetahuan dan kemampuan dalam menerima, menyediakan, hingga mengevaluasi pemberian layanan/dukungan teknis level pertama (first line problems or defect handling) sesuai kebutuhan user (user’s needs) sebagai pengguna dari layanan IT (customer/end user",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IT Problem Management",
                "description" => "Pengetahuan dan kemampuan dalam mengidentifikasi siklus permasalahan, melakukan root cause analysis, mengidentifikasi berbagai kemungkinan solusi permasalahan, melaksanakan penanganan masalah IT, serta mendokumentasikannya sesuai dengan prinsip-prinsip dan proses penanganan masalah IT, guna mencegah terjadinya insiden berulang",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IT Quality Assurance",
                "description" => "Pengetahuan dan kemampuan dalam menyusun standar mutu IT, memonitor, serta mengevaluasi efektivitas implementasi standar mutu IT, termasuk menjamin terlaksananya kepatuhan terhadap standar mutu IT di perusahaan, guna mendukung terciptanya layanan IT yang berkualitas, andal, efektif, efisien, & terstandar",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Alarm Information System Management",
                "description" => "Pengetahuan dan kemampuan dalam menentukan parameter alarm sesuai dengan tipe, karakteristik, prosedur penanganan & standar kualitas operasional IT & jaringan yang telah ditetapkan, memastikan keberfungsian alarm, melakukan diagnosis, deteksi, serta memberikan respon ketika alarm teraktivasi, termasuk melaporkan detail alarm tersebut, jika membutuhkan proses eskalasi untuk menanganinya",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Information Security",
                "description" => "Pengetahuan dan kemampuan dalam membangun, mengembangkan, merencanakan rancang bangun, sistem tata kelola, serta rencana pengamanan aset informasi perusahaan (e.g., arahan bisnis, data in storage, dll.), menerapkan, memonitor, hingga mengevaluasi sistem pengamanan aset informasi perusahaan, sesuai dengan prosedur/standar/ketentuan/aturan keamanan yang berlaku, guna menjamin kerahasiaan (confidentiality), keutuhan (integrity), kehandalan (reliability), dan ketersediaan informasi (availability of information)",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Cyber Security",
                "description" => "Pengetahuan dan kemampuan dalam melakukan identifikasi, monitoring serta investigasi terhadap seluruh aktivitas siber, termasuk menentukan tools/metode yang akan digunakan & memodifikasi sistem pengamanan IT perusahaan dari risiko serangan siber (e.g., peretasan, eksploitasi, pemanfaatan, penggunaan data/informasi perusahaan secara ilegal) secara berkelanjutan, guna memastikan keamanan & kesesuaian pelaksanaan aktivitas siber dengan prosedur/standar yang berlaku",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Access Control and Identity Management",
                "description" => "Pengetahuan dan kemampuan dalam mengidentifikasi, menganalisis, menyediakan, serta memberikan otentikasi hingga otorisasi (izin) untuk mengakses aplikasi maupun data penting di perusahaan, sesuai dengan peran & kewenangan/hak pengguna (Segregation of Duty) masing-masing, termasuk melakukan verifikasi identitas pengguna dengan menggunakan beragam metode, seperti biometrics (e.g., face/eyes recognition, fingerprint scanning, voice identification, dll.), password, OTP, dsb., guna meningkatkan penjagaan terhadap aplikasi/data penting di perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Secure Programming",
                "description" => "Pengetahuan dan kemampuan dalam memahami serta menginput (coding) algoritma/bahasa pemrograman tertentu dengan menerapkan pola pikir seorang peretas & prinsip-prinsip pengkodean yang aman (e.g., OWASP best practices), guna menghasilkan perangkat lunak (software) yang terlindung dari kerentanan, serangan maupun hal-hal terkait lainnya yang dapat menyebabkan kerusakan",
                "is_general_knowledge" => 0,
                "job_family_id" => 5,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Architecture Management",
                "description" => "Pengetahuan dan kemampuan dalam menyusun rancang bangun/rancang biru (blueprint) pengelolaan data, termasuk value chain data management dari sudut pandang luas (helicopter view), melalui proses identifikasi & analisis terhadap spesifikasi kebutuhan data di perusahaan, secara lengkap, akurat, serta selaras dengan rencana strategi & tujuan bisnis perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 6,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Governance",
                "description" => "Pengetahuan dan kemampuan dalam memahami lifecycle & standar practices terkait pengelolaan data, mengidentifikasi, merumuskan, menerapkan, hingga memonitor penerapan pedoman/standar tata kelola data perusahaan berdasarkan siklus hidupnya (termasuk aturan terkait penanganan data yang kompleks, ambigu, dan/atau multi-faset), dengan menggunakan tools tertentu (e.g., IBM data Governance Solutions, dll.), guna mendukung ketersediaan data yang sesuai standar/aturan yang berlaku",
                "is_general_knowledge" => 0,
                "job_family_id" => 6,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Database Design",
                "description" => "Pengetahuan dan kemampuan dalam mengidentifikasi kebutuhan, mengkonseptualisasi, hingga merancang desain alur/skema pengelolaan basis data (database) untuk sejumlah data berskala besar (termasuk mekanisme pemeliharaan, penyimpanan, pengambilan data, dll.) yang sesuai spesifikasi serta requirement perusahaan, berdasarkan pada prinsip-prinsip rancangan desain & strategi pengelolaan basis data (e.g., jenis, elemen, komponen data, requirement pengelolaannya, dll.), dengan menggunakan tools/software tertentu (e.g., Lucidchart, SQLDBM, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 6,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Mining",
                "description" => "Pengetahuan dan kemampuan dalam memahami, mengidentifikasi & mengumpulkan data berbagai sumber-sumber data (data sources) dengan menggunakan teknik-teknik artificial intelligence, statistik, matematika, machine learning, dan lain sebagainya",
                "is_general_knowledge" => 0,
                "job_family_id" => 6,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Integration",
                "description" => "Pengetahuan dan kemampuan dalam menggabungkan data dari berbagai sumber dengan data eksisting di dalam sistem dengan bantuan tools (e.g., Talend Data Integration, IBM InfoSphere, Informatica, dll.), sehingga tercipta basis data yang saling terhubung satu sama lain",
                "is_general_knowledge" => 0,
                "job_family_id" => 6,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Meta Data Management",
                "description" => "Pengetahuan dan kemampuan dalam mendeskripsikan, menjelaskan, serta memuat informasi terkait sekumpulan data (data about data), sehingga mendukung kemudahan proses pengenalan & pencarian data untuk keperluan pengelolaan data dalam suatu basis data",
                "is_general_knowledge" => 0,
                "job_family_id" => 6,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Ingestion and Processing",
                "description" => "Pengetahuan dan kemampuan dalam memeriksa, mengoreksi, menyaring (cleansing), atau menghapus data yang tidak lengkap/tidak sesuai format, serta mengubahnya ke dalam bentuk/format yang dapat dipahami dengan menggunakan ETL (Extract Transform Load) Tools (e.g., Talend, SSIS, dll.), sehingga tersedia data yang relevan & siap untuk ditindaklanjuti dan/atau disimpan ke dalam database",
                "is_general_knowledge" => 0,
                "job_family_id" => 6,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Warehousing",
                "description" => "Pengetahuan dan kemampuan dalam melakukan penyimpanan seluruh data di perusahaan (baik data historis maupun eksisting, e.g., data marketing, pelanggan, keuangan, dll.) pada suatu sistem query terintegrasi (e.g., RDBMS Database, Hadoop, dll.) dengan format yang telah terstruktur, sehingga tersedia one single point of truth untuk seluruh data tersebut",
                "is_general_knowledge" => 0,
                "job_family_id" => 6,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Database Operations",
                "description" => "Pengetahuan dan kemampuan dalam melaksanakan proses monitoring, back-up & recovery, maintenance database dalam sistem (e.g., SQL Web Data Administrator, dll.) berdasarkan pada konsep-konsep pengelolaan database",
                "is_general_knowledge" => 0,
                "job_family_id" => 6,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Quality Management",
                "description" => "Pengetahuan dan kemampuan dalam merencanakan & menyusun standar kualitas data, mengendalikan, serta menerapkan teknik pengelolaan kualitas/mutu untuk mengukur efektivitas implementasi standar tersebut, guna menjamin reliabilitas serta validitas data",
                "is_general_knowledge" => 0,
                "job_family_id" => 6,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Statistical/Mathematical Modelling",
                "description" => "Pengetahuan dan kemampuan dalam mengidentifikasi pola/struktur informasi dari suatu data set hingga menyusun model (predictive dan/atau prescriptive) dengan menggunakan teknik statistik/matematika tertentu (e.g., regresi, klasifikasi, dll.) agar dapat dibuktikan serta dianalisis lebih lanjut",
                "is_general_knowledge" => 0,
                "job_family_id" => 6,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data and Statistical Analytic",
                "description" => "Pengetahuan dan kemampuan dalam melakukan pengujian/analisis terhadap suatu data set dengan menggunakan metode/teknik statistik yang sesuai (e.g., analisis faktor, ANOVA, dll.) untuk membuktikan model/hipotesis tertentu",
                "is_general_knowledge" => 0,
                "job_family_id" => 6,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Statistical Programming",
                "description" => "Pengetahuan dan kemampuan dalam melakukan input bahasa pemrograman (syntax) tertentu ke dalam program/software statistik komersial (e.g., MatLab, SAS, SPSS, dll.) berdasarkan konsep, metodologi, & teknik komputasi statistik tertentu, guna mendukung proses analisis hasil komputasi statistik berbasis program",
                "is_general_knowledge" => 0,
                "job_family_id" => 6,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Interpretation",
                "description" => "Pengetahuan dan kemampuan dalam menarik kesimpulan hingga mencapai makna (insight) dari suatu data set, melalui proses review terhadap hasil analisis data secara, baik menggunakan metode kualitatif (e.g., document/literature review, dll.) maupun kuantitatif (e.g., mean, standard deviation, frequency distribution, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 6,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Storytelling & Visualization",
                "description" => "Pengetahuan dan kemampuan dalam memahami teknik visualisasi data (e.g., line charts, dll.) serta mengilustrasikan makna (insight) dari data set tersebut ke dalam tampilan visual (tabel/diagram/grafik) secara tepat, efektif, optimal, interaktif, serta sesuai dengan audiens yang dituju, dengan menggunakan teknik infografis maupun bantuan tools/software tertentu (e.g., Informatica, Tableau, Qlick View, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 6,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Network Architecture",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan kerangka/rancang bangun jaringan/network (baik core network, radio access network, service platform, maupun network pendukung lainnya) yang terukur, sesuai dengan kebutuhan (baik saat ini maupun akan datang), serta selaras dengan strategi bisnis perusahaan, melalui proses analisis, modeling, benchmark, dll.",
                "is_general_knowledge" => 0,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Radio Access Network Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan analisis kebutuhan serta merumuskan rencana alokasi radio & mobile network, e.g., GSM, UMTS, LTE, frekuensi, spektrum, pola antena, amplitudo, timeslot allocation, scrambling code planning, dll., menyusun desain/permodelan serta perumusan dokumen teknis terkait radio access network, melakukan pemasangan/connecting/instalasi, integrasi, konfigurasi, baik secara langsung (melalui command line, dll.) maupun menggunakan sistem konfigurasi tertentu, serta peluncuran radio access network untuk mengakomodasi jaringan GSM, UMTS, LTE, dll. yang stabil, akurat, tepat guna & sejalan dengan kebutuhan end-user dan memaksimalkan alokasi kapasitas serta jangkauan radio access network berdasarkan perkiraan awal traffic (dalam Erlang) maupun analisis cell profile (dalam bps), melakukan evaluasi kinerja jaringan, hingga memberikan rekomendasi terkait utilisasi/optimasi radio access network (Signal Interference Ratio), guna mendukung kualitas operasional jaringan secara berkelanjutan,",
                "is_general_knowledge" => 0,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Core Network Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan analisis kebutuhan serta merumuskan rencana alokasi jaringan telekomunikasi berkapasitas tinggi (core network & service platform), e.g., VoIP, DSL, TV, internet, e-mail, dll., menyusun desain/permodelan serta perumusan dokumen teknis terkait core network & service platforms, melakukan pemasangan/connecting/instalasi, integrasi, konfigurasi, baik secara langsung (melalui command line, dll.) maupun menggunakan sistem konfigurasi tertentu, serta peluncuran jaringan telekomunikasi berkapasitas tinggi (core network & service platform), untuk mengakomodasi jaringan VoIP, DSL, TV, internet, e-mail, dll. yang stabil, akurat, tepat guna & sejalan dengan kebutuhan end-user, dan memaksimalkan alokasi kapasitas serta jangkauan core network and service platforms (link loading, queuing delay, performance with ping, ping path, dll.), melakukan evaluasi kinerja jaringan, hingga memberikan rekomendasi terkait utilisasi/optimasi core network and service platforms (e.g., IT backbone, signaling, switching & routing), guna mendukung kualitas operasional jaringan secara berkelanjutan",
                "is_general_knowledge" => 0,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Transport Network Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan analisis kebutuhan serta merumuskan rencana alokasi transport network, e.g., OSI layer, TCP/IP & protokol dasar routing, menyusun desain/permodelan serta perumusan dokumen teknis terkait transport network, guna menyediakan desain jaringan OSI layer, TCP/IP, dll. yang berkualitas & selaras dengan arsitektur & rencana network perusahaan, pemasangan/connecting/instalasi, integrasi, konfigurasi, baik secara langsung (melalui command line, dll.) maupun menggunakan sistem konfigurasi tertentu, serta peluncuran transport network untuk mengakomodasi jaringan OSI layer, TCP/IP, dll. yang stabil, akurat, tepat guna & sejalan dengan kebutuhan end-user, dan memaksimalkan alokasi kapasitas serta jangkauan transport network, melakukan evaluasi kinerja jaringan, hingga memberikan rekomendasi terkait utilisasi/optimasi transport network, guna mendukung kualitas operasional jaringan secara berkelanjutan",
                "is_general_knowledge" => 0,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Datacomm",
                "description" => "Pengetahuan dan kemampuan dalam memahami prinsip-prinsip terkait konfigurasi jaringan datacomm, merumuskan standar, melaksanakan instalasi, hingga menghubungkan/ mengkoneksikan jaringan datacomm, termasuk melakukan verifikasi serta optimasi ke site (melalui WAN)",
                "is_general_knowledge" => 0,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Network Function Virtualization",
                "description" => "Pengetahuan dan kemampuan dalam melakukan virtualisasi keseluruhan perangkat fungsi network (e.g., Routing, Network Address Translation, DNS, dll.) berdasarkan pada prinsip-prinsip & metode virtualisasi jaringan, guna menciptakan layanan komunikasi tanpa bergantung pada network hardware (physical network function)",
                "is_general_knowledge" => 0,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "NFV Infrastructure (NFVI) Planning",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan standar operasional, storage, serta network resources dengan mempertimbangkan network architecture untuk menentukan komponen perangkat (hardware maupun software) yang mendukung keberlangsungan virtualisasi jaringan secara berkelanjutan",
                "is_general_knowledge" => 0,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Software Defined Networking",
                "description" => "Pengetahuan dan kemampuan dalam menentukan metode atau paradigma, mengatur, hingga memisahkan Control Plane & Forwarding Plane pada jaringan tradisional (non-SDN) menjadi suatu jaringan terpusat, pada satu perangkat yang sama, berdasarkan protokol OpenFlow dengan menggunakan emulator maupun teknik lainnya (e.g., SD-WAN, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IP Network Configuration",
                "description" => "Pengetahuan dan kemampuan dalam memahami, menentukan, hingga melakukan pengaturan rute terhadap angka-angka numerikal spesifik tertentu (IP Address) secara tepat, sesuai dengan protokol yang telah ditentukan, guna menghubungkan perangkat jaringan melalui internet serta mengoptimalkan efektivitas & efisiensi jaringan",
                "is_general_knowledge" => 0,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Network Quality Assurance",
                "description" => "Pengetahuan dan kemampuan dalam menyusun standar mutu jaringan telekomunikasi, memonitor, serta mengevaluasi efektivitas implementasi standar mutu jaringan berdasarkan pada konsep & prinsip-prinsip pengelolaan kualitas mutu jaringan telekomunikasi, termasuk menjamin terlaksananya compliance terhadap standar mutu jaringan di perusahaan, guna mendukung terciptanya layanan jaringan yang berkualitas, andal, sesuai tujuan perusahaan & ekspektasi pelanggan",
                "is_general_knowledge" => 0,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Network Operation and Maintenance",
                "description" => "Pengetahuan dan kemampuan dalam melakukan monitoring serta memelihara kinerja sistem maupun perangkat operasional network (baik core network, radio access network, service platform, maupun network pendukung lainnya) berdasarkan pada prinsip-prinsip pemeliharaan jaringan, guna mencapai jaringan yang optimal & meminimalisasi downtime (network availability)",
                "is_general_knowledge" => 0,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Network Problem Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan analisis potensi gangguan/insiden terkait network (baik analisis secara mandiri maupun hasil eskalasi), melaksanakan root cause analysis, menyusun action plan untuk memperbaiki gangguan/insiden tersebut (generik atau spesifik), serta melakukan pemulihan terhadap network berdasarkan pada prinsip-prinsip, tata cara & teknik penanganan masalah jaringan, termasuk mencegah & meminimalisir terjadinya insiden berulang",
                "is_general_knowledge" => 0,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Telecommunication Network Security",
                "description" => "Pengetahuan dan kemampuan dalam memahami serta melakukan identifikasi mekanisme & model penanganan ancaman (e.g., access control network structure, transmission methods, transport formats, dll.), menyusun langkah-langkah, memonitor, hingga mengevaluasi proses pengamanan jaringan (e.g., packet filtering, firewalls, dll.) guna menjaga integritas, ketersediaan, otentikasi & kerahasiaan informasi yang dikirimkan melalui telecommunication network",
                "is_general_knowledge" => 0,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Service Platform Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan analisis kebutuhan serta merumuskan rencana alokasi service platform, menyusun desain/permodelan serta perumusan dokumen teknis terkait service platforms, pemasangan/connecting/instalasi, integrasi, konfigurasi, baik secara langsung (melalui command line, dll.) maupun menggunakan sistem konfigurasi tertentu untuk service platform, memaksimalkan alokasi kapasitas service platforms (link loading, queuing delay, performance with ping, ping path, dll.), melakukan evaluasi kinerja jaringan, hingga memberikan rekomendasi terkait utilisasi/optimasi service platforms guna mendukung kualitas operasional jaringan secara berkelanjutan",
                "is_general_knowledge" => 0,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Centre Network Management",
                "description" => "Pengetahuan dan kemampuan dalam mempersiapkan serta mengoperasikan perangkat data centre (e.g., AC/DC, generator, kabel, dll.), termasuk melaksanakan inspeksi rutin, guna mencapai kondisi jaringan data centre yang stabil & konsisten",
                "is_general_knowledge" => 0,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Power Supply Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan monitoring, kontrol, serta penilaian penggunaan daya, termasuk menjalankan perangkat (e.g., generator, pemasangan baterai, dll.), hingga mendistribusikan pasokan daya, sesuai dengan prinsip-prinsip pendistribusian pasokan daya, guna mendukung keberlangsungan jaringan",
                "is_general_knowledge" => 0,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Network Infrastructure Installation",
                "description" => "Pengetahuan dan kemampuan dalam menyusun rencana, melakukan persiapan, hingga melaksanakan pembangunan/pemasangan infrastruktur/prasarana (e.g., tower, kabel, jalur pipa, dll.) pada lokasi yang telah ditentukan sesuai dengan jenis-jenis prasarana/infrastruktur jaringan, standar & aturan yang berlaku",
                "is_general_knowledge" => 0,
                "job_family_id" => 7,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Project Initiation & Planning",
                "description" => "Pengetahuan dan kemampuan dalam menyusun objektif, batasan/jangkauan proyek, rencana aktivitas, penjadwalan, manajemen risiko, sumber daya (e.g., financial, man hour planning, dll.), dan aspek lainnya ke dalam project charter, berdasarkan pada prinsip, tools, informasi dan teknik yang digunakan dalam project initiation (e.g., Project Management Information System (PIMS), dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 8,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Project Quality Management",
                "description" => "Pengetahuan dan kemampuan dalam menentukan standar kualitas proyek, melaksanakan inspeksi, review ataupun walkthrough, melakukan analisa quality control (pareto charts, cause and effect diagrams, etc.), melakukan pengukuran komponen keberhasilan (based on quality metrics) dan memberikan rekomendasi perbaikan guna memastikan kualitas proyek sesuai dengan kebutuhan dan ekspektasi stakeholders (terdiri dari timeline/milestone, cost, material, etc.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 8,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Agile & Scrum Management",
                "description" => "Pengetahuan dan kemampuan dalam memahami serta mengimplementasikan prinsip Agile yang menekankan incremental delivery, team collaboration, continual planning & continual learning serta menerapkan metodologi scrum yang meliputi pembagian peran (master scrum, product owner, tim scrum), menentukan prioritas pekerjaan/ backlog, mendelegasikan tugas, tenggat waktu sprint dan rangkaian siklus pelaksanaan (before, during, after sprint) guna memperbaiki/memperoleh suatu solusi dalam mengembangkan produk ataupun menyelesaikan suatu output secara bertahap dan cepat baik dalam bidang teknologi (e.g., bug fixes, new features, etc.), marketing, event planning, dan proyek lainnya",
                "is_general_knowledge" => 0,
                "job_family_id" => 8,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Project Execution Management",
                "description" => "Pengetahuan dan kemampuan dalam memahami serta mengimplementasikan jangkauan/ batasan proyek, jadwal, manajemen risiko, sumber daya dan aspek lainnya yang telah tertera di project charter ke dalam proses pelaksanaan proyek, mendelegasikan tugas, mengarahkan, memberi masukan & problem solving di lapangan, mengawasi, melakukan evaluasi, mengomunikasikan proses pelaksanaan proyek kepada stakeholders serta memastikan pelaksanaan sesuai dengan aspek teknis, tenggat waktu, dan anggaran proyek",
                "is_general_knowledge" => 0,
                "job_family_id" => 8,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Strategic Procurement",
                "description" => "Pengetahuan dan kemampuan dalam menyusun strategi pengadaan (klasifikasi, perkiraan data, termasuk budget impact) untuk setiap kategori, menyusun prioritas pengadaan, hingga menyusun rencana spesifik kegiatan pengadaan, berdasarkan pada pemahaman tentang kebutuhan pengadaan setiap business, data ekonomi (e.g. index kemahalan harga, makroekonomi, inflasi, dll.), data mapping kategori, dll., sehingga dapat meningkatkan value kegiatan pengadaan termasuk didalamnya dapat mengurangi biaya kegiatan pengadaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 9,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Category Management",
                "description" => "Pengetahuan dan kemampuan menyusun definisi setiap category, melakukan spend analysis dan cost breakdown, menggunakan software category management tertentu, melakukan supply market analysis hingga proses continuous improvement, berdasarkan pada pemahaman tentang category management cycle, strategi organisasi, pemutakhiran perkiraan harga, kinerja supplier, dll, guna menghasilkan strategy category yang dapat menurunkan waktu proses PO, mengurangi biaya pengadaan dan risiko pada proses supply chain",
                "is_general_knowledge" => 0,
                "job_family_id" => 9,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Procurement Sourcing",
                "description" => "Pengetahuan dan kemampuan dalam melakukan penilaian kebutuhan pengadaan user internal, menyusun spesifikasi kebutuhan pengadaan, mencari vendor serta mengumpulkan katalog vendor, melakukan RFI process hingga RFQ process, dengan menggunakan beberapa tools (e-sourcing, e-RFX, e-auction,dll.), berdasarkan pada pengetahuan supplier sourcing process, guna menghasilkan supplier terbaik untuk setiap kategori",
                "is_general_knowledge" => 0,
                "job_family_id" => 9,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Procurement Contract Monitoring",
                "description" => "Pengetahuan dan kemampuan dalam melakukan proses monitoring secara berkala, melakukan test (secara acak) dan tindak lanjut dari kualitas produk/layanan, melakukan pengelolaan risiko, menyediakan rekomendasi dan penyelesaian permasalahan/mediasi pada kontrak yang sedang berjalan, guna menghasilkan produk/layanan yang sesuai dengan kesepakatan/kontrak & KPI",
                "is_general_knowledge" => 0,
                "job_family_id" => 9,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Requisition to Purchase (R2P)",
                "description" => "Pengetahuan dan kemampuan dalam menindaklanjuti permintaan pengadaan, melakukan pemesanan barang maupun jasa, serta melakukan penerimaan barang dan jasa pada sistem, berdasarkan pada pengetahuan tentang procurement/e-procurement, guna menghasilkan kegiatan pengadaan yang efektif dan efisien",
                "is_general_knowledge" => 0,
                "job_family_id" => 9,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Supplier Relationship Management",
                "description" => "Pengetahuan dan kemampuan dalam menyusun segmentasi supplier, menyusun strategi pengelolaan supplier, menyusun kriteria dan monitoring kinerja supplier, serta melakukan pembinaan terhadap supplier (e.g., memberikan informasi-informasi penting kepada key supplier dll.), berdasarkan procurement life cycle dan pillars of vendor management success, guna mendukung optimalisasi proses supply chain serta meningkatkan hubungan antara buyer dan supplier",
                "is_general_knowledge" => 0,
                "job_family_id" => 9,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Integrated Management Export and Import",
                "description" => "Pengetahuan dan kemampuan dalam melakukan pelaksanaan teknis, melakukan transaksi (e.g., perizinan, dll) serta menyelesaikan permasalahan yang terjadi dengan berbagai pihak, berdasarkan pada tata laksana/prosedur ekspor, impor, kepabeanan, mekanisme perdagangan dan transportasi internasional (e.g., pihak-pihak yg terlibat, dll) serta dokumen-dokumen ekspor impor yang dibutuhkan, guna menghasilkan proses ekspor-impor yang efektif, efisien serta meminimalisir permasalahan-permasalahan yang akan timbul",
                "is_general_knowledge" => 0,
                "job_family_id" => 9,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Inventory Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan pengendalian & pengawasan pembelian dari supplier serta melakukan pengendalian/pemantauan jumlah stock (dapat dilakukan secara digital maupun non digital) termasuk penentuan safety stock, berdasarkan pada basic supply chain concept, guna menghasilkan stock gudang yang tepat jumlah dan tepat waktu serta meminimalisir pengeluaran biaya yang berlebih",
                "is_general_knowledge" => 0,
                "job_family_id" => 9,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Warehousing",
                "description" => "Pengetahuan dan kemampuan dalam penerimaan barang, penentuan penyimpanan barang (e.g., penataan layout, optimalisasi kapasitas muat, persiapan alat bantu, dll.), pelaksanaan opname, pengeluaran barang, serta melakukan perawatan barang pada gudang, berdasarkan pada fungsi dan peran dalam pengelolaan gudang, guna menyediakan arus barang yang tertata dengan rapi, teratur, dan dapat diperiksa jika sewaktu-waktu diperlukan serta dapat meminimalisir pengeluaran biaya yang berlebih",
                "is_general_knowledge" => 0,
                "job_family_id" => 9,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Distribution Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan identifikasi kebutuhan pengiriman, perencanaan fasilitas, perencanaan biaya, pemilihan moda transportasi, penentuan drop point, serta melakukan pengecekan persediaan distribusi, berdasarkan pada prinsip sistem distribusi dan kebutuhan pengiriman barang, guna menghasilkan proses penyaluran/distribusi yang tepat jumlah dan waktu",
                "is_general_knowledge" => 0,
                "job_family_id" => 9,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Production Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan perencanaan produksi (e.g penentuan jenis barang, bahan baku, kualitas & kualitas barang, dll.), melakukan pengendalian produksi (e.g., penyusunan jadwal kerja, penentuan target market produk, dll.) serta melakukan pengawasan produksi (e.g penetapan kualitas barang, penetapan standar barang, produksi sesuai jadwal, dll), berdasarkan pada prinsip-prinsip sistem manajemen produksi dan memahami kebutuhan produksi, guna menghasilkan produk serta menjalankan proses produksi yang sesuai kualitas, jumlah, & waktu",
                "is_general_knowledge" => 0,
                "job_family_id" => 9,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Corporate Culture Management",
                "description" => "Pengetahuan dan kemampuan melakukan culture gap assessment, melalui penyebaran instrumen pengukuran tertentu (e.g., OCAI, dll.), merancang desain budaya (core values) yang selaras dengan tujuan perusahaan, serta berdasarkan pada prinsip-prinsip penyusunan/ pengembangan budaya perusahaan, termasuk menyusun program hingga melaksanakan internalisasi budaya perusahaan, guna memastikan penerapan budaya perusahaan pada seluruh aspek kegiatan di organisasi",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Organization Structure Design",
                "description" => "Pengetahuan dan kemampuan dalam mendesain struktur organisasi sesuai dengan strategi & kebutuhan bisnis perusahaan (e.g. organistic structure, mechanistic structure, dll.), berdasarkan pada prinsip-prinsip & model desain organisasi, serta melalui proses identifikasi isu/permasalahan/kebutuhan terkait perubahan/perbaikan struktur organisasi (e.g., perubahan bisnis, proses bisnis, beban kerja, teknologi, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Workforce Planning",
                "description" => "Pengetahuan dan kemampuan dalam menganalisis manpower supply and demand dengan menggunakan berbagai tools maupun metode (e.g., 9-Box Grid, HR Dashboarding, dll.), menyusun strategi & melakukan proyeksi kebutuhan (e.g. build, buy, borrow) berdasarkan pada analisis beban kerja (WLA), working time, size pekerjaan, dll., serta berpedoman pada aturan/regulasi terkait perencanaan tenaga kerja, guna mendukung tersedianya alokasi tenaga kerja yang sesuai kapabilitas organisasi (kritikal/tidak) & sejalan dengan strategi serta arah bisnis perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Job Analysis",
                "description" => "Pengetahuan dan kemampuan dalam memahami komponen-komponen dari sebuah uraian jabatan, mengumpulkan & menganalisis informasi terkait tugas & tanggung jawab jabatan dengan metode-metode tertentu (e.g., RASCI Matrix, dll.), termasuk mengintegrasikan seluruh atribut jabatan (e.g., job role, job family, dll.) di perusahaan, sehingga menghasilkan uraian tugas & tanggung jawab serta job/position profile, yang akurat, komprehensif, dan terukur",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Job Evaluation",
                "description" => "Pengetahuan dan kemampuan dalam menyusun rencana, menentukan metodologi evaluasi jabatan, hingga melakukan pembobotan jabatan (job valuation) berdasarkan pada pemahaman terhadap tugas & tanggung jawab jabatan, dengan menggunakan metode penilaian terstandar (e.g., factor comparison, dll.), guna menghasilkan job grade yang terukur dan berdasar (memiliki rationale serta evidence yang kuat), sehingga dapat dipertanggungjawabkan/dipresentasikan kepada pihak-pihak terkait",
                'is_general_knowledge' => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Competency Modelling",
                "description" => "Pengetahuan dan kemampuan dalam mengidentifikasi tipe & elemen-elemen terkait penetapan model/framework kompetensi, menentukan tujuan, mendesain arsitektur kompetensi, serta melakukan penyusunan kompetensi (baik kompetensi teknis maupun perilaku), meliputi penjabaran nama, definisi & kriteria pengukurannya (proficiency level), berdasarkan pada proses bisnis, tinjauan literatur, riset, interview, dll., sehingga tersedia arsitektur & kompetensi yang akurat, komprehensif, terukur, terstandar, selaras dengan visi, misi & nilai perusahaan, serta mampu mendapatkan buy in oleh pihak manajemen terkait",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Knowledge Management",
                "description" => "Pengetahuan dan kemampuan dalam mengidentifikasi tipe-tipe knowledge management system, melakukan pengumpulan & pemrosesan pengetahuan di perusahaan, baik tertulis (formal/explicit knowledge) maupun tak tertulis (tacit knowledge), termasuk menentukan, mengoptimasi & mengevaluasi efektivitas sistem pengelolaan pengetahuan yang tengah berlaku di perusahaan (e.g., Concord, Docebo, Travitor, Thought Industries, dll.), serta mendorong terciptanya kebiasaan saling berbagi pengetahuan (knowledge sharing/transfer knowledge) sehingga menjadi knowledge capital bagi perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Candidate Sourcing",
                "description" => "Pengetahuan dan kemampuan dalam memahami, mereview, serta mengidentifikasi tipe/model sourcing (aktif vs pasif), channel & metode sourcing & kompetensi Telkomsel, menyusun strategi, rencana, mengoptimalisasi channel, menentukan metode sourcing yang efektif, hingga melaksanakan pencarian kandidat potensial (potential candidates) melalui social networking websites, referrals, dll., sesuai dengan requirement & kompetensi yang dibutuhkan perusahaan (meets requirement & competency",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Selection",
                "description" => "Pengetahuan dan kemampuan dalam melakukan pengumpulan berkas/dokumentasi yang dibutuhkan (e.g., CV potential candidates, dll.), menentukan metode, menyusun agenda, kriteria, dll., menyaring, hingga mengevaluasi hasil assessment, baik terhadap kandidat internal maupun eksternal, dengan menggunakan metode-metode assessment tertentu (e.g. wawancara, dll.), berdasarkan pada prinsip-prinsip serta etika pelaksanaan seleksi, guna mendapatkan kandidat yang mampu memenuhi requirement kompetensi Telkomsel & paling tepat (suitable candidates) untuk mengisi posisi di organisasi",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Employee Placement",
                "description" => "Pengetahuan dan kemampuan dalam mengumpulkan data hasil seleksi, memberikan rekomendasi terkait pengaturan posisi/penempatan bagi para karyawan (dapat melalui job person matching, assessment, wawancara, maupun metode lainnya) sesuai dengan prinsip-prinsip & metode yang telah ditetapkan, guna menentukan the right man on the right place, right time & right reason",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Onboarding Management",
                "description" => "Pengetahuan dan kemampuan dalam mengidentifikasi kebutuhan, aturan & tipe-tipe program orientasi karyawan (onboarding), menyusun program, memfasilitasi, memonitor proses orientasi pada karyawan yang menduduki posisi baru (baik untuk karyawan baru maupun karyawan eksisting), hingga menganalisis feedback terkait program orientasi, guna memastikan terciptanya pemahaman akan tugas & tanggung jawab jabatannya, mendukung tumbuhnya employee engangement, mengantisipasi munculnya rasa kecemasan & stress kerja, serta mencapai keberhasilan dalam pekerjaannya",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Career Framework Design",
                "description" => "Pengetahuan dan kemampuan dalam melakukan identifikasi journey dari suatu jabatan ke jabatan lain di perusahaan, serta merumuskan desain arah & jalur pergerakan karir (career map & movement, career ways) untuk setiap jabatan, termasuk rotasi, mutasi & promosi, baik di dalam, ke luar organisasi, maupun dari luar organisasi—karyawan eksternal (e.g. exchange, dll.), sesuai dengan prinsip-prinsip & hierarki pengembangan jalur karir yang telah ditetapkan perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Succession Planning",
                "description" => "Pengetahuan dan kemampuan dalam menyusun strategi & rencana suksesi, mengidentifikasi/menyeleksi (employee profiling) dengan melakukan pendekatan sistematik tertentu (e.g., assessment, pengumpulan aspirasi pegawai, informasi terkait IDP, dll.), berdasarkan pada prinsip-prinsip terkait succession management, guna mempersiapkan calon pengganti yang baik (good-calibre employee) serta memastikan kontinuitas peran-peran untuk seluruh posisi di perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Employee Performance Management",
                "description" => "Pengetahuan dan kemampuan dalam menyusun, mereview, menyepakati, memonitor, hingga mengevaluasi pencapaian target kinerja individual, baik dari segi jumlah pencapaian (number of achievement) maupun cara pencapaian (how to achieve), untuk performance ataupun non-performance, pada periode triwulanan, semesteran, atau tahunan, berdasarkan pada performance management cycle, termasuk menentukan tools Performance Management System yang sesuai untuk digunakan (e.g., Balance Scorecard, OKR, 4DX, dll.), guna menghasilkan rekomendasi yang mendukung peningkatan efektivitas, efisiensi, & kualitas pencapaian individu terkait pekerjaannya",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Employee Assessment",
                "description" => "Pengetahuan dan kemampuan dalam menentukan metodologi yang tepat, melaksanakan pengukuran/penilaian terhadap kompetensi karyawan (KSA – baik kompetensi teknis maupun behavior) melalui observasi langsung, online/offline assessment, studi kasus, feedback, dll., hingga melaporkan hasil gap assessment (assessment report)—informasi terkait kesenjangan antara persyaratan kompetensi jabatan dengan kompetensi karyawan—sebagai dasar dalam proses pengembangan/pembinaan karyawan",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Coaching & Counselling",
                "description" => "Pengetahuan dan kemampuan dalam melakukan review kekuatan serta kelemahan target karyawan yang akan dibimbing, menyusun rencana (meliputi tujuan, urgensi/alasan pelaksanaan, dll.) & melaksanakan proses pembinaan & pembimbingan (melalui tukar pikiran/sharing, refleksi, mendengar, bertanya, dll.), hingga mereview progress karyawan secara berkala, sesuai dengan kriteria/standar performance yang diharapkan, guna mendukung pengembangan potensi & produktivitas pekerja, termasuk membantu mereka mengatasi hambatan dalam dunia kerja",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Learning Need Analysis",
                "description" => "Pengetahuan dan kemampuan dalam melakukan identifikasi & analisis kebutuhan pembelajaran, serta menerjemahkan kapabilitas/kompetensi yang dibutuhkan untuk menghasilkan suatu outcomes, berdasarkan hasil assessment, penyebaran kuesioner, survey, interview, dll., hingga menyusun prioritas kebutuhan pembelajaran yang selaras dengan kepentingan bisnis perusahaan, sebagai dasar pembentukan program pembelajaran",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Learning Design & Evaluation",
                "description" => "Pengetahuan dan kemampuan dalam melakukan penyusunan roadmap & rancangan program pembelajaran, yang meliputi kurikulum, jadwal/kalender dan silabus pembelajaran secara detail serta sesuai dengan kebutuhan kompetensi Telkomsel, menentukan metode pembelajaran yang akan digunakan berdasarkan pada hasil learning need analysis, termasuk mensosialisasikan program pembelajaran tersebut kepada pihak-pihak yang terkait, hingga melakukan evaluasi efektivitas program pembelajaran berdasarkan kriteria pengukuran yang terstandar (dengan menggunakan kuesioner, survei, checklist, dll.), guna menghasilkan rekomendasi perbaikan program pembelajara",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Learning Delivery Technique",
                "description" => "Pengetahuan dan kemampuan dalam memfasilitasi, memberi pengajaran, serta menyampaikan materi pembelajaran (baik secara langsung maupun virtual) sesuai dengan materi & kurikulum yang telah disusun guna meningkatkan pengetahuan/keterampilan/kompetensi bagi para peserta",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Compensation Management",
                "description" => "Pengetahuan dan kemampuan dalam menyusun strategi, program, hingga melakukan evaluasi terhadap sistem pemberian kompensasi (cash) yang kompetitif (internal & eksternal), engaged, adil, dan terjangkau bagi finansial perusahaan, dengan memperhatikan prinsip-prinsip, tipe & faktor-faktor yang mempengaruhi sistem pemberian kompensasi (e.g., aturan/regulasi terkait, dll.), termasuk menentukan tools pengelolaan kompensasi yang sesuai dengan kebutuhan perusahaan (e.g., Workday HCM, Paycom, UltiPro, Payfactors, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Benefit Management",
                "description" => "Pengetahuan dan kemampuan dalam menyusun strategi, program, hingga melakukan evaluasi terhadap sistem pemberian fasilitas tambahan/benefit (cash/non-cash) yang kompetitif (internal & eksternal), engaged, adil, dan terjangkau bagi finansial perusahaan, dengan memperhatikan prinsip-prinsip, tipe & faktor-faktor yang mempengaruhi sistem pemberian fasilitas tambahan/benefit (e.g., aturan/regulasi terkait, dll.), termasuk menentukan tools pengelolaan benefit yang sesuai dengan kebutuhan perusahaan (e.g., Rippling, BenefitFocus, Happay, Ledgy, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Board Remuneration Management",
                "description" => "Pengetahuan dan kemampuan dalam menyusun strategi, program, hingga melakukan evaluasi terhadap sistem pemberian fasilitas tambahan/benefit (cash/non-cash) untuk Board yang kompetitif (internal & eksternal), engaged, adil, dan terjangkau bagi finansial perusahaan, dengan memperhatikan prinsip-prinsip & standar pemberian remunerasi terhadap jabatan-jabatan eksekutif di pasaran, termasuk faktor-faktor yang mempengaruhinya (e.g., aturan/regulasi terkait, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Payroll Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan perhitungan & menentukan nominal penggajian, sesuai dengan prinsip, standar maupun aturan/regulasi yang berlaku, serta mempertimbangkan komponen-komponen terkait, seperti jabatan, masa kerja, pinjaman, tunjangan, Jamsostek, overtime, PPh 21, dll., mengelola proses pembayaran gaji secara akurat (tepat waktu, jumlah, sasaran/orang, dll.), hingga menghasilkan laporan penggajian",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Work Norms, Policies & Procedures",
                "description" => "Pengetahuan dan kemampuan dalam mengelola serta memonitor implementasi norma & syarat-syarat kerja yang mengatur hak & kewajiban pekerja dan perseroan—seperti tertuang dalam PKB & Undang-Undang—termasuk status pekerja (e.g., alih daya, pemborongan kerja, karyawan tetap, karyawan tidak tetap, dll.) dengan mempertimbangkan kepentingan kedua belah pihak",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Labour and Industrial Law",
                "description" => "Pengetahuan dan kemampuan dalam memahami, mengidentifikasi, serta mengevaluasi dampak dari aturan-aturan hukum, baik nasional maupun internasional, yang berkaitan dengan aturan hubungan industrial & ketenagakerjaan di perusahaan (e.g., UU No.13 terkait Ketenagakerjaan, dll.), termasuk menangani perselisihan/penyelesaian sengketa terkait hubungan industrial non litigasi (bipartid, tripartid, dll.), guna memberikan perlindungan hukum bagi pekerja maupun perusahaan serta meminimalisasi terjadinya resiko yang dapat menimbulkan permasalahan hingga merugikan pekerja & perseroan",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Building and Maintaining Industrial Relation",
                "description" => "Pengetahuan dan kemampuan dalam memahami standar, prinsip, aturan-aturan hukum terkait, & struktur relasi para pemangku kepentingan yang berpengaruh (e.g., Serikat, Disnaker, Imigrasi, Parent Company, dll.), termasuk melakukan pembinaan hubungan yang harmonis dengan mereka, guna mendukung pembentukan keputusan-keputusan penting serta penyelesaian permasalahan terkait hubungan industrial",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Employer Branding",
                "description" => "Pengetahuan dan kemampuan dalam menyusun program pengembangan brand perusahaan (employer brand), yakni dengan menunjukkan nilai-nilai positif dari budaya organisasi, pengalaman bekerja, hingga penawaran yang diberikan oleh perusahaan (employment experience, benefits, dll.) serta memperhatikan trend branding yang digunakan perusahaan lain untuk menarik para pencari kerja, guna mendukung terciptanya reputasi organisasi yang dapat dipercaya sebagai daya tarik bagi para pencari kerja & menciptakan value proposition untuk meningkatkan employee engagement bagi pekerja",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Employee Engagement",
                "description" => "Pengetahuan dan kemampuan dalam menyusun program peningkatan komitmen & keterikatan karyawan (employee engagement) di perusahaan, baik menggunakan cara konvensional maupun bantuan tools (e.g., CakeHR, ProofHub, Hi5, dll.), dengan memperhatikan trend program employee engagement di perusahaan lain, serta melakukan evaluasi efektivitas/dampak program tersebut (tercermin dari indeks employee engagement yang diukur melalui survei), guna mendukung terciptanya komitmen & keterikatan karyawan yang mendorong sikap kerja yang efektif, aktif, proaktif, serta memunculkan kesediaan untuk going the extra miles",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "HC Service Management",
                "description" => "Pengetahuan dan kemampuan dalam mengidentifikasi kebutuhan serta merancang model/desain layanan HC (mekanisme, standar, service level, dll.) sesuai dengan prosedur manajemen mutu, spesifikasi pelayanan & kebutuhan perusahaan, hingga memberikan pelayanan terintegrasi sesuai dengan SLA yang berlaku, termasuk mengukur kualitas pelayanan HC dengan menyebarkan survei kepuasan pelayanan (user satisfaction surveys",
                "is_general_knowledge" => 0,
                "job_family_id" => 10,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Financial Modeling",
                "description" => "Pengetahuan dan kemampuan dalam menguji beberapa skenario terkait perencanaan biaya, anggaran dan sumber daya finansial lainnya sebagai pengambilan keputusan keuangan perusahaan (capital allocation, raising capital, dll.), melalui proses menganalisa historical kinerja keuangan perusahaan & asumsi proyeksi kondisi keuangan kedepannya, merumuskan suatu gambaran/model keuangan yang terukur, fleksibel, komprehensif yang mampu menyesuaikan dengan ketidakpastian variabel-variabel ekonomi dan bisnis melalui simulasi kondisi keuangan yang akan datang (dengan memanfaatkan fitur-fitur Ms. Excel atau tools lainnya) yang selaras dengan Corporate Strategy & rencana bisnis",
                "is_general_knowledge" => 0,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Capital Market Analysis",
                "description" => "Pengetahuan dan kemampuan dalam memahami pasar modal dan perundang-undangan yang berlaku, menganalisis informasi (e.g laporan keuangan, dll.), risiko, regulasi & perkembangan tren/situasi pasar modal serta memberikan rekomendasi yang berhubungan dengan aktivitas perusahaan di pasar modal (aktivitas korporat dalam mengakuisisi, menahan, atau menjual saham tertentu)",
                "is_general_knowledge" => 0,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Financial Planning",
                "description" => "Pengetahuan dan kemampuan dalam melakukan evaluasi status keuangan perusahaan (regard to income, savings, expenses, debts, dll.), menentukan tujuan, jangka waktu, dan rencana kebijakan keuangan (benefit pekerja, investasi, portofolio, dll.), mengimplementasikan serta melakukan monitor dan re-evaluasi pelaksanaan rencana keuangan secara keseluruhan yang selaras dengan tujuan strategis perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Budgeting",
                "description" => "Pengetahuan dan kemampuan dalam menggambarkan intensi manajemen dalam memperoleh dan menggunakan sumber daya, untuk mencapai tujuan strategis perusahaan, melalui proses analisis finansial, alokasi sumber daya, koordinasi proses anggaran yang meliputi menetapkan target, jangka waktu, koordinasi top-down dan bottom-up, distribusi sumber keuangan, mencari sinergi pada konsolidasi serta evaluasi perencanaan anggaran perusahaan, berdasarkan pada prinsip, teknik, dan proses penganggaran perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Financial Forecasting",
                "description" => "Pengetahuan dan kemampuan dalam memprediksi future income dan expense bisnis perusahaan secara akurat, melalui proses menentukan tujuan, periode, dan teknik-teknik forecasting yang sesuai (e.g., statistical method, time series method, delphi method, dll.), menganalisis data/informasi operasional perusahaan (e.g., cash, sales, inventory, people, dll.), menyusun financial forecast (estimate revenue, profit, raw material cost, labour cost, dll.), melakukan monitor ketepatan/keakuratan dari forecasting, menyusun financial re-forecasting (jika dibutuhkan) serta memberikan rekomendasi atas perbaikan proses & prosedur financial forecasting",
                "is_general_knowledge" => 0,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Cash Flow Management",
                "description" => "Pengetahuan dan kemampuan dalam mengumpulkan, konsolidasi & rekonsiliasi data transaksi arus kas (inflow & outflow), melakukan penilaian performa arus kas (posisi likuiditas) serta memberikan solusi kebijakan pengaturan arus keuangan (terkait loan/ credit, mengontrol pengeluaran operasional, dll.), guna memperoleh praktik terbaik cash management yang dapat memenuhi kebutuhan bisnis perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Fund Management",
                "description" => "Pengetahuan dan kemampuan dalam menyusun strategi sumber-sumber pendanaan/alokasi keuangan perusahaan (maintaining, disposing, upgrading assets, dll.) sesuai dengan analisis kebutuhan & tujuan bisnis perusahaan, serta memberikan rekomendasi struktur kapital, guna memenuhi kebutuhan bisnis jangka panjang",
                "is_general_knowledge" => 0,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Revenue Assurance (RA) Management",
                "description" => "Pengetahuan dan kemampuan dalam mengembangkan strategi, mendeteksi, menganalisis, mengatasi, serta meminimalisir ataupun mencegah revenue leakage (e.g., billing problems, mediation problems, dll.) dengan tools pendukung (e.g., RA Software, dll.), guna memaksimalkan revenue perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Account Payable Management",
                "description" => "Pengetahuan dan kemampuan dalam menyusun strategi & pedoman pelaksanaan terkait pencatatan, pengendalian, hingga pembayaran kewajiban/hutang (down payment, dll.) yang meliputi SOP, jurnal, dokumen pendukung, melakukan penerimaan invoice supplier, melakukan pembayaran sesuai SLA serta melakukan pencatatan dan melakukan pembukuan payable, guna menghasilkan pengelolaan payable yang teratur",
                "is_general_knowledge" => 0,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Account Receivable Management",
                "description" => "Pengetahuan dan kemampuan dalam mengembangkan serta menerapkan strategi & kebijakan pengelolaan piutang, melakukan identifikasi, penyusunan & penyerahan invoice, penghitungan penurunan nilai piutang (impairment), penghapusan piutang (white off), pembukuan, pencatatan nilai piutang, dan memberikan rekomendasi percepatan kolektibilitas piutang untuk menjaga likuiditas perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Internal Control",
                "description" => "Pengetahuan dan kemampuan dalam meningkatkan integritas dan transparansi kegiatan operasional, pencatatan, dan aktivitas keuangan lainnya serta memastikan pelaporan keuangan akurat, tepat waktu, dan kredibel, melalui proses memahami, mengimplementasikan aturan & prosedur pelaksanaan internal kontrol di perusahaan (menggunakan COSO framework, landasan SOA, dll.), melakukan monitoring, penilaian efektivitas serta memberikan rekomendasi terkait sistem internal kontrol perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Accounting Record, Closing and Consolidation",
                "description" => "Pengetahuan dan kemampuan dalam memahami konsep, prinsip & standar jurnal ataupun pembukuan transaksi, melakukan pencatatan, analisis, rekonsiliasi, dan konsolidasi yang berkaitan dengan kegiatan/aktivitas keuangan perusahaan guna mendukung proses persiapan financial statement yang akurat, lengkap, dan tepat waktu",
                "is_general_knowledge" => 0,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Cost Accounting",
                "description" => "Pengetahuan dan kemampuan dalam melakukan klasifikasi serta analisis biaya yang dibutuhkan (bahan baku, upah tenaga kerja, dan biaya tambahan lainnya), melakukan perhitungan harga jual product/services, serta penyajian informasi secara sistematis ke dalam bentuk laporan biaya, berdasarkan pada pendekatan Activity-based costing, Variance analysis & Customer profitability analysis model, sebagai pertimbangan manajemen untuk menentukan harga product/services",
                "is_general_knowledge" => 0,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Asset Accounting",
                "description" => "Pengetahuan dan kemampuan dalam melakukan pencatatan, perhitungan nilai & penaksiran pada tangible asset dan intangible asset (depresiasi, amortisasi, deplesi & penilaian kembali), berdasarkan pada standar akuntansi dan peraturan-peraturan mengenai aset, melakukan pencatatan, klasifikasi jenis asset (aset yang dimiliki & lokasinya), guna menyajikan nilai perhitungan aset perusahaan secara akurat serta mengoptimalisasikan pengelolaan biaya aset perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Financial Reporting",
                "description" => "Pengetahuan dan kemampuan dalam melakukan identifikasi data finansial yang akan dicantumkan ke dalam laporan keuangan, menyusun struktur laporan serta memberikan informasi dan penjelasan hasil analisis dalam laporan keuangan, berdasarkan pada konsep dan standar pelaporan keuangan, guna menyediakan informasi terkait perspektif keuangan yang sesuai dengan standar laporan keuangan (PSAK, SAI, dll.) sehingga dapat membantu perusahaan dan stakeholders dalam mengevaluasi kinerja keuangan perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Tax Planning",
                "description" => "Pengetahuan dan kemampuan dalam merumuskan rencana perpajakkan perusahaan yang mencapai penghematan pajak (tax saving) serta meminimalisir permasalahan terkait perpajakan, melalui proses melakukan pengumpulan, kajian, serta identifikasi aspek-aspek perpajakkan & peraturannya, menyusun model perencanaan pajak, melakukan evaluasi hingga memberikan rekomendasi perbaikan",
                "is_general_knowledge" => 0,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Tax Accounting",
                "description" => "Pengetahuan dan kemampuan dalam melakukan pencatatan, analisis, perhitungan dalam menentukan besaran nilai pajak yang akurat, estimasi potensi pajak di masa yang akan datang, serta pelaporan pembayaran pajak yang tepat waktu dan sesuai dengan standar akuntansi pajak, peraturan/ketentuan pajak dan kepabeanan yang berlaku",
                "is_general_knowledge" => 0,
                "job_family_id" => 11,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Contract Drafting (Legal Drafting)",
                "description" => "Pengetahuan dan kemampuan dalam mengkaji hukum & fakta dalam topik tertentu serta menuangkan hasil pemikiran (analisis isu legal) untuk menghasilkan rancangan perjanjian dan kontrak yang berpedoman pada prinsip hukum yang berlaku, guna mengakomodasi kebutuhan dan kepentingan bisnis perusahaan terkait kontrak pengadaan, MoU, dll.",
                "is_general_knowledge" => 0,
                "job_family_id" => 12,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Legislative Drafting",
                "description" => "Pengetahuan dan kemampuan dalam merancang, menyusun, serta menuangkan hasil pengkajian & analisis terhadap dasar-dasar hukum yang berlaku ke dalam bentuk undang-undang, peraturan dan/atau kebijakan internal perusahaan (e.g., Peraturan Direksi, Instruksi Direktur, dll.), sesuai dengan norma dan peraturan pemerintah/presiden/daerah/perundangan lain yang berlaku, termasuk mengelola persetujuan dan sosialisasinya kepada pihak-pihak yang terkait",
                "is_general_knowledge" => 0,
                "job_family_id" => 12,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Legal Advisory",
                "description" => "Pengetahuan dan kemampuan dalam memberikan opini, solusi atau langkah hukum selanjutnya yang tepat bagi bisnis perusahaan, dengan melakukan identifikasi risiko hukum yang mungkin dihadapi, analisa sumber informasi hukum, mempersiapkan dokumen hukum pendukung yang diperlukan, menyusun opini atau pertimbangan hukum baik secara tertulis/ verbal, berdasarkan pada aspek-aspek legal dalam suatu aktivitas, masalah, ataupun kasus terkait bisnis perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 12,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Non Court Litigation (Arbitration & Alternative Dispute Resolutions",
                "description" => "Pengetahuan dan kemampuan dalam melakukan identifikasi & analisa permasalahan hukum,serta penyusunan strategi penanganan hukum, mempersiapkan serta meninjau dokumen non-litigasi (permohonan arbitrase, surat jawaban, etc.) & data/informasi bukti pendukung, beracara di lembaga/forum hukum luar pengadilan, arbitrase (Badan Arbitrase Nasional Indonesia/ BANI, dll.), hingga memberikan solusi penyelesaian suatu sengketa, klaim, gugatan, dan perkara yang dilaksanakan di lembaga/forum di luar pengadilan, seperti mediasi ataupun alternatif penyelesaian sengketa lainnya",
                "is_general_knowledge" => 0,
                "job_family_id" => 12,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Court Litigation",
                "description" => "Pengetahuan dan kemampuan dalam melakukan identifikasi & analisa permasalahan hukum, penyusunan strategi penanganan hukum, menyusun serta meninjau dokumen litigasi (surat gugatan, surat jawaban, kasasi, replik/duplik, PK etc.), mempersiapkan data/informasi bukti pendukung, implementasi hukum beracara di lembaga/forum pengadilan (perdata, pidana, hubungan industrial, etc.) serta memberikan solusi penyelesaian sengketa, klaim, gugatan, dan perkara baik di bidang pidana/perdata terkait bisnis perusahaan (e.g., employment and labor, etc.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 12,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Local and International Rules and Regulations",
                "description" => "Pengetahuan dan kemampuan dalam memahami peraturan serta regulasi lokal (Peraturan Daerah, dll.), nasional (Undang-Undang, Permen, dll.), dan internasional (Regulasi Telekomunikasi Internasional/ITRs, dll.), mengidentifikasi peraturan internal & eksternal yang dapat mempengaruhi jalannya bisnis perusahaan serta melakukan antisipasi terkait tren dan perubahan peraturan & regulasi lokal, nasional, dan internasional sehingga dapat diimplementasikan dalam mengembangkan kebijakan yang sesuai dengan kebutuhan bisnis perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 12,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Regulatory Analysis",
                "description" => "Pengetahuan dan kemampuan dalam mempertimbangkan kebijakan internal, perundang-undangan eksternal dan kebutuhan bisnis perusahaan, melalui proses pemahaman tentang tata urutan/hierarki peraturan perundang-undangan serta peraturan & kebijakan perusahaan, menganalisis hingga menuangkan hasil pemikiran terhadap regulasi terkait, guna menghasilkan kajian peraturan untuk mempengaruhi regulasi eksternal/ di luaran perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 12,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Corporate Reputation Management",
                "description" => "Pengetahuan dan kemampuan dalam menyusun strategi reputasi, mengawasi konten publikasi perusahaan (e.g., search engine results, social media networks, google alerts, forums, dll.), menindaklanjuti konten negatif tentang perusahaan (Mugshot removal sites, dll.) serta mengukur persepsi stakeholder terhadap citra perusahaan, guna menciptakan Good Corporate Reputation",
                "is_general_knowledge" => 0,
                "job_family_id" => 13,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Media Planning",
                "description" => "Pengetahuan dan kemampuan dalam mengomunikasikan suatu pesan kepada target audiens secara efektif dan efisien di waktu dan frekuensi yang tepat yang berkaitan dengan reputasi perusahaan, promosi, product/services, maupun informasi perusahaan lainnya, dengan menggunakan data/informasi (target market profile, competitor media strategy, dll.) untuk mengidentifikasi target audiens, menentukan objektif & strategi penyampaian pesan serta menentukan sarana media dan influencer yang akan digunakan/diajak bekerja sama (radio, televisi, blogger, celebrities, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 13,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Media Relations",
                "description" => "Pengetahuan dan kemampuan dalam menganalisis karakteristik media/influencer & trend saat ini, membangun serta merancang aktivitas hubungan dengan media ataupun influencer (press release, media tour, company tour, brand storytelling, media gathering, dll.), menyediakan & memonitor informasi yang diberikan kepada media/influencer pilihan (media massa, bloggers, celebrities, dll.), guna memperoleh publisitas, pemberitaan, brand image, dan brand popularity yang dapat membangun citra positif perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 13,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Content Writing",
                "description" => "Pengetahuan dan kemampuan dalam melakukan pengumpulan informasi mengenai topik/ide tulisan, mengolah (mengartikulasi dan mengkurasi) kata-kata & bahasa hingga proses finalisasi tulisan, berdasarkan pada gaya penulisan yang sesuai dan konsep struktur penyusunan konten, guna menghasilkan konten (terkait reputasi perusahaan, promosi, product/services, dll.) yang jelas, sesuai dengan karakteristik target, mudah dibaca & dipahami, serta mampu meyakinkan para pembaca, melalui berbagai media channel (e.g website, social media, e-mail, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 13,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Public Communication",
                "description" => "Pengetahuan dan kemampuan dalam melakukan identifikasi target audiens, menyusun struktur penyampaian, menyebarluaskan (diseminasi), bertukar pesan, informasi, ide ataupun opini dengan tujuan tertentu (to inform, to persuade, to entertain, dll.) serta mengevaluasi hasil penyampaian pesan/informasi kepada publik internal & eksternal perusahaan dengan berbagai macam media, guna menghasilkan efektivitas komunikasi dengan para stakeholders (e.g., diskusi publik, press conference, e-mail, blog, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 13,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Crisis Communication",
                "description" => "Pengetahuan dan kemampuan dalam menangani ataupun mencegah situasi yang mengancam kredibilitas perusahaan di mata publik (e.g., Distance Strategies, Mortificiation Strategies, dll.), melalui proses melakukan antisipasi pre-crisis (identifikasi, pembagian tugas), pengelolaan in-crisis (mengumpulkan hingga menyebarkan informasi & koordinasi langkah strategis), hingga melakukan tindakan post-crisis (follow-up, mendapat feedback & evaluasi)",
                "is_general_knowledge" => 0,
                "job_family_id" => 13,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Stakeholder Mapping",
                "description" => "Pengetahuan dan kemampuan dalam melakukan identifikasi, kategorisasi, prioritisasi serta pemetaan terhadap stakeholder dengan menggunakan template/matrix (e.g., The Participation Planning Matrix, Power Versus Interest Grid, etc.) sebagai upaya untuk mengetahui pihak-pihak yang termasuk key stakeholder (pelanggan, direksi, karyawan, NGO, Asosiasi, Masyarakat Telekomunikasi Indonesia, dll.) di perusahaan/proyek bisnis",
                "is_general_knowledge" => 0,
                "job_family_id" => 13,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Stakeholder Management",
                "description" => "Pengetahuan dan kemampuan dalam mendengar, menyediakan kebutuhan/informasi, serta mengatur strategi komunikasi (face to face/online, daily/weekly, etc.) dengan key stakeholder, guna mendukung jalannya kegiatan operasional perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 13,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Investor Relation Management",
                "description" => "Pengetahuan dan kemampuan dalam membangun dan menjaga hubungan dengan para investor/calon investor, melalui proses pengelolaan aktivitas dengan investor (e.g., meetings, press conference, etc.) serta memfasilitasi komunikasi dua arah (menyediakan & menyampaikan informasi/pesan berupa situasi pasar modal, nilai & potensi saham, informasi dari quarterly/annual report, release financial information, etc.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 13,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Government Relations",
                "description" => "Pengetahuan dan kemampuan dalam menjalin hubungan yang baik dengan pemerintah, melalui proses mengumpulkan data/informasi dari pemerintahan, mengawasi berita/isu pemerintahan, interpretasi langkah-langkah pemerintah, membangun, menjembatani, memediasi, dan menjaga interaksi/komunikasi dengan pemerintah atau aparat birokrasi, guna memperoleh kebijakan/keputusan yang sesuai dengan kebutuhan perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 13,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Account Management",
                "description" => "Pengetahuan dan kemampuan dalam memahami kebutuhan & permasalahan pelanggan, merumuskan strategi pengelolaan account, menyusun definisi key account, memberikan saran/advice terkait solusi yang mampu memberikan kebermanfaatan bagi pelanggan (product solutioning), serta terlibat dalam ekosistem manajemen pengembangan produk, guna mempertahankan hubungan dengan para account & memaksimalkan performa penjualan",
                "is_general_knowledge" => 0,
                "job_family_id" => 13,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Partnering",
                "description" => "Pengetahuan dan kemampuan dalam memahami pekerjaan pada unit bisnis terkait, membina relasi, memberikan konsultasi & rekomendasi teknis terkait kegiatan bisnis perusahaan kepada pihak-pihak internal fungsi (technical specialist), serta memoderasi hubungan dengan eksternal fungsi (functional intermediator), sebagai upaya untuk mendukung tercapainya pengetahuan, keterampilan & kemampuan yang mampu mendorong peningkatan business outcomes serta pengambilan keputusan bisnis",
                "is_general_knowledge" => 0,
                "job_family_id" => 13,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Event Management",
                "description" => "Pengetahuan dan kemampuan dalam menentukan objektif acara/kegiatan, merencanakan (e.g., scheduling, dll.), mengkoordinasikan (media, audiens, speakers, entertainer, dll.), memonitor, hingga mengevaluasi pelaksanaan sebuah acara (untuk semua acara korporasi, e.g., brand activation, seminar, pelatihan, dll.) sehingga seluruh acara terselenggara sesuai dengan rencana",
                "is_general_knowledge" => 0,
                "job_family_id" => 13,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Social Mapping",
                "description" => "Pengetahuan dan kemampuan dalam menyusun gambaran struktur batasan wilayah yang akan menjadi landasan penyusunan program community development dan pelibatan masyarakat dalam bisnis (e.g Participatory Rural Appraisal, dll.), melalui proses melakukan pengumpulan data/ informasi terkait komunitas, identifikasi masalah/ kebutuhan masyarakat, serta analisis sosial yang meliputi potensi wilayah (jumlah kepala keluarga, umur anak yang bersekolah, dll.), elemen budaya & sistemnya (strata sosial, dll.) serta hubungan sosial masyarakat",
                "is_general_knowledge" => 0,
                "job_family_id" => 13,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "CSR & Community Development",
                "description" => "Pengetahuan dan kemampuan dalam merancang & mengembangkan model intervensi komunitas, menyusun persiapan aktivitas, menjalankan, melaporkan, memonitor, serta mengevaluasi program sosial perusahaan (CSR & Community Development) yang bertujuan memenuhi kepentingan masyarakat (services), menunjang kemandirian (empowering) ataupun pengembangan informasi & komunikasi (relations), guna meningkatkan keberlanjutan (sustainability) perusahaan serta mengikutsertakan (engage) stakeholders ke dalam kegiatan sosial perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 13,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Audit Tools & Techniques",
                "description" => "Pengetahuan dan kemampuan dalam memahami prosedur dan prinsip audit, melakukan perencanaan kegiatan audit yang meliputi menentukan target, ruang lingkup, prosedur, penjadwalan audit (per tahun, per triwulan, etc.), membentuk tim, melakukan survei pendahuluan, meninjau dokumen/ informasi audit sebelumnya serta pelaksanaan audit yang meliputi audit sampling, menyediakan layanan konsultasi audit, hingga mendokumentasikan temuan audit (audit findings) yang sesuai dengan aturan dan standar yang berlaku (e.g., ISO 9001, etc.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 14,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Fraud Forensic",
                "description" => "Pengetahuan dan kemampuan yang dibutuhkan auditor dalam mengidentifikasi aktivitas ilegal, mengumpulkan bukti-bukti forensik, melaksanakan investigasi serta menganalisis hasil temuan/data yang mengarah pada tindakan fraud, irregularities, illegal action, dan/atau abuse of power",
                "is_general_knowledge" => 0,
                "job_family_id" => 14,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Risk Management Framework & Principles",
                "description" => "Pengetahuan dan kemampuan dalam melakukan identifikasi (inherent & residual risk), kategorisasi risiko, dokumentasi dalam bentuk risk register (atau yang lainnya), mengukur kemungkinan (likelihood) dan besar dampak risiko (impact) dengan konsep dan metode perhitungan kuantitatif, kualitatif ataupun hybrid model, serta membuat urutan skala prioritas atas risiko sehingga dapat menggambarkan exposure, kapasitas, appetite, toleransi, target, dan batasan risiko di dalam perusahaan, menyusun strategi/ tanggapan mitigasi risiko serta monitoring dan evaluasi pelaksanaan mitigasi risiko perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 14,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Risk Maturity",
                "description" => "Pengetahuan dan kemampuan dalam melakukan penilaian mandiri terhadap kematangan (risk maturity), implementasi manajemen risiko dari segi proses, dan indikator kesiapan lainnya dengan menggunakan model standarisasi internasional (ISO 31000, RIMS RMM Model, etc.), berdasarkan pada Risk Management Maturity Model, guna menggambarkan posisi tingkat kematangan manajemen risiko perusahaan (risk rating) dan memberikan rekomendasi perbaikan manajemen risiko",
                "is_general_knowledge" => 0,
                "job_family_id" => 14,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Investment & Financial Risk Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan kontrol, monitoring, serta memberikan rekomendasi mitigasi risiko (e.g., risiko likuiditas, risiko kredit, risiko pasar) secara proaktif & sistematis, guna menjamin seluruh portofolio investasi berjalan dengan konsisten dan meminimalisir terjadinya risiko bisnis & keuangan di perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 14,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Insurance Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan identifikasi & analisa objek asuransi, memperhitungkan serta merekomendasikan jenis asuransi yang paling tepat untuk bisnis perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 14,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Compliance Framework Design",
                "description" => "Pengetahuan dan kemampuan dalam menentukan, merancang, serta mengembangkan metode/ framework compliance guna mendukung pengawasan kepatuhan program perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 14,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Compliance Evaluation",
                "description" => "Pengetahuan dan kemampuan dalam merencanakan pelaksanaan evaluasi kepatuhan, mengumpulkan data/informasi, menganalisa, mengukur, mengevaluasi tingkat kepatuhan dan transaksi bisnis perusahaan, serta memberikan rekomendasi terkait prosedur penerapan Good Corporate Governance",
                "is_general_knowledge" => 0,
                "job_family_id" => 14,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Fraud Prevention",
                "description" => "Pengetahuan dan kemampuan dalam mengidentifikasi, menganalisis potensi, dan menyusun tindakan pencegahan terjadinya fraud (e.g., employment, supplier, and customer screening, code of conduct, fraud policy, hire employee, etc.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 14,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Due Diligence",
                "description" => "Pengetahuan dan kemampuan dalam mempersiapkan kebutuhan informasi/ dokumen serta menganalisis seluruh aspek kepatuhan suatu objek/ subjek bisnis guna memastikan kelayakan (due diligence) sebagai bahan pertimbangan sebelum melakukan transaksi bisnis (e.g., M&A, investment, etc.) dan kegiatan bisnis lainnya",
                "is_general_knowledge" => 0,
                "job_family_id" => 14,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Property/Site Acquisition & Disposal",
                "description" => "Pengetahuan dan kemampuan dalam melakukan identifikasi kondisi, potensi & kebutuhan akuisisi/ pelepasan properti/site, melakukan riset, evaluasi terhadap hukum-hukum yang berlaku di daerah tersebut, serta pengecekan property/site secara langsung (survei), menyediakan informasi properti/site (pemetaan lokasi, akses, dll.), pemilihan hingga memperoleh persetujuan proses akuisisi properti (beli/sewa) serta melakukan proses penghapusan atau pelepasan properti/site (penjualan, peralihan hak milik, dll.) berdasarkan pada metodologi akuisisi properti/site",
                "is_general_knowledge" => 0,
                "job_family_id" => 15,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Building & Facility Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan kegiatan perencanaan teknis, pelaksanaan, pengoperasian, inspeksi, pemeliharaan, perbaikan, dan pengawasan pembangunan perkantoran beserta seluruh prasarana-nya, termasuk integrated automation terkait building & facility, dengan bantuan beberapa tools pendukung (e.g., Task List Checklist, CAFM, CMMS, etc.), berdasarkan pada pemahaman akan material/konstruksi gedung, guna menghasilkan kenyamanan fasilitas perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 15,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Space Management",
                "description" => "Pengetahuan dan kemampuan dalam menyusun perkiraan (proyeksi) tata letak ruang kerja, melalui proses menganalisa data (jumlah karyawan, departemen, aset, etc.), menyusun strategi, pengaturan, dengan bantuan tools pendukung (e.g., AutoCAD, Excel Spreadsheet, etc.) sehingga tercipta lingkungan kerja yang nyaman dan efisien",
                "is_general_knowledge" => 0,
                "job_family_id" => 15,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Utilities Management",
                "description" => "Pengetahuan dan kemampuan dalam melacak data penggunaan energi (billing, repair records, etc.) serta menyusun strategi optimalisasi penggunaan gas, air, listrik, telekomunikasi, air conditioning, dan bahan bakar yang dibutuhkan dalam kegiatan operasional perusahaan guna mencapai penghematan energi dan keuangan perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 15,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Hospitality & Office Support",
                "description" => "Pengetahuan dan kemampuan dalam menyusun standar, merencanakan, hingga mengelola implementasi pemberian layanan prima terhadap stakeholder internal (e.g., BoD, BoC, karyawan, dll.), termasuk penyediaan fasilitas & layanan umum (e.g., fasilitas ruangan kerja & rapat, penyediaan alat tulis kantor, ketersediaan kendaraan, ketersediaan supir, pemeliharaan kendaraan, ketersediaan jasa keamanan, pelayanan resepsionis, kebersihan ruangan, konsumsi, penyediaan kebutuhan pantry, furniture, dan kartu identitas, dll.) untuk mendukung kegiatan operasional perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 15,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Travel Management & Accommodation",
                "description" => "Pengetahuan dan kemampuan terkait kegiatan pengajuan, persiapan & pengaturan jadwal serta keperluan perjalanan/ kendaraan dinas, penyelesain klaim serta memberikan rekomendasi terhadap kebijakan perjalanan dinas (e.g., untuk perjalanan pendidikan & pelatihan, seminar, rapat kerja nasional/internasional, kunjungan kerja, etc.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 15,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Health and Wellness Program Management",
                "description" => "Pengetahuan dan kemampuan dalam menyusun program kesehatan pekerja (lunch & healthy snacks, fitness center, dll.), mengimplementasikan (e.g., paramedical service, dll.) serta mengevaluasi program tersebut, berdasarkan pada faktor-faktor yang dapat mempengaruhi kesehatan (sosial, fisik, dan mental), guna mendukung kesehatan dan produktivitas pekerja",
                "is_general_knowledge" => 0,
                "job_family_id" => 15,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Safety Management",
                "description" => "Pengetahuan dan kemampuan dalam memahami sistem manajemen keselamatan, melakukan identifikasi, analisis, dan mitigasi risiko yang dapat menggunakan bantuan tools (e.g., Basic Excel SRM Template, BowTie SRM Software, dll.) yang berkaitan dengan sistem manajemen keselamatan serta aspek keselamatan termasuk risiko-risiko kecelakaan/ bahaya",
                "is_general_knowledge" => 0,
                "job_family_id" => 15,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Emergency Response Management",
                "description" => "Pengetahuan dan kemampuan dalam melakukan identifikasi, perencanaan dan implementasi prosedur penanggulangan keadaan bahaya/ darurat termasuk menyusun emergency preparedness, pre-fire planning, fire drill/emergency drill untuk meminimalisir kerugian dan menjamin kesigapan kondisi darurat perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 15,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Physical Security",
                "description" => "Pengetahuan dan kemampuan dalam melakukan identifikasi jenis ancaman, menyusun rencana pengamanan, melaksanakan, serta mengawasi kegiatan pengamanan terhadap personil, fasilitas, peralatan, sistem pendukung, dan material logistik, dari berbagai bentuk ancaman maupun bahaya, baik dari dalam maupun luar perusahaan",
                "is_general_knowledge" => 0,
                "job_family_id" => 15,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Green Management",
                "description" => "Pengetahuan dan kemampuan dalam menyusun program, mengimplementasikan, mengawasi, serta memberikan rekomendasi terhadap prosedur penerapan The Triple-R : Reduce, Reuse, dan Recycle kepada seluruh karyawan guna meminimalisir limbah perkantoran (kertas, plastik, catridge tinta, limbah elektronik, dll.)",
                "is_general_knowledge" => 0,
                "job_family_id" => 15,
                "created_at" => now(), "updated_at" => now()
            ]
        ];

        Competency::insert($competencies); // Eloquent approach
    }
}
