<?php

namespace Database\Seeders;

use App\Models\Competency;
use Illuminate\Database\Seeder;

class NewCompetencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $competencies = [
            [
                "name" => "Adaptability",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan memodifikasi/mengubah perilaku untuk menyesuaikan diri dengan kondisi maupun situasi tertentu (dapat berupa situasi baru, perubahan lingkungan, kejadian insidental, krisis, kondisi ambigu/tidak pasti, termasuk menghadapi perbedaan antar individu). Penguasaan terhadap kompetensi ini ditunjukkan dengan kemampuan untuk memahami situasi secara cepat dan memodifikasi perilaku sehingga dapat memberikan respon yang efektif. Kompetensi ini dapat melibatkan aspek kognitif, seperti keterbukaan terhadap perspektif baru, mengubah perspektif diri sendiri, sikap menghargai perspektif yang berbeda ataupun bertentangan tentang suatu masalah, menginternalisasi nilai-nilai baru maupun tindakan mengubah metode atau cara melakukan pekerjaan dan mempelajari cara-cara baru untuk menyelesaikan tugas. Kompetensi ini memungkinkan seseorang untuk merespons secara efektif berbagai tuntutan situasi, menunjukkan sikap positif terhadap perubahan dan ambiguitas/ketidakpastian, serta reseptif dalam melakukan penyesuaian yang diperlukan.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan intensitas respons terhadap perubahan.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Anticipatory",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan untuk memprediksi berbagai kemungkinan yang terjadi untuk menghadapi ketidakpastian situasi di masa depan. Penguasaan kompetensi ini ditunjukkan dengan kemampuan membayangkan gambaran masa depan dan berpikir sistematis untuk merencanakan cara yang realistis dan berkelanjutan untuk menghadapi kompleksitas di masa depan, serta menyusun tindakan preventif untuk mengatasi rintangan maupun menghindari kegagalan. Seseorang dengan kemampuan antisipatif akan mampu melihat dan memanfaatkan peluang masa depan serta mengelola potensi risiko di masa depan dengan cara yang tepat.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan paparan kompleksitas dan efektivitas rencana untuk menangani ambiguitas serta ketidakpastian di masa depan.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Sense",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan dalam memahami bisnis, yang ditunjukkan melalui kepekaan terhadap bisnis, dan kemampuan melihat situasi atau masalah dari sudut pandang bisnis. Penguasaan kompetensi ini ditunjukkan dengan kemampuan untuk memahami implikasi bisnis dari suatu peluang dan keputusan, berdasarkan pada pemahaman akan sistem dan target capaian organisasi, serta menerapkan strategi bisnis yang terbukti  mampu meningkatkan kinerja organisasi. Kompetensi ini membutuhkan kemampuan dalam melihat keterkaitan antara suatu isu/permasalahan, proses, dan hasil, dan dampaknya pada pencapaian target organisasi.  Kompetensi ini memengaruhi ketajaman dan kecepatan seseorang dalam memahami serta menanggapi situasi bisnis. ",
                "definition_english" => "Kompetensi ini berkembang seiring dengan kedalaman pemahaman individu terhadap bisnis perusahaan.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Collaboration",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan bekerja sama untuk mencapai tujuan dengan mempertimbangkan kapabilitas dan kapasitas setiap orang. Penguasaan kompetensi ini ditunjukkan dengan kemampuan membangun hubungan kohesif dengan pihak-pihak terkait untuk mencapai hasil tertentu.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan intensitas upaya yang dilakukan untuk memberikan kontribusi terhadap pencapaian tujuan tim.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Conceptual Thinking",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan untuk mengidentifikasi pola atau hubungan dari dua atau lebih situasi yang belum jelas keterkaitannya, serta mengidentifikasi pokok permasalahan dari situasi yang kompleks. Berpikir konseptual juga mencakup proses mengintegrasikan masalah dan faktor-faktor tertentu ke dalam suatu model, teori maupun kerangka berpikir untuk memahami dan menjelaskan permasalahan bisnis, komersial, masalah ilmiah, peristiwa maupun situasi spesifik. Kemampuan ini melibatkan penalaran induktif (yakni penarikan kesimpulan dari informasi yang beragam dan kurang lengkap menjadi pemahaman yang jelas) maupun pemikiran abstrak (yakni kemampuan untuk memahami suatu ide tanpa adanya hal-hal yang bersifat konkret)",
                "definition_english" => "Kompetensi ini berkembang seiring dengan tingkat kompleksitas berpikir maupun wawasan individu dalam mengenali pola dari suatu situasi/permasalahan.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Concern For Efficiency",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan mengarahkan tindakan untuk mencapai tujuan secara efektif, efisien dan berkelanjutan. Penguasaan  kompetensi ini ditunjukkan dengan kemampuan dalam mengidentifikasi dan mengelola sumber daya (tenaga, materi, informasi, waktu) secara efektif, efisien dan berkelanjutan agar tetap kompetitif dalam bisnis. Individu dengan kemampuan ini cenderung efektif & efisien dalam mengelola sumber daya (baik finansial maupun non finansial), melalui pengukuran, perencanaan spesifik dan pengendalian sumber daya serta melakukan beberapa proses penyesuaian untuk memaksimalkan hasil yang dicapai.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan kemampuan individu dalam mengelola sumber daya dalam lingkup luas.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Concern For Standards",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan melakukan upaya berkelanjutan untuk mencapai kualitas standar penyelesaian pekerjaan, dengan meminimalisasi kesalahan, ketidaksesuaian dan ketidakpastian di lingkungan kerja sesuai dengan standar, aturan, serta prosedur yang berlaku. Penguasaan kompetensi ini ditunjukkan melalui perilaku memantau & memeriksa pekerjaan atau informasi, melakukan validasi data, memastikan kejelasan peran dan keteraturan, serta menuntut kepatuhan terhadap standar tertentu.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan intensitas upaya yang dilakukan untuk memastikan pencapaian standar kinerja.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Conflict Resolution",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan menyelesaikan konflik/perselisihan yang terjadi antar individu atau kelompok/tim yang memiliki kepentingan, kebutuhan, dan tujuan berbeda. Penguasaan kompetensi ini ditunjukkan dengan kapabilitas mengatasi permasalahan dengan berfokus pada sumber masalah dan mengembangkan solusi secara efektif, efisien serta adil melalui proses negosiasi untuk mendapatkan kesepakatan dan mitigasi terjadinya konflik.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan tingkat kompleksitas konflik serta pendekatan yang dilakukan untuk menyelesaikan konflik/perselisihan.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Continuous Improvement",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan melakukan upaya berkelanjutan untuk meningkatkan praktik, metode, prosedur, maupun sistem yang ada saat ini dengan menerapkan pendekatan sistematis serta langkah terstruktur guna meningkatkan proses dan kualitas. Proses pengembangan berkelanjutan dapat dilakukan dengan menggunakan pendekatan atau ide baru, adopsi ide dari best practices, maupun penerapan sistem kendali mutu dan perbaikan struktural.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan upaya yang dilakukan untuk menciptakan perbaikan/pengembangan berkelanjutan.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Customer Oriented",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan melihat situasi dari sudut pandang pelanggan dalam merencanakan, merancang dan memberikan layanan atau solusi untuk memenuhi harapan/kepuasan pelanggan berdasarkan masukan dan keluhan pelanggan. 'Pelanggan' dapat didefinisikan secara luas, termasuk end-customer, distributor, 'pelanggan' internal, maupun mitra",
                "definition_english" => "Kompetensi ini berkembang seiring dengan intensitas layanan dan respon yang diberikan dalam memenuhi kebutuhan dan meningkatkan pengalaman pelanggan.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Driven",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan menggunakan data sebagai dasar proses analisa dan penyelesaian masalah. Kompetensi ini secara konsisten menggunakan data sebagai sumber rujukan untuk menunjukkan pentingnya pemahaman data dalam mendukung proses pekerjaan, pengelolaan data secara efisien, pemanfaatan data guna menghasilkan dampak serta menghasilkan analisa yang lebih tajam.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan intensitas interaksi yang dilakukan terhadap data untuk menghasilkan dampak yang signifikan terhadap bisnis/pekerjaan.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Decisiveness",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan mengambil keputusan secara akurat, efektif dan tepat waktu, walaupun saat dihadapkan pada situasi yang ambigu (multitafsir) atau memiliki potensi konflik. (Penguasaan terhadap kompetensi ini mensyaratkan penilaian yang baik terhadap situasi, dengan melakukan analisis terhadap informasi yang akurat dan relevan, mengidentifikasi inti permasalahan, mempertimbangkan berbagai kemungkinan dan tindakan yang dapat dilakukan serta memahami dampak/implikasi dari keputusan yang diambil.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan kompleksitas tindakan atau langkah yang dilakukan untuk mengambil suatu keputusan.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Developing Others",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan dalam memfasilitasi/mendukung proses pembelajaran dan pengembangan orang lain dengan mengoptimalkan kelebihan yang dimiliki dan mengatasi kekurangannya untuk meningkatkan kinerja serta memenuhi kebutuhan kompetensi organisasi.Proses pengembangan dapat dilakukan melalui pemberian umpan balik konstruktif, pembinaan (coaching), penetapan target pengembangan individu, memonitor kemajuan, mengelola masalah kinerja, menyusun rencana pengembangan jangka panjang, serta memberikan tugas yang menantang sesuai kapabilitasnya.Penekanan pada kompetensi ini adalah pada intensi yang ditunjukkan untuk mengembangkan orang lain, bukan sekedar memberi kesempatan untuk mengikuti suatu pelatihan.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan keragaman, kompleksitas, dan kontinuitas upaya yang dilakukan untuk pengembangan talent di organisasi.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Engaging Stakeholders",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan membangun, menjaga dan memperkuat hubungan dengan pemangku kepentingan (stakeholders) serta melibatkannya ke dalam strategi/arah bisnis perusahaan guna meningkatkan kinerja dan kemampuan sehingga tercapai tujuan.Pemangku kepentingan secara luas diartikan sebagai komunitas masyarakat dan pihak-pihak tertentu yang dapat mempengaruhi maupun memperoleh dampak tertentu dari kegiatan perusahaan mencakup di dalamnya pelanggan, klien, karyawan, pemasok, mitra bisnis, investor, pemerintah pusat/daerah, regulator, kelompok atau forum komunitas, dan LSM.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan intensitas relasi yang dilakukan dengan pemangku kepentingan; di level terendah ditunjukkan dengan kemampuan membangun hubungan untuk mendapatkan pemahaman terkait pemangku kepentingan, hingga kemampuan untuk memanfaatkan hubungan tersebut untuk mendapatkan keterlibatan aktif dan dukungan dari pemangku kepentingan pada level yang lebih tinggi",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Influencing Others",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan membujuk, meyakinkan, memengaruhi atau mengesankan orang lain, untuk membuat mereka ikut serta, berpartisipasi, atau mendukung agenda yang akan dilakukan. Penguasaan kompetensi ini ditunjukkan dengan kemampuan melakukan suatu perilaku tertentu yang dapat memberikan dampak ataupun kesan tertentu pada orang lain, atau dengan menampilkan suatu tindakan tertentu untuk mendapatkan persetujuan dari orang lain. Penekanan pada kompetensi ini  adalah pada variasi dan kompleksitas cara yang dilakukan untuk memengaruhi orang lain secara efektif.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan kompleksitas  tindakan atau langkah yang dilakukan untuk memengaruhi atau menciptakan dampak kepada orang lain.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Initiative",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan mengidentifikasi masalah, hambatan atau peluang dan sigap mengambil tindakan untuk mengatasi masalah ataupun memanfaatkan peluang sebelum orang lain bertindak. Penekanannya adalah pada kemampuan mengatasi  masalah yang dihadapai secara proaktif dan terus menerus serta memanfaatkan secara optimal setiap peluang yang muncul sebelum orang lain. Skala perilaku dalam kompetensi ini dimulai dari kesigapan dalam menyelesaikan masalah/memanfaatkan peluang yang muncul saat ini, hingga kemampuan mencegah masalah/memanfaatkan peluang yang akan muncul di masa depan. ",
                "definition_english" => "Kompetensi ini berkembang sejalan dengan tindakan yang dilakukan untuk mengatasi masalah / mengoptimalkan peluang yang muncul dalam rentang waktu saat ini hingga di masa depan.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Innovation",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan mengembangkan cara-cara kreatif dengan menerapkan ide/cara/metode baru untuk memecahkan masalah atau meningkatkan kinerja. Kompetensi ini menerapkan kreativitas dan kecenderungan berpikir “outside the box”, memberikan solusi baru untuk memenuhi kebutuhan saat ini dan masa depan dengan mempertimbangkan potensi risiko yang muncul di unit/organisasi. Pada level  yang lebih tinggi, penguasaan kompetensi ini ditunjukkan dengan kemampuan untuk mendorong orang lain berinovasi.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan kompleksitas proses berpikir yang dilakukan untuk merealisasikan ide-ide baru",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Investigating",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan menggali informasi dan mengembangkan system/jaringan untuk mengumpulkan informasi yang relevan, tepat waktu dan akurat. Perilaku yang ditampilkan termasuk upaya memahami situasi secara menyeluruh, menggali informasi secara detail, mengajukan pertanyaan menyelidik dan tidak umum  dalam suatu pekerjaan, tren, perkembangan dalam industri, politik, ekonomi, dan lainnya.", "definition_english" => "Kompetensi ini berkembang seiring dengan intensitas upaya yang dilakukan untuk mengumpulkan informasi",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Leading Change",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan membangkitkan semangat dan mendorong orang lain/kelompok untuk melakukan perubahan yang diperlukan agar dapat mencapai obyektif. Individu dengan kompetensi ini cenderung melakukan inisiasi dan memfasilitasi perubahan dan perbaikan untuk meningkatkan hasil atau kinerja sehingga dapat memajukan organisasi. Penguasaan terhadap kompetensi ini ditunjukkan dengan kemampuan untuk mengenali kebutuhan akan perubahan, proaktif menginisiasi perubahan, menyiapkan sumber daya yang diperlukan, mengembangkan program perubahan, mengembangkan sikap, keterampilan, dan perilaku tim yang diperlukan untuk menghasilkan program, layanan, output, mengatasi hambatan yang kompleks dan strategi baru yang dapat mengantisipasi kebutuhan saat ini dan di masa depan, serta menjadikan organisasi tetap kompetitif.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan tingkat keterlibatan dalam proses perubahan dan besarnya dampak yang diberikan terhadap perubahan o",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Leading Team",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan mengambil peran sebagai pemimpin tim atau kelompok, baik secara formal maupun informal dalam organisasi untuk mencapai tujuan bersama. Peran kepemimpinan yang dilakukan termasuk mengomunikasikan tujuan dan sasaran kelompok, mengelola kebutuhan kelompok, memberi dukungan terhadap anggota kelompok dan menciptakan situasi yang kondusif untuk mendukung kinerja kelompok. ",
                "definition_english" => "Kompetensi ini berkembang dari keutuhan kualitas asumsi peran pem",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Learning Orientation",
                "type" => "BEHAVIOR",
                "definition" => "Kemampuan mengembangkan pengetahuan dan keterampilan baru melalui proses pembelajaran dan pengembangan, mengintegrasikan serta menggunakan pengetahuan dan keahlian baru ke dalam pekerjaan untuk  meningkatkan kapasitas diri. Individu dengan kompetensi ini senantiasa menilai tingkat perkembangan atau keahlian diri terkait dengan pekerjaannya, sebagai bagian dari perencanaan karir yang terfokus.  Proses belajar yang dilakukan harus merupakan inisiasi / dorongan pribadi (self-driven), penekanannya adalah kemandirian dan tanggung jawab atas pengembangan di",
                "definition_english" => "Kompetensi ini berkembang seiring dengan komitmen dan upaya yang dilakukan untuk mengembangkan kemampuan/kapasitas ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Leveraging Network",
                "type" => "BEHAVIOR",
                "definition" => "Kemampuan mengenali dan mengelola jaringan relasi yang produktif, untuk memberi nilai tambah terhadap bisnis dan menyelesaikan pekerjaan; Individu dengan kompetensi ini akan berupaya melakukan berbagai cara untuk membangun, memelihara, dan memanfaatkan hubungan timbal balik yang saling menghormati, positif dan professional dengan jaringan orang-orang di luar fungsi kerjanya (dan juga di luar organisasi) dan memanfaatkan hubungan tersebut untuk kepentingan organisas",
                "definition_english" => "Kompetensi ini berkembang seiring dengan besarnya hasil atau manfaat yang diperoleh dari jaringan relasi yang diban",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Managing Performance",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan mengelola kinerja orang lain/tim sesuai dengan standar yang diharapkan. Penguasaan kompetensi ini ditunjukkan melalui kemampuan memberikan arahan, memastikan pencapaian target, mendorong pencapaian melebihi target, mempertahankan kinerja yang tinggi dan mendorong kinerja tinggi yang berkelanjutan.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan ketegasan dalam membuat orang lain patuh terhadap standar kinerja yang telah ditetapkan",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Political Savvy",
                "type" => "BEHAVIOR",
                "definition" => "Kemampuan memahami peta distribusi kekuasaaan di sebuah organisasi (baik organisasi sendiri ataupun di organisasi lain  seperti pelanggan, pemasok, dll). Penguasaan kompetensi ini ditunjukkan dengan kemampuan mengidentifikasi siapa pembuat keputusan di sebuah organisasi; individu yang dapat mempengaruhi mereka; dan memprediksi bagaimana peristiwa atau situasi baru akan memengaruhi individu dan kelompok di dalam organisasi. Penekanannya pada kemampuan memahami pembagian kekuasaan dalam sebuah organisasi di luar struktur formalnya.   ",
                "definition_english" => "Kompetensi ini berkembang seiring dengan kecermatan pengamatan seseorang terhadap pembagian kekuasaan di suatu organisasi",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Planning & Organizing",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan menyusun rencana dan mengelola sumber daya untuk mencapai tujuan pekerjaan serta mengatasi hambatan dalam proses pencapaiannya. Perilaku yang ditampilkan termasuk kemampuan untuk berpikir ke depan dan mengidentifikasi kemungkinan  hambatan atau masalah yang dapat mempengaruhi penyelesaian pekerjaan, menetapkan tugas dan tahapan pekerjaan untuk mencapai suatu target pekerjaan, memantau kemajuan pekerjaan dan membuat penyesuaian bila diperlukan, serta memastikan penggunaan sumber daya yang optimal untuk mencapai tujuan.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan skala dan kompleksitas pekerjaan yang dikelola",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Solutioning",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan mengidentifikasi dan menganalisa masalah dengan mempertimbangkan informasi yang relevan dan akurat untuk mendapatkan solusi yang tepat. Kemampuan ini dapat melibatkan beberapa kegiatan seperti penilaian situasi, analisa terhadap data dari berbagai sumber yang berbeda, menentukan akar penyebab masalah, serta mengidentifikasi, memprioritaskan dan memilih alternatif untuk solusi penyelesaiannya.",
                "definition_english" => "Kompetensi ini berkembang berdasarkan kompleksitas tindakan yang dilakukan untuk mengidentifikasi penyebab masalah beserta solusi yang diberikan.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Team Work",
                "type" => "BEHAVIOR",
                "definition" => "Kemampuan bekerja secara kooperatif dengan orang lain, menjadi bagian dari tim, dan bekerja sama (bukan bekerja secara sendiri-sendiri atau bahkan bersaing) untuk menciptakan nilai tambah ataupun mencapai visi, misi, nilai, dan tujuan bersama.  ",
                "definition_english" => "Kompetensi ini berkembang sesuai dengan intensitas upaya yang dilakukan untuk memberikan kontribusi terhadap pencapaian tim/kelompok",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Technology Savvy",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan mengadopsi teknologi untuk diterapkan pada setiap aspek pekerjaan dan terus memperbarui pengetahuan dengan perkembangan teknologi.  Individu dengan kompetensi ini cenderung memiliki wawasan yang baik terhadap perkembangan teknologi beserta dampaknya terhadap perkembangan bisnis dan mampu memanfaatkan teknologi secara efektif untuk menunjang kinerja bisnis/organisasi. Teknologi memiliki pengaruh yang besar bagi strategi perusahaan dan memiliki dampak luas terhadap setiap proses kerja. Organisasi dengan pemimpin yang paham teknologi akan menjadi lebih kompetitif. Seiring dengan dunia yang semakin digital, kecakapan teknologi telah menjadi persyaratan untuk hampir semua jenis pekerjaan",
                "definition_english" => "Kompetensi ini berkembang seiring dengan tindakan yang dilakukan dalam memanfaatkan teknologi baru dan perkembangannya",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Visioning & Strategic Planning",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan menerjemahkan visi dan konsep jangka panjang organisasi ke dalam strategi dan prioritas organisasi berdasarkan tren bisnis, kemajuan teknologi, perkembangan kebutuhan pelanggan dan faktor lain yang memiliki dampak terhadap organisasi. Individu dengan kompetensi ini cenderung mampu mengenali peluang penerapan ide-ide inovatif sesuai dengan kemampuan, sifat, dan potensi organisasi, serta mengambil risiko yang terukur berdasarkan kesadaran akan isu sosial, ekonomi, pasar dan politik, serta tren dan dampaknya terhadap organisasi, pemangku kepentingan dan publik.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan kompleksitas strategi yang diterapkan serta skala dampaknya terhadap organisasi",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Corporate Strategic Planning",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumuskan strategi & detail arahan bisnis jangka pendek, menengah, hingga panjang (termasuk skenario pencapaian target, arahan terkait optimalisasi alokasi modal, sumber daya manusia, maupun resource lainnya, dll.) yang selaras serta mendukung pencapaian visi, misi, nilai, target & tujuan perusahaan melalui proses pengumpulan data bisnis (melalui studi literatur, riset, dll.) serta analisis dengan menggunakan teknik tertentu, e.g., PESTLE (Political, Economic, Social, Technological, Legal, Environmental), SWOT (Strengths, Weaknesses, Opportunities, Threats), STEER (Socio-cultural, Technological, Economic, Ecological, Regulatory), dll.",
                "definition_english" => "Knowledge and ability to formulate, either short, medium, or long term business strategy & detailed direction (incl. scenario to achieve business targets, direction related to fund optimization, human resource, and other resources, etc.), align with and in order to support corporate vision, mission, value, target & purpose attainment through business data collection (e.g., literature study, research, etc.), perform analysis with several relevant techniques, e.g., PESTLE (Political, Economic, Social, Technological, Legal, Environmental), SWOT (Strengths, Weaknesses, Opportunities, Threats), STEER (Socio-cultural, Technological, Economic, Ecological, Regulatory), etc.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Strategy Development",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan review & evaluasi efektivitas implementasi strategi bisnis perusahaan (merefleksikan pencapaian saat ini serta cara mencapainya sejauh ini dengan menggunakan action checklist maupun metode lain), serta menyusun most promising strategic options yang fleksibel, realistis, challenging, selaras, serta mendukung pencapaian visi, misi, nilai, target & tujuan perusahaan",
                "definition_english" => "Knowledge and ability to review and evaluate business strategy effectiveness (reflected current achievements and how to achieve them so far, by using action checklist or any other methods), to formulate the most promising strategic options that are flexible, challenging, align, and support corporate vision, mission, value, target & purpose attainment",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Analysis & Forecasting",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menganalisis data historis terkait kondisi bisnis eksisting serta memprediksi kemungkinan kondisi bisnis yang akan datang dengan menggunakan model analisis statistik tertentu (e.g., regresi, dll.) guna menghasilkan rekomendasi terhadap pengambilan keputusan bisnis perusahaan",
                "definition_english" => "Knowledge and ability to analyze historical data related to existing business condition and predict future probabilities of business condition by using certain statistical analysis model (e.g., regression, etc.), in order to provide recommendation as a consideration on business decision making",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Emerging Technology",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengidentifikasi, memantau, menganalisis informasi terkait tren/potensi perkembangan teknologi (termasuk melakukan gap & cost benefit analysis) hingga menghasilkan rekomendasi strategi serta program implementasi teknologi baru (technology adoption) yang mampu mendukung keberlangsungan & meningkatkan nilai bisnis di perusahaan",
                "definition_english" => "Knowledge and ability to identify, monitor, and analyze information of emerging technology trends/potentials (incl. conduct gap & cost-benefit analysis), in order to provide recommendation on developing strategy and new technology implementation program (technology adoption), that could support sustainability & improve business value in organization",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Modelling",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengidentifikasi, menuangkan, hingga merumuskan permasalahan bisnis yang kompleks menjadi suatu gambaran/model bisnis operational yang sederhana namun terukur, fleksibel, komprehensif, serta selaras dengan strategi, value, tujuan bisnis perusahaan juga perspektif stakeholders (termasuk menggambarkan model hubungan antara pelanggan, product/services, proses & pelaku bisnis), melalui simulasi kondisi bisnis perusahaan yang akan datang (e.g., business model canvas, 9 building blocks, dll.) sebagai pertimbangan dalam pengambilan keputusan manajemen terkait bisnis perusahaan",
                "definition_english" => "Knowledge and ability to identify, manifest, up to formulate complex business problems into simple, measurable, flexible, comprehensive operational business model, and align with corporate business strategy, values, purposes, also stakeholder’s perspectives (incl. describe relational model of customers, product/services, processes & business subjects), by conducting future business condition simulation (e.g., Business Model Canvas, 9 Building Blocks, etc.), as a consideration for management on corporate business decision making",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Opportunity Assessment",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan kajian, analisis & evaluasi terhadap informasi terkait peluang-peluang pengembangan bisnis (e.g., feasibility assessment, impact assessment, etc.), serta menentukan peluang pengembangan bisnis yang dapat memberikan nilai tambah bagi perusahaan dengan mempertimbangkan lingkungan bisnis internal/eksternal (pasar, teknis, kompetitor finansial, dll.) dengan memahami faktor-faktor terkait pengembangan bisnis yang perlu dipertimbangkan, baik untuk bisnis eksisting maupun bisnis baru (melalui proses merger & acquisition atau pun tidak)",
                "definition_english" => "Knowledge and ability to review, analyze & evaluate information related to business development opportunities (e.g., feasibility assessment, impact assessment, etc.), as well as determine business development opportunity that could give any value-added to organization, by considering internal/external business environments (market, technical, competitor financial, etc.), understanding factors related to business development opportunities that need to be considered, either for existing business or new business (through merger & acquisition process or not)  ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Merger & Acquisition Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumuskan strategi & rencana detail, melakukan implementasi, monitoring, hingga closing proses penggabungan & pengambilalihan perusahaan (baik purchase mergers maupun consolidation mergers), dengan melakukan negosiasi yang berdasarkan pada hasil opportunity assessment, sebagai upaya untuk memperluas jangkauan, pangsa pasar, dan/atau meningkatkan nilai perusahaan dimata pemegang saham",
                "definition_english" => "Knowledge and ability to formulate strategy & detailed plan, implement, monitor, up to close process on corporate merger & acquisition (either purchase mergers or consolidation mergers), by performing negotiations based on opportunity assessment results, in order to expand business coverages, market shares, and increase corporate’s values in the eyes of shareholders",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Strategic Partnership Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan identifikasi & penilaian calon partner potensial (berdasarkan analisis kesempatan yang dilakukan), menyusun strategi, serta menerapkan teknik pembinaan hubungan (melalui proses negosiasi) sehingga tercapai kesepakatan kerjasama strategis dengan para pemangku kepentingan (e.g., Joint Venture, Equity Strategic Alliance, dll.), guna mendukung terciptanya progress, opsi-opsi terbaik untuk mencapai tujuan maupun menyelesaikan masalah bisnis perusahaan dan meningkatkan kesempatan pengembangan kapabilitas perusahaan",
                "definition_english" => "Knowledge and ability to identify & assess potential partners (based on the opportunity analysis that conducted), formulate strategy, implement relationship building techniques (through negotiation process), and gain strategic partnership agreements with stakeholders (e.g., Joint Ventures, Equity Strategic Alliance, etc.), in order to establish any progress, the best options to attain goals nor resolve corporate business problems, and enlarge opportunities to improve corporate’s capabilities ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Strategic Investment",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami portofolio bisnis perusahaan, melakukan identifikasi, penilaian & seleksi terhadap portofolio investasi (dari segi keuangan, risiko, dll.), serta menyusun rekomendasi/prioritas keputusan investasi strategis yang berpotensi mendapat return of investment maksimal bagi perusahaan, guna mengoptimalisasi portofolio bisnis perusahaan",
                "definition_english" => "Knowledge and ability to understand corporate business portfolio, identify, assess & select investment portfolio (from financial perspective, risk, etc.), also provide recommendation/priority of potential strategic investment decision that could potentially gain maximum return of investment and optimize corporate business portfolio",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Performance Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menetapkan, memonitor, mengevaluasi target kinerja bisnis perusahaan (mencakup indikator keuangan maupun operasional, e.g., EBITDA, revenue, dll.), untuk periode triwulanan, semesteran, maupun tahunan, merujuk pada performance management cycle & strategi bisnis perusahaan, termasuk mampu menentukan tools Performance Management System yang akan digunakan (e.g., Balance Scorecard, OKR, 4DX, dll.), guna meningkatkan efektivitas, efisiensi, & performansi bisnis perusahaan (reduced cost, dll.)",
                "definition_english" => "Knowledge and ability to determine, monitor, evaluate performance target corporate business (incl. financial & operational indicators, such as EBITDA, revenue, etc.) either on quarterly, semesterly, or annually, refers to the corporate's performance management cycle & business strategy, also able to determine the most suitable Performance Management System tools to be used (e.g., Balanced Scorecard, OKR, 4DX, etc.), in order  to improve effectiveness, efficiency, and business performance (reduced cost, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Process Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menentukan framework proses bisnis (e.g., eTom, APQC, dll.), melakukan identifikasi, pemetaan, serta penyelarasan proses & sub-proses pekerjaan di perusahaan yang saling berkesinambungan (termasuk analisis, monitoring implementasi, hingga melakukan redesain) dengan menggunakan metode/tools tertentu (Process Maker, Kissflow, dll.), guna mendapatkan gambaran keseluruhan proses pekerjaan secara komprehensif, berkesinambungan, dan menemukan area-area yang perlu dikembangkan",
                "definition_english" => "Knowledge and ability to determine business process frameworks (e.g., eTom, APQC, etc.), identify, map, and align each main job processes & sub processes in the organization, that are mutually sustainable (incl. analyze, monitor, implement, up to redesign business process by using certain methods/tools, e.g., Process Maker, Kissflow, etc.), in order to get entire job processes comprehensively, continuously, and find the areas that need to be improved",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Policy & Procedure Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menentukan standar, metode & tools terkait penyusunan kebijakan dan prosedur, membuat draft yang lengkap, fleksibel, terukur, sesuai dengan visi, misi, & nilai-nilai perusahaan, serta selaras dengan kebijakan/prosedur lainnya (policy integration) untuk mengantisipasi terjadinya tumpang tindih, mengelola persetujuan/pengesahan, mendistribusikan, memutakhirkan, melakukan monitoring hingga evaluasi relevansi kebijakan dan prosedur di perusahaan",
                "definition_english" => "Knowledge and ability to determine standards, methods & tools related to policy & procedure development, create a comprehensive, flexible, and measurable draft in accordance to corporate vision, mission, values, and integrate it with another policy/procedure (policy integration), in order to anticipate overlap, manage approval/legalization, also distribute, update, monitor up to evaluate corporate policy & procedure relevance",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Change Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengidentifikasi kebutuhan perubahan, menyusun strategi & rencana (baik dari segi proses bisnis, cara mengintervensi, maupun penyediaan perangkat & resources), melakukan sosialisasi, memastikan keberlangsungan implementasi proses perubahan pada seluruh bagian di perusahaan secara berkelanjutan, termasuk mengatasi resistensi & isu-isu terkait perubahan tersebut, hingga mengukur keberhasilan perubahan dengan instrumen tertentu (e.g., Change Management Indicator, dll.)",
                "definition_english" => "Knowledge and ability to identify the needs of change, develop strategy & plan (either changes in business processes, intervention methods, or provide any relevant tools & resources), perform socialization, ensure continuity of change implementation throughout the organization, incl. manage resistance on change & any other related issues, up to measure the success of change by using certain instruments (e.g., Change Management Indicator, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Innovation Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengideasi (ideation), mendesain program inovasi, menentukan prioritas, melakukan sosialisasi, serta memfasilitasi implementasi ide/inisiatif tersebut pada kegiatan operasional sehari-hari menggunakan tools tertentu (e.g., Ideawake, Viima, Exago SMART, dll.), hingga mendorong terjadinya inovasi secara berkelanjutan, guna memaksimalkan potensi peningkatan efektivitas dan efisiensi kegiatan operasional di perusahaan (dari segi resources, cost, dll.) berdasarkan pada pemahaman terhadap konsep/prinsip inovasi (yang mencakup tahapan, tingkah laku & peran individu terkait inovasi)",
                "definition_english" => "Knowledge and ability to ideate, design innovation program, determine priority, perform socialization, facilitate ideas/initiatives implementation on daily basis by using tools (e.g., Ideawake, Viima, Exago SMART, etc.), up to encourage innovation continuously, in order to improve effectiveness and efficiency on operational activities in organization (in terms of resources, cost, etc.), based an understanding on innovation concepts/principles (incl. innovation stages of process, behaviors & individual roles)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Standardization Management System",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami standar-standar yang berlaku pada sektor nasional, maupun internasional, serta melakukan identifikasi kebutuhan, menentukan, mendapatkan, hingga mempertahankan sistem manajemen terstandarisasi (e.g., ISO, dll.) yang sesuai dengan kebutuhan operasional bisnis perusahaan, guna meningkatkan & meningkatkan kualitas output yang dihasilkan",
                "definition_english" => "Knowledge and ability to understand applicable standards in the national & international sectors, as well as perform needs identification, determine, obtain, up to maintain standardized management system (e.g., ISO, etc.) that suit to corporate operational business in order to enhance output quality",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Reporting & Analysis",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan pengumpulan & pengolahan data (operasional, keuangan, maupun data perusahaan lainnya), hingga menyusun laporan hasil kerja secara lengkap, efektif, serta mudah dipahami dengan menggunakan tata bahasa yang baik dan benar (e.g., laporan bisnis perusahaan, laporan tahunan, laporan berkelanjutan, laporan unit/fungsi dll.), termasuk menyampaikannya kepada pihak-pihak terkait sebagai input untuk menyusun rekomendasi terhadap pengambilan keputusan di perusahaan",
                "definition_english" => "Knowledge and ability to collect & process data (operational, financial, and another corporate data), up to create complete, effective, and easy to read business reports with appropriate and correct grammars (e.g., corporate business report, annual report, sustainability report, business unit report, etc.), incl. reporting it to related parties as a recommendation on corporate’s decision making",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Negotiation",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun strategi berdasarkan pemahaman terhadap latar belakang, kepentingan, maupun kebutuhan bisnis perusahaan yang disasar), mengkomunikasikan/mengemukakan maksud & tujuan, berkompromi, mempersuasi, serta melakukan proses tawar menawar dengan menggunakan teknik/pendekatan tertentu (soft bargaining, hard bargaining, principled negotiation) guna mencapai kesepakatan (win-win, win-lose, dll.) yang dapat diterima oleh kedua belah pihak",
                "definition_english" => "Knowledge and ability to develop strategy based on comprehension understanding on targeted company's background, interests, and business needs, start from communicating purposes & objectives, compromising, persuading, and bargaining by using several techniques/approaches (soft bargaining, hard bargaining, principled negotiation), in order to gain an agreement (win-win, win-lose, etc.) that could be accepted by both parties",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Office Secretarial",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merencanakan & mengatur kegiatan korespondensi serta operasional perusahaan (e.g., meeting, appointment, dll.), berperan sebagai perantara komunikasi (e.g., screening phone calls, dll.), hingga mengumpulkan (compile) materi rapat, dll., guna mendukung kelancaran kegiatan operasional perusahaan",
                "definition_english" => "Knowledge and ability to develop plan & arrange correspondences, as well as corporate operational activities (e.g., meeting, appointment, etc.), act as mediator to support communication process (e.g., screening phone calls, etc.), up to collect (compile) meeting materials, etc., in order to support continuity of corporate operational activities",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Records & File Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan pengaturan (penyusunan kategorisasi, penyimpanan & penggunaan) dokumen, baik bentuk digital maupun non-digital, agar dokumen-dokumen tersebut dapat terkelola secara efektif serta efisien",
                "definition_english" => "Knowledge and ability to arrange documents (categorize, storage & utilization), either digital or non-digital, in order to manage documents effectively and efficiently",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Product D",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumuskan ide/konsep produk (e.g., legacy product, dll.) yang menarik, kreatif, namun feasible, termasuk penyusunan rencana monetisasi, dll., membandingkan dengan desain produk pesaing & preferensi target audiens, serta mengevaluasi nilai komersial dari desain produk tersebut berdasarkan pada prinsip-prinsip & teknik pengembangan desain p",
                "definition_english" => "Knowledge and ability to ideate product design/concepts (e.g., legacy product, etc.) which is interesting, creative, but feasible, incl. create monetization plan, etc., compare corporate’s product design with competitor’s & consider it to target’s preferences, as well as evaluate its commercial value based on product design development principles & techn",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Product Design",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumuskan ide/konsep desain produk digital (e.g., produk video, audio, games, dll.) yang menarik, kreatif, namun feasible, termasuk penyusunan rencana monetisasi, dll., membandingkan dengan desain produk digital pesaing & preferensi target audiens, serta mengevaluasi nilai komersial dari desain produk digital tersebut berdasarkan pada prinsip-prinsip & teknik pengembangan desain produk digital (software engineering)",
                "definition_english" => "Knowledge and ability to ideate digital product design/concepts (e.g., video, audio, games, etc.) which is interesting, creative, but feasible, incl. create monetization plan, etc., compare corporate’s product design with competitor’s & consider it to target’s preferences, as well as evaluate its commercial value based on digital product design development (software engineering) principles & techniques",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Services Design",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumuskan ide/konsep desain services (e.g., IoT, Advertising, Data Solution, Cloud, dll.) yang menarik, kreatif, namun feasible, termasuk penyusunan rencana monetisasi, dll., membandingkan dengan desain services pesaing, preferensi target audiens & pengalaman pelanggan, serta mengevaluasi nilai komersial dari desain services tersebut berdasarkan pada prinsip-prinsip & teknik pengembangan pengembangan desain service, serta interaksi manusia dengan computer/mesin (devices)",
                "definition_english" => "Knowledge and ability to ideate services design/concepts (e.g., IoT, Advertising, Data Solution, Cloud, etc.) which is interesting, creative, but feasible incl. create monetization plan, etc., compare corporate’s service design with competitor’s & customer experience, and evaluate its commercial value based on service design development principles & techniques, as well as human interaction with computers/machines (devices)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Product Prototyping",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan review, penerjemahan, serta simulasi terhadap ide/konsep desain produk (e.g., legacy product, dll.), hingga menjadi suatu prototipe (dengan mempertimbangkan bentuk & fitur desain produk), termasuk menyusun roadmap pengembangan prototipe itu sendiri berdasarkan pada teknik-teknik penyusunan prototipe",
                "definition_english" => "Knowledge and ability to conduct review, translation, and simulation on product design idea/concept (e.g., legacy product, etc.), up to create a prototype (by considering its forms & features), incl. develop product prototyping roadmap based on prototyping techniques ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Product Prototyping",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan review, penerjemahan, serta simulasi terhadap ide/konsep desain produk digital (e.g., produk video, audio, games, dll.), hingga menjadi suatu prototipe (alpha/beta release, MVP, dll.), dengan mempertimbangkan bentuk & fitur desain produk, termasuk menyusun roadmap pengembangan prototipe itu sendiri berdasarkan pada teknik-teknik penyusunan prototipe (e.g., Low-Fidelity Prototyping, High-Fidelity Prototyping, dll.)",
                "definition_english" => "Knowledge and ability to conduct review, perform translation, and simulation on digital product design idea/concept (e.g., video, audio, games, dll.), up to create a prototype (alpha/beta release, MVP, etc.), by considering its forms & features, incl. develop digital product prototyping roadmap based on prototyping techniques (e.g., Low-Fidelity Prototyping, High-Fidelity Prototyping, etc.), ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Services Prototyping",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan review, penerjemahan, serta simulasi terhadap ide/konsep desain services (e.g., IoT, Advertising, Data Solution, Cloud, dll.), hingga menjadi suatu prototipe (dengan mempertimbangkan bentuk & fitur desain produk), termasuk menyusun roadmap pengembangan prototipe itu sendiri berdasarkan pada teknik-teknik penyusunan prototipe (e.g., Low-Fidelity Prototyping, High-Fidelity Prototyping, dll.)",
                "definition_english" => "Knowledge and ability to conduct review, perform translation, and simulation on service design idea/concept (e.g., IoT, Advertising, Data Solution, Cloud, dll.), up to create a prototype (by considering its forms & features), incl. develop service prototyping roadmap based on prototyping techniques (e.g., Low-Fidelity Prototyping, High-Fidelity Prototyping, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Product Testing Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumuskan protokol, pedoman pelaksanaan & penentuan metode pengujian produk berdasarkan pada konsep & teknik-teknik pengujian terhadap produk, melaksanakan market testing (termasuk menyusun jadwal pelaksanaan), hingga menginterpretasi hasil pengujian tersebut, guna memastikan performa & tingkat penerimaan pasar terhadap produk Telkomsel sebelum dilakukan launching",
                "definition_english" => "Knowledge and ability to formulate protocols, implementation guidelines & determinate product testing methods based on the concepts & techniques of products testing, perform market testing (incl. arrange test schedules), up to interpret testing results, in order to ensure Telkomsel products performance & market acceptance before launching",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Product Testing Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumuskan protokol serta pedoman pelaksanaan & penentuan metode pengujian produk digital berdasarkan pada konsep & teknik-teknik pengujian terhadap produk digital, melaksanakan user testing, usability testing, dll., dengan menggunakan tools tertentu (e.g., Validately, UsabilityHub, Userlytics, dll.), hingga menginterpretasi hasil pengujian tersebut, guna memastikan performa produk digital sebelum dilakukan launching",
                "definition_english" => "Knowledge and ability to formulate testing protocols as well as implementation guidelines & determinate digital product testing methods based on the concepts & techniques of digital products testing, perform user testing, usability testing, etc. by using certain tools (e.g., Validately, UsabilityHub, Userlytics, etc.), up to interpret testing results, in order to ensure Telkomsel digital products performance before launching",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Services Testing Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumuskan protokol serta pedoman pelaksanaan & penentuan metode pengujian services berdasarkan pada konsep & teknik-teknik pengujian terhadap services, melaksanakan pengujian integrasi jaringan, konektivitas services, dll., dengan menggunakan tools tertentu (e.g., TestingWhiz, dll.), hingga mengintepretasi hasil pengujian tersebut, guna memastikan performa services sebelum dilakukan launching ",
                "definition_english" => "Knowledge and ability to formulate testing protocols as well as implementation guidelines & determinate service testing based on the concepts & techniques of services testing, perform network integration testing, services connectivity, etc., by using certain tools (e.g., TestingWhiz, etc.), up to interpret testing results, in order to ensure Telkomsel services performance before launching",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Pricing Strategy",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumuskan model penentuan harga/tarif product/services, melakukan price sensitivity analysis, price elasticity of demand, dll., serta modifikasi harga/tarif, berdasarkan pada kebutuhan, karakteristik, perilaku pelanggan, tren ekonomi, value-based pricing, competitor-based pricing, dsb., untuk menghasilkan harga/tarif product/services terbaik, guna mencapai kepuasan pelanggan (enterprise maupun consumer), profit margin & revenue maksimal",
                "definition_english" => "Knowledge and ability to formulate model on determining product/service's prices/rates, perform price sensitivity analysis, price elasticity of demand, etc., as well as modify its prices/rates, based on customer's needs, characteristics, behaviors, economic trends, value-based pricing, competitor-based pricing, etc., to obtain best prices/rates, in order to achieve satisfaction, either for enterprise or consumer segment, and gain maximum profit margin & revenue",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Product/Services Performance Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami standar kualitas kinerja product/services, melakukan monitoring, analisis performansi (performance assessment, baik dengan form secara manual, maupun bantuan software tertentu), serta menyusun rekomendasi tindak lanjut terhadap kinerja product/services (ditingkatkan, diteruskan, ditangguhkan, atau dihentikan)",
                "definition_english" => "Knowledge and ability to understand standards of product/service performance, monitor, conduct performance assessment analysis, either manually or using certain relevant software, as well as provide follow-up recommendations related to product/service performance (improved, continued, deferred, or terminated)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Product/Services Quality Assurance",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun standar kualitas berdasarkan pada prinsip-prinsip penjaminan kualitas product/service, melakukan monitoring, serta menjamin pelaksanaan product/services (baik digital maupun non-digital), berjalan sesuai dengan ekspektasi & standar kualitas yang telah ditetapkan",
                "definition_english" => "Knowledge and ability to develop product/service quality standards based on the principles of quality assurance, perform monitoring as well as assure the implementation of products/services (for both digital and non-digital), in accordance with the expectations & predetermined quality standards",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Visual Design",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menerapkan elemen-elemen estetik (e.g., gambar, warna, tipografi, tata letak, dll.), pada websites, apps, maupun platform digital lainnya, berdasarkan pada prinsip-prinsip, standar, aturan desain visual, dengan menggunakan tools tertentu (e.g., Adobe Photoshop, Sketch, Illustrator, Adobe XD, dll.), guna mendukung peningkatan fitur-fitur pada product/services Telkomsel",
                "definition_english" => "Knowledge and ability to apply aesthetic elements (e.g., images, colors, typography, layout, etc.) on websites, apps, or other digital platforms, based on visual design principles, standards & rules, by using certain tools (e.g., Adobe Creative Suite, Sketch, Canva, etc.), in order to support Telkomsel products/services features enhancement ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Information Architecture Design",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun rencana serta melakukan pengaturan penggunaan label, konten, fungsi, fitur & aspek-aspek penting lain dari situs/aplikasi web/seluler, ke dalam suatu struktur/hierarki/ taksonomi berdasarkan pada prinsip-prinsip pengelolaan desain arsitektur informasi, dengan menggunakan metode tertentu (e.g., affinity diagramming, wireframing, dll.), sehingga mendukung kemudahan penggunaan & pencarian pada perangkat lunak",
                "definition_english" => "Knowledge and ability to develop plan as well as determine appropriate usage of labels, contents, functions, features & any other important aspects of website/web or mobile application, into the structure/hierarchy/taxonomy based on principles of information architecture design, by using certain methods (e.g., affinity diagramming, wireframing, etc.), in order to simplify searching & utilization process of software",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "User Interface Design & Optimiz",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merancang, menambah, menghapus, maupun memodifikasi tampilan antar muka product/services pada berbagai platform, melalui proses review serta analisis terhadap information architecture, elemen visual, teknis & fungsional, berdasarkan pada human-computer interaction principles, guna mencapai tampilan antar muka yang op",
                "definition_english" => "Knowledge and ability to create, add, remove, or modify product/service interface design on various platforms, through review and analysis on information architecture, visual, technical & functional elements, based on human-computer interaction principles, in order to attain optimal interface d",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "User Res",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun rencana, menentukan metode, hingga melaksanakan penelitian guna memahami kebutuhan, perilaku, pengalaman, motivasi, serta persepsi dari pengguna (user) terhadap tampilan desain product/services dengan menggunakan pendekatan berbasis riset metodologis, baik kualitatif (e.g., interviewing, untuk menggali alasan mengapa pengguna tidak menyadari halaman/tombol action tertentu, dll.) maupun kuantitatif (e.g., A/B testing, guna mengetahui conversion rate, jumlah click, persentase pemahaman user terhadap stimulus action tertentu, ",
                "definition_english" => "Knowledge and ability to create plan, determine method, up to conduct research in order to understand user needs, behaviors, experiences, motivation, and perceptions on product/service interfaces, by using methodological research-based approach, both qualitative (e.g., interview, to explore the reasons why users are not aware of certain pages/action buttons, etc.) or quantitative (e.g., A/B testing, to find out conversion rates, number of clicks, percentage of user understanding of certain stimulus actions, ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "UX Writing",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mendesain strategi & rencana penulisan, serta memilih kosakata untuk menciptakan suatu konten pada product/services (e.g., judul, deskripsi pesan, dll.) secara ringkas, akurat, jelas, konsisten, mempertimbangkan perspektif/sudut pandang manusia sebagai pengguna (empati) & berdasarkan pada teknik-teknik penulisan yang berkaitan dengan human-computer interaction principles, guna mendukung interaksi pengguna dengan product/service Telkomsel, membangun pengalaman positif, kepercayaan & memudahkan penyelesaian proses transaksi",
                "definition_english" => "Knowledge and ability to develop writing strategy & plan, as well as select vocabularies to create product/service contents (e.g., title, message, etc.) concisely, accurately, clear, consistent & empathize on human’s perspectives as a user, based on writing techniques and human-computer interaction principles, in order to support user’s interaction with Telkomsel product/service, establish positive experiences, trusts & simplify user’s transaction process",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Loyalty & Retention Program",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun program loyalty berdasarkan tipe-tipe & metode pengelolaan loyalitas pelanggan, memberikan informasi program kepada pelanggan (e.g., special offers, pemberian reward untuk customer VIP, dll.), melakukan review partisipasi pelanggan, hingga evaluasi efektivitas program, guna menjaga keterikatan jangka panjang pelanggan terhadap product/services Telkomsel serta mencegah terjadinya churn",
                "definition_english" => "Knowledge and ability to create loyalty program based on types & methods on managing customer loyalty, provide information to customers (e.g., special offers, giving certain rewards to VIP customers, etc.), perform customer participation reviews, up to evaluate loyalty program effectiveness, in order to maintain long-term customers engagement on Telkomsel products/services and prevent churn",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Market Res",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melaksanakan pengumpulan data lapangan terkait kebutuhan, preferensi, serta perilaku pasar, termasuk menentukan framework, tujuan, serta metode pelaksanaannya (e.g., kualitatif/kuantitatif), hingga menyusun laporan hasil interpretasi data tersebut berdasarkan pada prinsip-prinsip penelitian terstruktur, guna menghasilkan input yang bermakna bagi pelaksanaan analisis pemasaran (e.g., market trend analysis, customer behavior analysis, ",
                "definition_english" => "Knowledge and ability to perform field data collection related to market needs, preferences, and behavior, incl. determine research framework, objectives, and implementation methods (e.g., qualitative/quantitative), up to create research interpretation report based on research principles in order to get important input for any market analysis processes (e.g., market trend analysis, customer behavior analysis, ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Market Research",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan pengumpulan data terkait kebutuhan, preferensi, aktivitas, serta perilaku pasar (e.g., purchase rate, dll.) secara daring, baik melalui survei digital maupun penarikan data, baik real time maupun historikal, yang bersumber dari media sosial (e.g., Twitter, Facebook,dll.), termasuk memproses data tersebut dengan bantuan digital platform (e.g., Google Analytics, dll.) berdasarkan pada prinsip-prinsip penelitian di dunia maya, sehingga menghasilkan data pasar yang ber",
                "definition_english" => "Knowledge and ability to perform data collection related to market needs, preferences, activities, and behavior (e.g., purchase rates, etc.), by online, either conduct digital surveys or retrieve, both real time and historical data, that sourced from social media (e.g., Twitter, Facebook, etc.), incl. process data by using digital platform tools (e.g., Google Analytics, etc.) based on research principles in cyberspace, in order to produce meaningful market",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Market Trend Ana",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan analisis & evaluasi terhadap perubahan tren pasar, mengidentifikasi peluang, serta memprediksi arah permintaan product/services di masa depan dengan menggunakan teknik/tools tertentu (e.g., 200-day moving average, relative strength index, Fibonacci retracement, dll.) berdasarkan pada hasil riset ",
                "definition_english" => "Knowledge and ability to analyze & evaluate any changes related to market trends, identify opportunities, as well as predict future product/service demand, by using relevant techniques/tools (e.g., 200-day moving average, relative strength index, Fibonacci retracement, etc.) based on the results of market res",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Marketing Strategy and Pla",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menentukan tujuan, target segmen, metode pemasaran, termasuk menentukan positioning product/services (value proposition), baik untuk segmen enterprise (e.g., sejauh mana impact dari product/services Telkomsel terhadap perusahaan klien) maupun consumer (e.g., sejauh mana product/services Telkomsel mampu memenuhi keinginan, harapan, serta persepsi konsumen), berdasarkan pada pertimbangan terhadap rencana pemasaran para kompetitor dan hasil analisis kecenderungan tren ",
                "definition_english" => "Knowledge and ability to set marketing objectives, target segments, method, incl. determine product/service positioning (value proposition), either for enterprise segment (e.g., to what extent the impacts of product/service Telkomsel to the clients) or consumer (e.g., to what extent Telkomsel's products/services are able to fulfill consumer needs, expectations, and perceptions) based on consideration of competitors' marketing plans and  market trends analysis re",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Brand Str",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menciptakan brand profile bagi product/services (e.g., logo, key brand messaging, dll.) serta merancang strategi peningkatan nilai dari brand tersebut di mata konsumen berdasarkan prinsip-prinsip pengelolaan brand product/services secara efektif, dengan menggunakan teknik/metode tertentu (e.g., Name Brand Recognition, Crowdsourcing, ",
                "definition_english" => "Knowledge and ability to create products/service brand profile (e.g., logo, key brand messaging, etc.) as well as formulate brand value improvement strategy to consumers, based on managing effective product/services brand, by using certain methods/techniques (e.g., Name Brand Recognition, Crowdsourcing, ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "E-Branding Str",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merancang strategi peningkatan nilai dari brand product/services di mata konsumen dengan memanfaatkan platform digital dan/atau media internet (e.g., media sosial, dll.) maupun tools yang ditawarkan di internet, berdasarkan pada prinsip-prinsip pengelolaan brand product/services secara ef",
                "definition_english" => "Knowledge and ability to formulate product/service brand value improvement strategy to consumers by utilizing digital platforms/internet media (e.g., social media, etc.) or any tools that offered on the internet, based on managing effective product/services brand through digital plat",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Graphic D",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengembangkan/menggunakan elemen-elemen visual (e.g., motion, tipografi, estetika, komposisi, teori & jenis warna, dll.) untuk menjawab permasalahan komunikasi marketing, berdasarkan pada prinsip-prinsip desain grafis & komunikasi visual, dengan bantuan tools terkait (e.g., Pixlr, Adobe Creative Suite, InDesign, Affinity Designer, ",
                "definition_english" => "Knowledge and ability to develop/utilize visual elements (e.g., motions, typography, aesthetics, composition, color theory & types, etc.) as an answer to marketing communication problem, based on principles of graphic design & visual communication by using relevant tools (e.g., Pixlr, Adobe Creative Suite, Visual CSS Tools, DeviantART, ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Promotion and Campaign Manag",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menentukan tujuan, target, sasaran, jadwal, serta ruang lingkup program promosi & kampanye (marketing communication), melakukan implementasi (melalui media press releases, web sites, public relations events, dll.), hingga melaksanakan evaluasi efektivitas program berdasarkan pada prinsip-prinsip komunikasi marketing serta selaras dengan products/services brand str",
                "definition_english" => "Knowledge and ability to determine goals, targets, objectives, schedules, and scopes of promotional & campaign (marketing communication) program, implement it (through press releases, web sites, public relation events, etc.), up to evaluate program effectiveness based on principles related to marketing communication and align with product/service brand str",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Telemarketing",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menggunakan perangkat telekomunikasi, menghubungi calon pelanggan potensial, serta melaksanakan penyebaran informasi komersial (e.g., promo, penawaran produk, dll.) melalui telepon dan/atau fax, tidak mencakup pemasaran melalui pesan langsung (direct mail marketing)",
                "definition_english" => "Knowledge and ability to use telecommunications devices, contact prospective customers, as well as perform commercial information dissemination (e.g., promos, product offerings, etc.) via telephone or fax, excl. direct messages marketing (direct mail marketing) ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Search Engine Optimization (SEO)",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan upaya-upaya terkait optimasi laman web, peningkatan visibilitas laman web (e.g., modifikasi judul, keyword, integrasi dengan sosial media, dll.), guna mengoptimalkan hasil temuan, terkait informasi komersial product/services  (e.g., promo, penawaran produk, dll.) pada mesin telusur (Search Engine, e.g., Google, DuckDuckGo, dll.)",
                "definition_english" => "Knowledge and ability to optimize & improve websites visibility, by using titles modification, keywords, social media integration, etc., in order to expand findings related to product/service commercial information (e.g., promos, product offers, etc.) on the search engines (e.g., Google, DuckDuckGo, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Social Media Marketing",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melaksanakan penyebaran informasi komersial (e.g., promo, penawaran produk, dll.) dengan memanfaatkan fitur-fitur media sosial (e.g., tag, hashtag, dll.) yang memungkinkan terjadinya share, like, re-tweet hingga membentuk word of mouth (Buzz Marketing) berdasarkan pada prinsip serta aturan pemasaran berbasis media sosial & pemanfaatan channel-channel pemasarannya",
                "definition_english" => "Knowledge and ability to perform commercial information dissemination (e.g., promos, product offerings, etc.) by utilizing social media features (e.g., tags, hashtags, etc.) that increase possibility to be shared, liked, re-tweeted, as well as create word of mouth (Buzz Marketing), based on the principles and rules of social media-based marketing & use of its marketing channels",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Mobile Marketing",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melaksanakan penyebaran informasi komersial (e.g., promo, penawaran produk, dll.) dengan memanfaatkan fitur-fitur media sosial (e.g., tag, hashtag, dll.) yang memungkinkan terjadinya share, like, re-tweet hingga membentuk word of mouth (Buzz Marketing) berdasarkan pada prinsip serta aturan pemasaran berbasis media sosial & pemanfaatan channel-channel pemasarannya",
                "definition_english" => "Knowledge and ability to perform commercial information dissemination (e.g., promos, product offerings, etc.) by utilizing social media features (e.g., tags, hashtags, etc.) that increase possibility to be shared, liked, re-tweeted, as well as create word of mouth (Buzz Marketing), based on the principles and rules of social media-based marketing & use of its marketing channels",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Advertising",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menentukan channel digital terbaik serta melakukan pemasangan iklan berbasis digital pada media internet (e.g., DisplayAds, Pop-up Ads, dll.), sebagai sarana untuk menjalankan aktivitas pemasaran product/services (e.g., memberikan informasi terkait promo, penawaran produk, ",
                "definition_english" => "Knowledge and ability to determine the best digital channel and advertise product/services through internet (e.g., DisplayAds, Pop-up Ads, etc.), as a media to perform marketing (e.g., provide information related to promos, product offers, e",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Sales Strategy and Planning",
                "type" => "TECHNICAL SKILL",
                "definition" => "Sales Strategy and Planning",
                "definition_english" => "Pengetahuan dan kemampuan dalam menyusun strategi, menetapkan target penjualan (untuk segmen consumer) dan/atau target pengembangan/pembinaan hubungan bisnis (win or retain—untuk segmen enterprise), termasuk melakukan cascading & adjustment terhadap strategi dan target tersebut (jika diperlukan), sehingga selaras & mampu mendukung pencapaian strategi serta tujuan bisnis perus",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Selling",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengenali (understanding), menarget calon pelanggan (prospecting/ targeting), menawarkan product/services (termasuk memberikan saran untuk upselling, dll.) kepada pelanggan eksisting maupun baru, hingga melakukan pendekatan secara terstruktur, baik secara verbal maupun non-verbal (e.g., assumptive close, option close, suggestion close, dll.) untuk menyelesaikan/menutup proses penjualan product/services serta menjamin komitmen membeli dari pelanggan",
                "definition_english" => "Knowledge and ability to understand, recognize, prospect & target potential customers, up to offer product/services (incl. encourage customers to purchase upselling, etc.), either to existing or new customers, as well as perform structured approach. either verbally and non-verbally (e.g., assumptive close, option close, suggestion close, etc.) in order to complete/close sales process and ensure customer's commitment on purchases product/service",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Sales Performance Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan monitoring secara berkala, evaluasi, serta menyusun rekomendasi kinerja penjualan",
                "definition_english" => "Knowledge and ability to perform periodic monitoring, evaluate, and provide recommendations related to sales performance ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Channel Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun strategi manajemen channel, melakukan pemilihan, mengevaluasi performa, hingga memelihara hubungan dengan channel penjualan sesuai dengan jenis dan tata cara pembinaan hubungan yang berlaku, guna memperluas jangkauan serta mendukung peningkatan pencapaian penjualan product/services Telkomsel ",
                "definition_english" => "Knowledge and ability to develop channel management strategy, choose, and evaluate their performances, as well as maintain sales channel relationship in accordance with types & procedures of sales channel relationship management, in order to expand sales coverage and attain Telkomsel product/services sales targets",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Customer Experience Design",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumuskan roadmap customer experience (termasuk customer journey map, persona, dll.), melakukan perbaikan/pengembangan desain tersebut secara berkelanjutan, berdasarkan prinsip-prinsip pengelolaan pengalaman pelanggan (customer experience), serta melalui analisis mendalam yang berfokus pada karakteristik, perilaku, kecenderungan, minat & aspek penting lain dari para customer (customer-centric), sehingga mampu mencapai customer satisfaction index yang diharapkan",
                "definition_english" => "Knowledge and ability to formulate customer experience roadmap (incl. customer journey map, persona, etc.), improve/develop its design continuously, based on principles of customer experience management, as well as perform in depth analysis that focused on customer characteristics, behaviors, intentions, interests & another important aspects (customer-centric), in order to attain an expected customer satisfaction index",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Customer Experience Evaluation",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan evaluasi terhadap keseluruhan aspek pengalaman pelanggan (mencakup sikap, emosi, pemikiran, perilaku, dll.) atas product/service Telkomsel, baik sebelum, saat, maupun setelah menyelesaikan proses transaksi, guna menghasilkan rekomendasi perbaikan desain pengalaman pelanggan perusahaan",
                "definition_english" => "Knowledge and ability to evaluate entire aspects of customer experience (incl. attitudes, emotions, thoughts, behaviors, etc.) on Telkomsel product/services, for before, current, and after transaction processes, in order to provide recommendations to improve corporate’s customer experience design",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Customer Service Design",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengembangkan serta mensosialisasikan strategi & desain operasional layanan pelanggan (sistem, mekanisme, pedoman, SLA, dll.) secara berkelanjutan, termasuk standar/indikator penilaian performa layanan, melalui proses brainstorming, review desain eksisting, dll., guna mendukung terciptanya efektivitas pelayanan (service excellence)",
                "definition_english" => "Knowledge and ability to develop and socialize customer service operation strategy & design (systems, mechanisms, guidelines, SLA, etc.) continuously, incl. service performance standards/indicators, through brainstorming process, reviewing existing design, etc., in order to provide service excellence",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Customer Care",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menerima permintaan dan/atau kebutuhan pelanggan dengan menerapkan teknik mendengar aktif, empati, dll., serta memberikan respon yang sesuai berdasarkan pada metode, pedoman & desain pelayanan pelanggan, termasuk menghasilkan solusi atas permasalahan yang dihadapi pelanggan, melakukan eskalasi (jika diperlukan), monitoring, hingga menjamin penyelesaian masalah selaras dengan SLA yang telah ditetapkan, guna mencapai service excellence & emotional connection terhadap pelanggan",
                "definition_english" => "Knowledge and ability to receive customer requests or needs, by applying active listening techniques, empathy, etc., as well as give appropriate responses, in accordance with customer service design, methods, & guidelines, incl. provide solutions for customer’s problems, perform escalation (if needed), monitor, and assure that the problems are solved align with predetermined SLA, in order to attain service excellence and emotional connection with customers ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Service Level Agreement Assessment",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengukur pencapaian Service Level Agreement (SLA), dengan menggunakan metode-metode pengukuran SLA yang telah disepakati (e.g., survey, interview, feedback, dll.), guna menghasilkan rekomendasi perbaikan desain maupun operasional pemberian layanan",
                "definition_english" => "Knowledge and ability to measure Service Level Agreement (SLA) fulfillment, by using Level Agreement (SLA) measurement methods (e.g., survey, interview, feedback, etc.) in order to provide recommendations to customer service operation strategy & design ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Customer Touch Point Evalu",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami serta menganalisis informasi terkait perilaku pelanggan di berbagai touch point (didapat melalui assessment, survei, wawancara, monitoring, dll.), guna menghasilkan rekomendasi peningkatan performansi layanan perus",
                "definition_english" => "Knowledge and ability to understand and analyze information related to customer behavior in each touch points (that obtained through assessment, survey, interview, monitoring process, etc.), in order to provide recommendation to service improv",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "After-sales Se",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengidentifikasi kebutuhan pelayanan hingga melakukan implementasi pemberian layanan teknis pasca penjualan kepada pelanggan (e.g., membantu proses aktivasi, mengelola penukaran/pengembalian, dll.) secara akurat, tepat waktu, serta sesuai dengan tipe & prosedur pelayanan pasca penjualan yang ditentukan, termasuk melakukan monitoring dan eskalasi (jika diperl",
                "definition_english" => "Knowledge and ability to identify service needs up to perform implementation of after-sales technical service delivery (e.g., give support on activation process, manage exchange/return, etc.) accurately, on-time, and align with predetermined procedures, incl. monitor and support escalation process (if ne",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Educating Customers",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami, memberikan pemahaman, serta mendemonstrasikan kelebihan, kegunaan/manfaat & fitur-fitur product/services Telkomsel kepada pelanggan, dengan memberikan penjelasan formal, pengajuan probing, dll.",
                "definition_english" => "Knowledge and ability to understand, provide understanding, demonstrate, and explain Telkomsel product/services excellence, use/benefits & features to the customers, either in formal way, use probing, or etc.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IT Strategic Planning",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumuskan konsep, rencana (roadmap) & strategi jangka panjang IT berdasarkan hasil analisis (baik empirik maupun literature review), serta penyelarasan terhadap strategi bisnis, proses bisnis, dan kebutuhan/inisiatif/ekspektasi stakeholder terhadap teknologi informasi, sebagai dasar atau arahan terkait pengembangan solusi yang tepat bagi keberlangsungan bisnis perusahaan",
                "definition_english" => "Knowledge and ability to formulate IT concepts, roadmap & long term strategic plan, based on the results of analysis (both empirical and literature review) and align with business strategies, business processes, as well as stakeholder’s needs/initiatives/expectations on technology information, as a basis or direction to develop appropriate solutions for business sustainability in organization",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IT Architecture Design",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumusakan desain rancang bangun IT (e.g., Cobit, ITIL, TOGAF, APQC, dll.), termasuk struktur/ kerangka pengembangan solusi IT (baik hardware, software, maupun komponen IT lainnya), berdasarkan pada prinsip-prinsip, metode, standar, serta pedoman penyusunan yang berlaku, dengan memperhatikan keselarasannya pada IT strategic plan perusahaan, guna mendukung pencapain tujuan & target pengembangan solusi IT",
                "definition_english" => "Knowledge and ability to formulate detailed IT architecture, (e.g., Cobit, ITIL, TOGAF, APQC, etc.) incl. IT solution development structure/framework (either for hardware, software, or another IT components), based on the principles, methods, standards, and guidelines that align with IT strategic plan, in order to attain IT development’s goals & targets ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IT Governance",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumuskan, menyampaikan, hingga monitoring kepatuhan penerapan tata kelola IT di perusahaan, guna memastikan kesesuaian, keselarasan & efektivitas praktik IT dengan prinsip-prinsip, panduan, kebijakan, visi, misi, rencana strategis, maupun standar pelayanan IT di perusahaan",
                "definition_english" => "Knowledge and ability to formulate, deliver, up to monitor compliance of IT governance implementation in the organization, to ensure the suitability, alignment & effectiveness of IT practices with principles, guidelines, polices, vision, mission, strategic plans, or IT service standards in the organization",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "ICT Business Continuity ",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan identifikasi elemen, proses & kondisi kritikal terkait kontinuitas ICT, baik yang terduga (e.g., bisnis, market, dll.) maupun tidak terduga (e.g., bencana alam, wabah, dll.), merumuskan strategi mitigasi bencana, menentukan tujuan, metode & desired level, termasuk memastikan ketersediaan resources & tools yang dibutuhkan (e.g., ClearView, BCMFort, dll.), serta menguji kesesuaian & kesiapan rencana ICT business continuity, melakukan penanganan, hingga pemulihan komponen/elemen ICT saat terjadi bencana/keadaan darurat, guna menjamin keberlangsungan & stabilitas sistem kritikal ICT yang mendukung jalannya bisnis perusahaan secara berkelanjutan",
                "definition_english" => "Knowledge and ability to identify elements, processes & critical conditions that might affect ICT continuity, whether expected (e.g., business, market, etc.) or unexpected events (e.g., natural disasters, epidemics, etc.), formulate events mitigation strategy, determine objectives, methods & desired levels, incl. ensure resources & tools availability (e.g., ClearView, BCMFort, etc.), as well as suitability & readiness testing of ICT business continuity plan, perform events handling, recover ICT components/elements in disaster/emergency situation, in order to assure critical ICT system continuity & stability, to support corporate’s business",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IT Requirement Analysis",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengumpulkan informasi terkait kebutuhan bisnis (business requirement) & keinginan/harapan/persepsi user (user requirement) terkait pengembangan aplikasi, software, platform, dll. dengan melakukan klarifikasi, analisis (e.g., gap analysis, analisis dampak dari solusi tsb.—terhadap cost, profit, margin, dll.), termasuk mempertimbangkan probability cases & menentukan prioritas solusi yang feasible untuk dijalankan, hingga menerjemahkannya menjadi solusi yang tepat guna, bermanfaat bagi keberlangsungan bisnis perusahaan, serta mampu memenuhi ekspektasi stakeholders dan/atau end-user",
                "definition_english" => "Knowledge and ability to collect information related to business requirement &  user requirements (needs/expectations/perceptions) related to application, software, platform etc. development, perform clarification, analysis (e.g., gap analysis, impact analysis of its solution—on cost, profit, margin, etc.) incl. consider probability of cases & determine the priority of a feasible solution to run up, as well as translate it into an appropriate solution that beneficial for corporate’s business continuity, and able to fulfill stakeholders and/or end-users expectations",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Application/ Software Design",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumuskan ide, hingga merancang konsep aplikasi/software, baik mobile apps, web software, dan lain sebagainya berdasarkan pada prinsip-prinsip pengembangan desain aplikasi/software serta selaras dengan requirement document serta mempertimbangkan dampak dari desain tersebut (baik terhadap cost maupun faktor-faktor terdampak lainnya)",
                "definition_english" => "Knowledge and ability to formulate ideas, up to design  application/software concepts, for mobile apps, web software, etc., based on the principles of application/software design development as well as align with requirement documents and consider any impacts of its design (either to cost or other impacted factors)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Application Programming",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami, menginput (coding) bahasa pemrograman tertentu (e.g., Java, Kotlin, dll.), serta menggunakan tools terkait untuk mengembangkan aplikasi client-side",
                "definition_english" => "Knowledge and ability to understand, perform coding on certain programming languages (e.g., Java, Kotlin, etc.), and use relevant tools to develop client-side applications",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Systems Programming",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami, menginput (coding) bahasa pemrograman tertentu (Machine Oriented High Order Languages/MOHOL, Scripting Language, e.g., ALGOL, Pascal, dll.), menggunakan tools terkait untuk mengembangkan software system, termasuk di dalamnya software server-side maupun software platform, serta mengendalikan & mengatur skenario pemrosesan kode/script, guna mengantisipasi terjadinya perlambatan pada software/platform software",
                "definition_english" => "Knowledge and ability to understand, perform coding on certain programming languages (Machine Oriented High Order Languages/MOHOL, Scripting Language, e.g., ALGOL, Pascal, etc.), and use relevant tools to develop software system, incl. server-side software or software platform, as well as control & manage scenarios for coding/scripting processes, in order to anticipate software/software platforms deceleration",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IoS App Programming",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami, menginput (coding) bahasa pemrograman tertentu (e.g., Swift, dll.), serta menggunakan tools terkait (e.g., Xcode, dll.) untuk mengembangkan aplikasi client-side berbasis IoS",
                "definition_english" => "Knowledge and ability to understand, perform coding on certain programming languages (e.g., Swift, etc.), and use relevant tools to develop client-side applications for IoS",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Android App Programming",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami, menginput (coding) bahasa pemrograman tertentu (e.g., Java, Kotlin, C++, dll.), serta menggunakan tools terkait (e.g., Android Studio, dll.) untuk mengembangkan aplikasi client-side berbasis Android",
                "definition_english" => "Knowledge and ability to understand, perform coding on certain programming languages (e.g., Java, Kotlin, C++, etc.), and use relevant tools to develop client-side applications for Android",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Android App Programming",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami, menginput (coding) bahasa pemrograman tertentu (e.g., Java, Kotlin, C++, dll.), serta menggunakan tools terkait (e.g., Android Studio, dll.) untuk mengembangkan aplikasi client-side berbasis Android",
                "definition_english" => "Knowledge and ability to understand, perform coding on certain programming languages (e.g., Java, Kotlin, C++, etc.), and use relevant tools to develop client-side applications for Android",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Web Software Programming",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami, menginput (coding) algoritma/bahasa pemrograman tertentu (e.g., HHTML, CSS, Python, PHP, dll.), serta memodifikasi perangkat lunak (software) client-side berbasis web",
                "definition_english" => "Knowledge and ability to understand, perform coding on certain algorithm/programming languages (e.g., HHTML, CSS, Python, PHP, etc.), and modify client-side software for web",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Clean Code Programming",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami serta menginput (coding) algoritma/bahasa pemrograman tertentu secara jelas, terstruktur, mudah dipahami, dibaca, dikembangkan & dikelola oleh anggota tim, khususnya untuk project-project berbasis agile",
                "definition_english" => "Knowledge and ability to understand and perform coding on certain algorithm/programming languages clearly, structured, easily understood, readable, and manageable for all team members, esp. for agile-based projects",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Application/ Software Testing",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumuskan detail rencana pengujian, yang terdiri dari tujuan, kriteria keberhasilan, penentuan kondisi/persyaratan pengujian, definisi kasus yang mungkin terjadi, dll., melaksanakan pengujian aplikasi/software (baik secara konvensional maupun dengan bantuan tools, e.g., Selenium, Testing-Whiz, Katalon Studio, dll.), serta mengevaluasi permasalahan yang terjadi saat pengujian (e.g., gangguan umum, bug, kesalahan, dll.), sehingga menghasilkan rekomendasi perbaikan/modifikasi lanjutan terhadap aplikasi/software",
                "definition_english" => "Knowledge and ability to formulate detail test plan, that consists objectives, success criterias, test conditions/requirements, possible case definitions, etc., perform application/software testing (either in conventional ways or with relevant tools, e.g., Selenium, Testing-Whiz, Studio Studio, etc.), as well as evaluate occuring problems during testing (e.g., bugs, etc.), in order to provide recommendations for further improvements/modifications to application/software ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Continuous Integration/ Continuous Deployment (CI/CD)",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan pengaturan/integrasi input (coding) antara kode baru & kode utama secara bersama-sama dengan bantuan version control system (git repositories), serta melaksanakan serangkaian pengujian berkelanjutan terotomatisasi (automated testing), hingga memastikan akurasi & kesiapan kode aplikasi baru yang telah terinput, termasuk menerapkan beragam pola berisiko rendah pada proses deployment (low-risk deployment pattern, e.g., canary, A/B, blue-green, dll.), guna menghasilkan software bersifat agile yang sesuai kebutuhan user maupun bisnis",
                "definition_english" => "Knowledge and ability to perform setting up/integration coding on new and main codes simultaneously by using version control system (git repositories), also conduct series of automated testing continuously, to ensure accuracy & readiness of inputted application new codes, incl. implement low-risk deployment pattern (e.g., canary, A/B, blue-green, dll.), to deliver agile based software that meets user and business requirements",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Container",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan pengemasan/isolasi kode aplikasi/software ke dalam suatu teknologi/unit standar yang disebut wadah (container), termasuk keseluruhan standar/keadaan yang diperlukan aplikasi/software agar dapat berfungsi (runtime environment), terdiri dari binaries, configuration file, dependencies & libraries, memastikan keberfungsiannya meskipun berada pada lingkungan/infrastruktur komputasi berbeda, mengoperasikan platform terkait (e.g., Docker, Openshift, K8S, dll.), hingga memanfaatkan fitur registry dari platform tersebut (e.g., push and pull, dll.), sesuai dengan konsep virtual machine berkapasitas memori rendah, guna memudahkan utilisasi aplikasi/software serta menghemat resources",
                "definition_english" => "Knowledge and ability to package up/isolate application/software codes into technology/standard unit called container, incl. fulfill standard runtime environment to run the application/software inside, that consists binaries, configuration file, dependencies & libraries, ensure its function even in different computing environments/infrastructures, operate the platforms (e.g., Docker, Openshift, K8S, etc.), as well as utilize its registry features (e.g., push and pull, etc.), based on concepts of low memory capacity virtual machine, in order to simplify application/software development and resources utilization ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Application Programming Interface (API)",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun rencana & diagram interaksi antar aplikasi, melakukan integrasi/penggabungan hingga penyelarasan bahasa pemrograman dari satu aplikasi dengan aplikasi lainnya berdasarkan pada standar serta protokol terkait integrasi aplikasi (e.g., Representational State Transfer Protocol – URL format, status code), dengan menggunakan alat bantu/tools tertentu (e.g., SoapUI, Apigee, Postman, dll.), sesuai dengan tipe platform dari aplikasi tersebut, guna mengoptimalisasi fitur serta fungsionalitas/penggunaan aplikasi di perusahaan",
                "definition_english" => "Knowledge and ability to develop plan & applications interaction diagram, perform integration up to programming languages alignment from one application to another based on standards and protocols related to application integration (e.g., Representational State Transfer Protocol – URL format, status code)  by using certain tools (e.g., SoapUI, Apigee, Postman, etc.), in accordance with the tyeps of application platform, in order to optimize application’s features and functionality in organization",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "System Integration",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyelaraskan komponen-komponen ICT terintegrasi (e.g., jaringan, server, platform, interface, sub-sistem, dll.), sesuai protokol penyelarasan yang berlaku, dengan menggunakan teknik/metode integrasi tertentu (e.g., computer networking, enterprise application, manual programming, dll.), serta melalui proses assessment & identifikasi terhadap technical requirement, termasuk mengevaluasi efektivitas penggunaannya, guna mengoptimalisasi kapabilitas & interoperabilitas antar komponen-komponen ICT tersebut",
                "definition_english" => "Knowledge and ability to integrate ICT components (e.g., networks, servers, platforms, interfaces, sub-systems, etc.), according to the applicable alignment protocol by using certain techniques/methods (e.g., computer networking, enterprise application, manual programming, etc.) as well as through assessment & identification process on technical requirements, incl. evaluate the effectiveness of its use in order to optimize capability & interoperability between ICT components",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "ERP Module",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menganalisis, merancang, serta mengembangkan kebutuhan modul ERP (Enterprise Resource Planning), guna mengelola berbagai proses bisnis di perusahaan pada satu aplikasi terpusat, termasuk menyusun rekomendasi agar prosesnya menjadi lebih optimal, efektif & efisien",
                "definition_english" => "Knowledge and ability to analyze, design, and develop ERP (Enterprise Resource Planning) modules, in order to manage various business processes in the organization in one centralized application, incl. provide recommendations so the process could become more optimal, effective & efficient",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Cloud Computing",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengintegrasikan infrastruktur, services, serta software melalui virtualisasi, termasuk melakukan konfigurasi jaringan berdasarkan pada prinsip-prinsip virtualisasi berbasis cloud, guna meningkatkan efisiensi, utilisasi, serta fleksibilitas dari teknologi/resources yang ada saat ini",
                "definition_english" => "Knowledge and ability to integrate infrastructures, services, and software through virtualization, incl. network configuration based on principles of cloud-based virtualization,  in order to improve efficiency, utilization, and flexibility of existing technologies/resources",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Machine Learning",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami & menerapkan konsep kecerdasan buatan (artificial intelligence) dengan melakukan konfigurasi, permutasi data set, serta menentukan algoritma/metode komputasi matematika tertentu untuk menciptakan model 'pembelajaran' (training data) sehingga aplikasi/software mampu menyelesaikan suatu pekerjaan dan/atau menghasilkan solusi secara mandiri",
                "definition_english" => "Knowledge and ability to understand & apply concepts of artificial intelligence, perform configuration, data permutation, and determine specific mathematical algorithms/methods to create a 'learning' model (training data), so that the application/software is able to complete job and/or provide solutions independently",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Internet of Things Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menganalisis, memformulasikan, serta mengembangkan platform yang dibutuhkan (baik hardware maupun software), melakukan integrasi dan/atau automasi terhadap komponen/perangkat komputasi IT (termasuk sensor/alat penunjangnya), data & konektivitas ke dalam satu jaringan internet, dengan menggunakan enterprise built tools atau open source tools, berdasarkan pada konsep & prinsip-prinsip terkait virtual connectivity, sehingga tercipta suatu solusi spesifik yang sesuai kebutuhan pelanggan",
                "definition_english" => "Knowledge and ability to analyze, formulate, and develop platforms that are needed (both hardware and software), as well as interrelate or automate computing devices/equipments (incl. sensors/its supporting devices), data & connectivity into internet network, by using enterprise built tools or another open source tools, based on concepts & principles of virtual connectivity, in order to provide specific solutions align with customer’s needs",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Hardware Infrastructure",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan penyediaan, konfigurasi, hingga pengaturan (setting) terhadap komponen-komponen perangkat keras (hardware infrastructure, e.g., storage devices, desktop, computer, printer, dll.) yang dibutuhkan perusahaan, termasuk melaksanakan tes/deaktivasi komponen-komponen tertentu, untuk memastikan infrastruktur tersebut dapat digunakan & berfungsi  dengan baik",
                "definition_english" => "Knowledge and ability to provide, configure & set up any hardware infrastructures (e.g., storage devices, desktops, computers, printers, etc.) that are needed by organization, incl. perform tests/deactivations on certain components, to ensure infrastructure usability & functionality ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Software Infrastructure",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan penyediaan, konfigurasi, serta instalasi terhadap komponen-komponen perangkat lunak (software infrastructure) yang dibutuhkan perusahaan, baik berbasis ERP maupun Non ERP, termasuk melaksanakan tes/mencopot pemasangan komponen-komponen tertentu, untuk memastikan infrastruktur tersebut dapat digunakan & berfungsi  dengan baik",
                "definition_english" => "Knowledge and ability to provide, configure & install any software infrastructure that are needed by organization, both ERP and Non ERP, incl. perform tests/uninstallation on certain components, to ensure infrastructure usability & functionality",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Multimedia Infrastru",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan penyediaan, konfigurasi, serta pengaturan (setting) terhadap komponen-komponen layanan multimedia (multimedia infrastructure, e.g., audio video conference, audio visual system, dll.) yang dibutuhkan perusahaan, termasuk melaksanakan tes/deaktivasi komponen-komponen tertentu, untuk memastikan infrastruktur tersebut dapat digunakan & berfungsi  dengan",
                "definition_english" => "Knowledge and ability to provide, configure & set up any multimedia infrastructures (e.g., audio video conference, audio visual system, etc)  that are needed by organization, incl. perform tests/deactivations on certain components, to ensure infrastructure usability & function",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Centre Facilities Manag",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan pengaturan, monitoring secara rutin, hingga menindaklanjuti perihal terkait data centre resources & facilities (e.g., pengaturan energi, alokasi daya, lingkungan sekitar data centre, dll.) sesuai dengan standar fasilitas/perangkat data centre (termasuk resources terkaitnya), guna mendukung kelancaran dan stabilitas operasional data centre di perus",
                "definition_english" => "Knowledge and ability to set up, monitor, up to follow up any cases related to data centre resources & facilities (e.g., energy management, power supply allocation, data centre’s surroundings, etc.), in accordance with data centre standard systems/facilities (incl. another relevant resources), to ensure data centre works smoothly and stable in the organiz",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IT Operation and Mainte",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan monitoring hingga pemeliharaan terhadap perangkat & sistem teknologi informasi, termasuk bagian-bagian kritikal pada perangkat IT di perusahaan, guna memastikan efektivitas, keandalan, serta stabilitas operasional IT di perus",
                "definition_english" => "Knowledge and ability to perform monitoring as well as maintenance on information technology devices & systems, incl. IT critical components & systems, to ensure its effectivity, reliability and stability of IT operations in the organiz",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "End User Su",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menerima, menyediakan, hingga mengevaluasi pemberian layanan/dukungan teknis level pertama (first line problems or defect handling) sesuai kebutuhan user (user’s needs) sebagai pengguna dari layanan IT (customer/end ",
                "definition_english" => "Knowledge and ability to receive, provide up to evaluate first line technical support delivery on problems or defects handling in accordance with user’s needs as a customer/end user of IT ser",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IT Troublesho",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengidentifikasi siklus permasalahan, melakukan root cause analysis, mengidentifikasi berbagai kemungkinan solusi permasalahan, melaksanakan penanganan masalah IT, serta mendokumentasikannya sesuai dengan prinsip-prinsip dan proses penanganan masalah IT, guna mencegah terjadinya insiden ber",
                "definition_english" => "Knowledge and ability to identify problem’s cycles, perform root cause analysis, identify any possible solutions to problems, handle and solve IT problems, as well as its documentation in accordance with principles & processes of IT problems handling, in order to prevent recurring inci",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IT Quality Assu",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun standar mutu IT, memonitor, serta mengevaluasi efektivitas implementasi standar mutu IT, termasuk menjamin terlaksananya kepatuhan terhadap standar mutu IT di perusahaan, guna mendukung terciptanya layanan IT yang berkualitas, andal, efektif, efisien, & terst",
                "definition_english" => "Knowledge and ability to formulate IT quality standards, monitor, and evaluate the its implementation, incl. ensure organization's compliance to IT quality standards, in order to provide IT services that are well quality, reliable, effective, efficient & standar",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Information Sec",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merencanakan, membangun, menerapkan, memonitor hingga mengevaluasi sistem pengamanan aset informasi perusahaan (e.g., arahan bisnis, data in storage, dll.), sesuai dengan prosedur/standar/ketentuan/aturan keamanan yang berlaku, guna menjamin kerahasiaan (confidentiality), keutuhan (integrity), kehandalan (reliability), dan ketersediaan informasi (availability of informa",
                "definition_english" => "Knowledge and ability to plan, develop, implement, monitor, up to evaluate corporate’s information assets security systems (e.g., align with business direction, data in storage, etc.), in accordance with security procedures/standards/provisions/rules, in order to warrant information confidentiality, integrity, reliability, and availability of inform",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Cyber Sec",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan identifikasi, monitoring serta investigasi terhadap seluruh aktivitas siber, termasuk  menentukan tools/metode yang akan digunakan & memodifikasi sistem pengamanan IT perusahaan dari risiko serangan siber (e.g., peretasan, eksploitasi, pemanfaatan, penggunaan data/informasi perusahaan secara ilegal) secara berkelanjutan, guna memastikan keamanan & kesesuaian pelaksanaan aktivitas siber dengan prosedur/standar yang ber",
                "definition_english" => "Knowledge and ability to identify, monitor, as well as investigate all cyber activities, incl. determine the most appropriate tools/methods & modify corporate’s information security system from the likelihood of cyber attacks (e.g., hacking, information exploitation, any illegal uses/actions, etc.) continuously, in order to ensure safety & conformity of cyber activities aign with organization’s procedures/stan",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Access Control & Identity Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengidentifikasi, menganalisis, menyediakan, serta memberikan otentikasi hingga otorisasi (izin) untuk mengakses aplikasi maupun data penting di perusahaan, sesuai dengan peran & kewenangan/hak pengguna (Segregation of Duty) masing-masing, termasuk melakukan verifikasi identitas pengguna dengan menggunakan beragam metode, seperti biometrics (e.g., face/eyes recognition, fingerprint scanning, voice identification, dll.), password, OTP, dsb., guna meningkatkan penjagaan terhadap aplikasi/data penting di perusahaan",
                "definition_english" => "Knowledge and ability to identify, analyze, provide, and allow the authentication & authorization process for accessing important application/information in organization, align with Segregation of Duty for each, incl. identity verification that uses various methods, such as biometrics (e.g., face/eyes recognition, fingerprint scanning, voice identification, etc.), passwords, OTP, etc., in order to protect any important application/information in organization",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Secure Programming",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami serta menginput (coding) algoritma/bahasa pemrograman tertentu dengan menerapkan pola pikir seorang peretas & prinsip-prinsip pengkodean yang aman (e.g., OWASP best practices), guna menghasilkan perangkat lunak (software) yang terlindung dari kerentanan, serangan maupun hal-hal terkait lainnya yang dapat menyebabkan kerusakan",
                "definition_english" => "Knowledge and ability to understand and perform coding on certain algorithm/programming languages by thinking as a hacker and applying principles of secure programming (e.g., OWASP best practices), in order to deliver software that is protected from vulnerabilities, attacks, and another relevant damage causes",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Architecture Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun rancang bangun/rancang biru (blueprint) pengelolaan data, termasuk value chain data management dari sudut pandang luas (helicopter view), melalui proses identifikasi & analisis terhadap spesifikasi kebutuhan data di perusahaan, secara lengkap, akurat, serta selaras dengan rencana strategi & tujuan bisnis perusahaan",
                "definition_english" => "Knowledge and ability to design data management architecture (blueprint), incl. its value chain that sees from a broad perspective (helicopter view), through identification & analysis process on data management specifications and requirements in the organization, that completely, accurately, and align with the corporate's strategic plan & business objectives",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Governance",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami lifecycle & standar practices terkait pengelolaan data, mengidentifikasi, merumuskan, menerapkan, hingga memonitor penerapan pedoman/standar tata kelola data perusahaan berdasarkan siklus hidupnya (termasuk aturan terkait penanganan data yang kompleks, ambigu, dan/atau multi-faset), dengan menggunakan tools tertentu (e.g., IBM data Governance Solutions, dll.), guna mendukung ketersediaan data yang sesuai standar/aturan yang berlaku",
                "definition_english" => "Knowledge and ability to understand data management lifecycle, data governance standards & practices, identify, design, apply, and monitor the implementation of data governance procedures based on its lifecycles (incl. rules for handling complex, ambiguous, and/or multi-facets data), by using certain tools (e.g., IBM data Governance Solutions, etc.), to support data availability in accordance with applicable standards/rules",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Database Design",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengidentifikasi kebutuhan, mengkonseptualisasi, hingga merancang desain alur/skema pengelolaan basis data (database) untuk sejumlah data berskala besar (termasuk mekanisme pemeliharaan, penyimpanan, pengambilan data, dll.) yang sesuai spesifikasi serta requirement perusahaan, berdasarkan pada prinsip-prinsip rancangan desain & strategi pengelolaan basis data (e.g., jenis, elemen, komponen data, requirement pengelolaannya, dll.), dengan menggunakan tools/software tertentu (e.g., Lucidchart, SQLDBM, dll.)",
                "definition_english" => "Knowledge and ability to identify, conceptualize, up to design database management structure or flow for a number of big data (incl. data maintenance, storage, retrieval mechanism, etc.), that align with data management specifications and requirements, based on the principles of database management strategy and design (e.g., types, elements, components, data management requirements, etc.) by using certain tools or software (e.g, Lucidchart, SQLDBM, etc.) ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Mining",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami, mengidentifikasi & mengumpulkan data berbagai sumber-sumber data (data sources) dengan menggunakan teknik-teknik artificial intelligence, statistik, matematika, machine learning, dan lain sebagainya",
                "definition_english" => "Knowledge and ability to understand, identify & collect/mine the data  from various data sources by using several techniques, such as artificial intelligence, statistics, mathematics, machine learning, etc.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Integration",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menggabungkan data dari berbagai sumber dengan data eksisting di dalam sistem dengan bantuan tools (e.g., Talend Data Integration, IBM InfoSphere, Informatica, dll.), sehingga tercipta basis data yang saling terhubung satu sama lain",
                "definition_english" => "Knowledge and ability to integrate data from various sources with existing data inside—the single, unified view—system, by using certain tools (e.g., Talend Data Integration, IBM InfoSphere, Informatica, etc.), so that created databases that are connected to each other",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Meta Data Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mendeskripsikan, menjelaskan, serta memuat informasi terkait sekumpulan data (data about data), sehingga mendukung kemudahan proses pengenalan & pencarian data untuk keperluan pengelolaan data dalam suatu basis data",
                "definition_english" => "Knowledge and ability to describe, explain, and describe information related to a set of data (data about data), in order to support data recognition & searching process for data management purposes in the database",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Ingestion and Processing",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memeriksa, mengoreksi, menyaring (cleansing), atau menghapus data yang tidak lengkap/tidak sesuai format, serta mengubahnya ke dalam bentuk/format yang dapat dipahami dengan menggunakan ETL (Extract Transform Load) Tools (e.g., Talend, SSIS, dll.), sehingga tersedia data yang relevan & siap untuk ditindaklanjuti dan/atau disimpan ke dalam database",
                "definition_english" => "Knowledge and ability to check, evaluate, cleanse, or remove incomplete/incompatible data format, and transform them in a way to specific format by using ETL (Extract Transform Load) Tools (e.g., Talend, SSIS, etc.), to ensure data availability that relevant and ready to be used or stored in the database",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Warehousing",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan penyimpanan seluruh data di perusahaan (baik data historis maupun eksisting, e.g., data marketing, pelanggan, keuangan, dll.) pada suatu sistem query terintegrasi (e.g., RDBMS Database, Hadoop, dll.) dengan format yang telah terstruktur, sehingga tersedia one single point of truth untuk seluruh data tersebut",
                "definition_english" => "Knowledge and ability to store all data in organization (both current and historical data, e.g., marketing, customer, financial, or any organization data)  in one integrated single query (e.g., RDBMS Database, Hadoop, etc.) with structured format as a one single point of truth for all of data that simplify data finding processes",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Database Operations",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melaksanakan proses monitoring, back-up & recovery, maintenance database dalam sistem (e.g., SQL Web Data Administrator, dll.) berdasarkan pada konsep-konsep pengelolaan database",
                "definition_english" => "Knowledge and ability to perform database monitoring, back-up & recovery, and maintenance in the system (e.g., SQL Web Data Administrator, etc.) based on database management concepts",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Quality Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merencanakan & menyusun standar kualitas data, mengendalikan, serta menerapkan teknik pengelolaan kualitas/mutu untuk mengukur efektivitas implementasi standar tersebut, guna menjamin reliabilitas serta validitas data ",
                "definition_english" => "Knowledge and ability to design & create data quality standards, control, and implement data quality management techniques to measure the effectiveness of itsimplementation, in order to ensure data reliability and validity",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Statistical/ Mathematical Modelling",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengidentifikasi pola/struktur informasi dari suatu data set hingga menyusun model (predictive dan/atau prescriptive) dengan menggunakan teknik statistik/matematika tertentu (e.g., regresi, klasifikasi, dll.) agar dapat dibuktikan serta dianalisis lebih lanjut",
                "definition_english" => "Knowledge and ability to identify information patterns or structures up to design predictive or prescriptive model using suitable statistical/mathematical techniques (e.g., regression, classification, etc.), so that could be proven with further analysis",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data and Statistical Analytic",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan pengujian/analisis terhadap suatu data set dengan menggunakan metode/teknik statistik yang sesuai (e.g., analisis faktor, ANOVA, dll.) untuk membuktikan model/hipotesis tertentu",
                "definition_english" => "Knowledge and ability to test or analyze certain data set using appropriate statistical methods or techniques (e.g., factor analysis, ANOVA, etc.) in order to prove particular model or hypothesis",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Statistical Programming",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan input bahasa pemrograman (syntax) tertentu ke dalam program/software statistik komersial (e.g., MatLab, SAS, SPSS, dll.) berdasarkan konsep, metodologi, & teknik komputasi statistik tertentu, guna mendukung proses analisis hasil komputasi statistik berbasis program",
                "definition_english" => "Knowledge and ability to input certain programming languages (syntax) into commercial statistical programs/software (e.g., MatLab, SAS, SPSS, etc.) based on concepts, methodologies & statistical computational techniques, to support statistical computational analysis process based program",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Interpretation",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menarik kesimpulan hingga mencapai makna (insight) dari suatu data set, melalui proses review terhadap hasil analisis data secara, baik menggunakan metode kualitatif (e.g., document/literature review, dll.) maupun kuantitatif (e.g., mean, standard deviation, frequency distribution, dll.)",
                "definition_english" => "Knowledge and ability to interpret, draw conclusion, up to attain data insight from a data set, through a process of reviewing data analysis results, using qualitative (e.g., document/literature review, etc.) or quantitative methods (e.g., mean, standard deviation, frequency distribution, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Storytelling and Visualizations",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami teknik visualisasi data (e.g., line charts, dll.) serta mengilustrasikan makna (insight) dari data set tersebut ke dalam tampilan visual (tabel/diagram/grafik) secara tepat, efektif, optimal, interaktif, serta sesuai dengan audiens yang dituju, dengan menggunakan teknik infografis maupun bantuan tools/software tertentu (e.g., Informatica, Tableau, Qlick View, dll.)",
                "definition_english" => "Knowledge and ability to understand data visualization techniques (e.g., line charts, etc.) as well as illustrate data insight into suitable visual displays (table/diagram/graphic) precisely, effectively, optimally, interactively, and in accordance with the intended audience, by using infographic techniques or of certain tools/software (e.g., Informatica, Tableau, Qlick View, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Network Architecture",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumuskan kerangka/rancang bangun jaringan/network (baik core network, radio access network, service platform, maupun network pendukung lainnya) yang terukur, sesuai dengan kebutuhan (baik saat ini maupun akan datang), serta selaras dengan strategi bisnis perusahaan, melalui proses analisis, modeling, benchmark, dll.",
                "definition_english" => "Knowledge and ability to formulate measurable network framework/architecture (either core network, radio access network, service platform, or another network infrastructures), that align with corporate’s needs (both current and future) and strategic plan, through analysis processes, modelling, benchmarks, etc.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Core Network and Service Platforms Planning",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan analisis kebutuhan serta merumuskan rencana alokasi jaringan telekomunikasi berkapasitas tinggi (core network & service platform), e.g., VoIP, DSL, TV, internet, e-mail, dll., guna mendukung kualitas operasional jaringan secara berkelanjutan",
                "definition_english" => "Knowledge and ability to conduct needs analysis as well as formulate high-functional telecommunications network allocation plan (core network & service telecommunications platforms), e.g., VoIP, DSL, TV, internet, e-mail, etc., in order to support sustainable network operation quality",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Core Network and Service Platforms Engineering",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun desain/permodelan serta perumusan dokumen teknis terkait core network & service platforms, guna menyediakan desain jaringan VoIP, DSL, TV, internet, dll. yang berkualitas & selaras dengan arsitektur & rencana network perusahaan",
                "definition_english" => "Knowledge and ability to develop core network & service platforms design/model and technical document, in order to provide VoIP, DSL, TV, internet network design, etc. that meet corporate’s network quality standards, architecture & plan",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Core Network and Service Platforms Roll-Out",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan pemasangan/connecting/instalasi, integrasi, konfigurasi, baik secara langsung (melalui command line, dll.) maupun menggunakan sistem konfigurasi tertentu, serta peluncuran jaringan telekomunikasi berkapasitas tinggi (core network & service platform), untuk mengakomodasi jaringan VoIP, DSL, TV, internet, e-mail, dll. yang stabil, akurat, tepat guna & sejalan dengan kebutuhan end-user",
                "definition_english" => "Knowledge and ability to install/connect, integrate, configure, either directly (via command line, etc.) or by using certain configuration systems, as well as launch high-functional telecommunications network (core network & service platforms), to provide network for VoIP, DSL, TV, internet, e-mail, etc. that is stable, accurate, appropriate & in line with end-user needs",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Core Network and Service Platforms Optimization",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memaksimalkan alokasi kapasitas serta jangkauan core network and service platforms (link loading, queuing delay, performance with ping, ping path, dll.), melakukan evaluasi kinerja jaringan, hingga memberikan rekomendasi terkait utilisasi/optimasi core network and service platforms (e.g., IT backbone, signaling, switching & routing)",
                "definition_english" => "Knowledge and ability to optimize capacity allocation and coverage of core network and service platforms (link loading, queuing delay, performance with ping, ping path, etc.), as well as evaluate network performance & provide recommendations related to core network and service platforms (e.g., IT backbone, signaling, switching & routing) utilization/optimization ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Radio Access Network Planning",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan analisis kebutuhan serta merumuskan rencana alokasi radio & mobile network, e.g., GSM, UMTS, LTE, frekuensi, spektrum, pola antena, amplitudo, timeslot allocation, scrambling code planning, dll., guna mendukung kualitas operasional jaringan secara berkelanjutan",
                "definition_english" => "Knowledge and ability to conduct needs analysis as well as formulate radio & mobile network allocation plan, e.g., GSM, UMTS, LTE, frequency,spectrum, antenna pattern, amplitude, timeslot allocation, scrambling code planning, etc, in order to support sustainable network operation quality",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Radio Access Network Engineering",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun desain/permodelan serta perumusan dokumen teknis terkait radio access network, guna menyediakan desain jaringan GSM, UMTS, LTE, dll. yang berkualitas & selaras dengan arsitektur & rencana network perusahaan",
                "definition_english" => "Knowledge and ability to develop radio access network design/model and technical document, in order to to provide GSM, UMTS, LTE network design, etc. that meet corporate’s network quality standards, architecture & plan",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Radio Access Network Roll-Out",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan pemasangan/connecting/instalasi, integrasi, konfigurasi, baik secara langsung (melalui command line, dll.) maupun menggunakan sistem konfigurasi tertentu, serta peluncuran radio access network untuk mengakomodasi jaringan GSM, UMTS, LTE, dll. yang stabil, akurat, tepat guna & sejalan dengan kebutuhan end-user",
                "definition_english" => "Knowledge and ability to install/connect, integrate, configure, either directly (via command line, etc.) or by using certain configuration systems, as well as launch radio access network, to provide network for GSM, UMTS, LTE, etc. that is stable, accurate, appropriate & in line with end-user needs",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Radio Access Network Optimization",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memaksimalkan alokasi kapasitas serta jangkauan radio access network berdasarkan perkiraan awal traffic (dalam Erlang) maupun analisis cell profile (dalam bps), melakukan evaluasi kinerja jaringan, hingga memberikan rekomendasi terkait utilisasi/optimasi radio access network (Signal Interference Ratio)",
                "definition_english" => "Knowledge and ability to optimize capacity allocation and coverage of radio access network based on initial traffic estimation (in Erlang) and cell profile analysis (in bps), evaluate network performance as well as provide recommendations related to radio access network (Signal Interference Ratio) utilization/optimization",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Transport Network Planning",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan analisis kebutuhan serta merumuskan rencana alokasi transport network, e.g., OSI layer, TCP/IP & protokol dasar routing, guna mendukung kualitas operasional jaringan secara berkelanjutan",
                "definition_english" => "Knowledge and ability to conduct needs analysis, as well as formulate transport network allocation plan, e.g., OSI layer, TCP/IP & routing basic protocols, in order to support sustainable network operation quality",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Transport Network Engineering",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun desain/permodelan serta perumusan dokumen teknis terkait transport network, guna menyediakan desain jaringan OSI layer, TCP/IP, dll. yang berkualitas & selaras dengan arsitektur & rencana network perusahaan",
                "definition_english" => "Knowledge and ability to develop transport network design/model and technical document, in order to provide OSI layer, TCP/IP network design, etc. that meet corporate’s network quality standards, architecture & plan",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Transport Network Roll-Out",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan pemasangan/connecting/instalasi, integrasi, konfigurasi, baik secara langsung (melalui command line, dll.) maupun menggunakan sistem konfigurasi tertentu, serta peluncuran transport network untuk mengakomodasi jaringan OSI layer, TCP/IP, dll. yang stabil, akurat, tepat guna & sejalan dengan kebutuhan end-user",
                "definition_english" => "Knowledge and ability to install/connect, integrate, configure, either directly (via command line, etc.) or by using certain configuration systems, as well as launch transport network, in order to provide network for OSI layer, TCP/IP, etc. that is stable, accurate, appropriate & in line with end-user needs",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Transport Network Optimization",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memaksimalkan alokasi kapasitas serta jangkauan transport network, melakukan evaluasi kinerja jaringan, hingga memberikan rekomendasi terkait utilisasi/optimasi transport network",
                "definition_english" => "Knowledge and ability to optimize capacity allocation and coverage of transport network, evaluate network performance, as well as provide recommendations related to transport network utilization/optimization",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "NFV Infrastructure (NFVI) Planning",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumuskan standar operasional, storage, serta network resources dengan mempertimbangkan network architecture untuk menentukan komponen perangkat (hardware maupun software) yang mendukung keberlangsungan virtualisasi jaringan secara berkelanjutan",
                "definition_english" => "Knowledge and ability to formulate operational standards, storages, as well as network resources, by considering network architecture to determine network infrastructures (both hardware and software) that provide sustainable network virtualization",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Software Defined Networking",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menentukan metode atau paradigma, mengatur, hingga memisahkan Control Plane & Forwarding Plane pada jaringan tradisional (non-SDN) pada satu perangkat yang sama berdasarkan protokol OpenFlow dengan menggunakan emulator maupun teknik lainnya",
                "definition_english" => "Knowledge and ability to determine appropriate methods or paradigms, set up, up to disassociate Control Plane & Forwarding Plane from traditional networks (non-SDN) to central network devices based on OpenFlow protocol, by using emulators or other techniques",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Network Function Virtualization",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan virtualisasi keseluruhan perangkat fungsi network (e.g., Routing, Network Address Translation, DNS, dll.) berdasarkan pada prinsip-prinsip & metode virtualisasi jaringan, guna menciptakan layanan komunikasi tanpa bergantung pada network hardware (physical network function)",
                "definition_english" => "Knowledge and ability to virtualize entire classes of network node functions (e.g., Routing, Network Address Translation, DNS, etc.) based on network virtualization principles & methods, in order to provide communication services without relying on network hardware (physical network function)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Network Infrastructure Installation",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun rencana, melakukan persiapan, hingga melaksanakan pembangunan/pemasangan infrastruktur/prasarana (e.g., tower, kabel, jalur pipa, dll.) pada lokasi yang telah ditentukan sesuai dengan jenis-jenis prasarana/infrastruktur jaringan, standar & aturan yang berlaku",
                "definition_english" => "Knowledge and ability to create plans, prepare, up to perform network infrastructures construction/installation (e.g., towers, cables, pipelines, etc.) on predetermined location in accordance with the types of network infrastructures and applicable standards & rules",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IP Network Configuration",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami, menentukan, hingga melakukan pengaturan rute terhadap angka-angka numerikal spesifik tertentu (IP Address) secara tepat, sesuai dengan protokol yang telah ditentukan, guna menghubungkan perangkat jaringan melalui internet serta mengoptimalkan efektivitas & efisiensi jaringan",
                "definition_english" => "Knowledge and ability to understand, determine, up to set up routes by inputting specific numerical numbers (IP Address) appropriately, in accordance with predetermined protocols, in order to connect network infrastructures to internet and optimize network effectiveness & efficiency",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Routing and Switching",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami prinsip-prinsip terkait konfigurasi jaringan routing & switching, merumuskan standar, melaksanakan instalasi, hingga menghubungkan/ mengkoneksikan jaringan routing & switching, termasuk melakukan verifikasi serta optimasi ke site (melalui WAN)",
                "definition_english" => "Knowledge and ability to understand principles related to network routing & switching, formulate standards, perform installation, and connect routing & switching network, incl. verify and optimize network through sites (via WAN)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Centre Network Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mempersiapkan serta mengoperasikan perangkat data centre (e.g., AC/DC, generator, kabel, dll.), termasuk melaksanakan inspeksi rutin, guna mencapai kondisi jaringan data centre yang stabil & konsisten",
                "definition_english" => "Knowledge and ability to prepare as well as operate data center infrastructures (e.g., AC/DC, generators, cables, etc.), incl. perform routine inspections, in order to attain stable and consistent data center network",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Power Supply Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan monitoring, kontrol, serta penilaian penggunaan daya, termasuk menjalankan perangkat (e.g., generator, pemasangan baterai, dll.), hingga mendistribusikan pasokan daya, sesuai dengan prinsip-prinsip pendistribusian pasokan daya, guna mendukung keberlangsungan jaringan",
                "definition_english" => "Knowledge and ability to monitor, control, as well as evaluate power usage, incl. operate relevant devices (e.g., generators, batteries installation, etc.), up to distribute power supply, in accordance with related principles, in order to ensure network sustainability",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Network Quality Assurance",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun standar mutu jaringan telekomunikasi, memonitor, serta mengevaluasi efektivitas implementasi standar mutu jaringan berdasarkan pada konsep & prinsip-prinsip pengelolaan kualitas mutu jaringan telekomunikasi, termasuk menjamin terlaksananya compliance terhadap standar mutu jaringan di perusahaan, guna mendukung terciptanya layanan jaringan yang berkualitas, andal, sesuai tujuan perusahaan & ekspektasi pelanggan",
                "definition_english" => "Knowledge and ability to develop telecommunications network quality standards, monitor, and evaluate its implementation, based on concepts & principles of telecommunications network quality management, incl. ensure compliance on network quality standard in organization, to provide network services on certain quality, reliable & align with corporate’s goals & customer’s expectations",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Network Operation and Maintenance",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan monitoring serta memelihara kinerja sistem maupun perangkat operasional network (baik core network, radio access network, service platform, maupun network pendukung lainnya) berdasarkan pada prinsip-prinsip pemeliharaan jaringan, guna mencapai jaringan yang optimal & meminimalisasi downtime (network availability)",
                "definition_english" => "Knowledge and ability to monitor and maintain, both network system performance and operational equipments (either core network, radio access network, service platform, or another network infrastructures), based on principles of network maintenance, in order to attain optimal network availability & minimize downtime (network availability)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Alarm System Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menentukan parameter alarm sesuai dengan tipe, karakteristik, prosedur penanganan & standar kualitas jaringan yang telah ditetapkan, memastikan keberfungsian alarm, melakukan diagnosis, deteksi, serta memberikan respon ketika alarm teraktivasi, termasuk melaporkan detail alarm tersebut, jika membutuhkan proses eskalasi untuk menanganinya",
                "definition_english" => "Knowledge and ability to determine alarm parameters in line with types, characteristics, procedures of handling alarm system & predetermined network quality standards, ensure alarm function, up to diagnose, detect, as well as respond alarm when activated, incl. escalate alarm report details if needed",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Network Troubleshooting",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan analisis potensi gangguan/insiden terkait network (baik analisis secara mandiri maupun hasil eskalasi), melaksanakan root cause analysis, menyusun action plan untuk memperbaiki gangguan/insiden tersebut (generik atau spesifik), serta melakukan pemulihan terhadap network berdasarkan pada prinsip-prinsip, tata cara & teknik penanganan masalah jaringan, termasuk mencegah & meminimalisir terjadinya insiden berulang",
                "definition_english" => "Knowledge and ability to conduct analysis related to potential network disruptions/incidents (either self assessment or as a result of alarm escalation), perform root cause analysis, create action plan to solve them (both generic and specific actions), as well as recover its condition, based on principles, procedures & techniques to troubleshoot network problems, incl. prevent & minimize recurring network incidents",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Telecommunication Network Security",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami serta melakukan identifikasi mekanisme & model penanganan ancaman (e.g., access control network structure, transmission methods, transport formats, dll.), menyusun langkah-langkah, memonitor, hingga mengevaluasi proses pengamanan jaringan (e.g., packet filtering, firewalls, dll.) guna menjaga integritas, ketersediaan, otentikasi & kerahasiaan informasi yang dikirimkan melalui telecommunication network",
                "definition_english" => "Knowledge and ability to understand and identify network threats handling mechanisms & models (e.g., access control network structure, transmission methods, transport formats, etc.), create network security action plan, monitor, as well as evaluate telecommunication network security implementation (e.g., packet filtering, firewalls, etc.), in order to maintain information integrity, availability, authentication & confidentiality that transmitted through telecommunication network",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Project Initiation & Planning",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun objektif, batasan/jangkauan proyek, rencana aktivitas, penjadwalan, manajemen risiko, sumber daya (e.g., financial, man hour planning, dll.),  dan aspek lainnya ke dalam project charter, berdasarkan pada prinsip, tools, informasi dan teknik yang digunakan dalam project initiation (e.g., Project Management Information System (PIMS), dll.)",
                "definition_english" => "Knowledge and ability to set objectives, the scope of project, activity plan, scheduling, risk management, resource (e.g., financial, man hour planning, etc.), and other aspects into the project charter, based on the principles, tools, information, and techniques that use in project initiation (e.g., Project Management Information System (PIMS), etc.)     ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Project Quality Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menentukan standar kualitas proyek, melaksanakan inspeksi, review ataupun walkthrough, melakukan analisa quality control (pareto charts, cause and effect diagrams, etc.), melakukan pengukuran komponen keberhasilan (based on quality metrics, dll.) dan memberikan rekomendasi perbaikan guna memastikan kualitas proyek sesuai dengan kebutuhan dan ekspektasi stakeholders (terdiri dari timeline/milestone, cost, material, etc.) ",
                "definition_english" => "Knowledge and ability to determine project quality standards, perform inspections, reviews or walkthroughs, conduct quality control analysis (pareto charts, cause and effect diagrams, etc.), measure success components (based on quality metrics, etc.) and provide recommendations for improvements to ensure quality project according to stakeholder needs and expectations (consisting of timeline / milestone, cost, material, etc.)   ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Agile & Scrum Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami serta mengimplementasikan prinsip Agile yang menekankan incremental delivery, team collaboration, continual planning & continual learning serta menerapkan metodologi scrum yang meliputi pembagian peran (master scrum, product owner, tim scrum),  menentukan prioritas pekerjaan/ backlog, mendelegasikan tugas, tenggat waktu sprint dan rangkaian siklus pelaksanaan (before, during, after sprint) guna memperbaiki/memperoleh suatu solusi dalam mengembangkan produk ataupun menyelesaikan suatu output secara bertahap dan cepat, baik dalam bidang teknologi (e.g., bug fixes, new features, dll.), marketing, event planning, dan proyek lainnya ",
                "definition_english" => "Knowledge and ability to understand and implement Agile principle which emphasize incremental delivery, team collaboration, continual planning & continual learning, also apply Scrum methodology which includes roles classification (master scrum, product owner, scrum members), determine job priority/backlog, task delegation, sprint and the activity cycle (before, during, after sprint) to improve and obtain a solution of product development or accomplish an output gradually and quickly both in technology sector (e.g., bug fixes, new features, etc.) marketing, event planning, and another project ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Project Execution Management ",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami serta mengimplementasikan jangkauan/ batasan proyek, jadwal, manajemen risiko, sumber daya dan aspek lainnya yang telah tertera di project charter ke dalam proses pelaksanaan proyek, mendelegasikan tugas, mengarahkan, memberi masukan & problem solving di lapangan,  mengawasi, melakukan evaluasi, mengomunikasikan proses pelaksanaan proyek kepada stakeholders serta memastikan pelaksanaan sesuai dengan aspek teknis, tenggat waktu, dan anggaran proyek",
                "definition_english" => "Knowledge and ability to understand and implement the scope of the project, schedule, risk management, resources, and other aspects that listed in project charter into the project execution, execute task delegation, direct, provide recommendation & problem-solving, supervise, evaluate, and communicate the project execution process to the stakeholders and ensure the execution is compatible with technical aspects, deadline, and project budgets",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Strategic Procurement",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun strategi pengadaan (klasifikasi, perkiraan data, termasuk budget impact) untuk setiap kategori, menyusun prioritas pengadaan, hingga menyusun rencana spesifik kegiatan pengadaan, berdasarkan pada pemahaman tentang kebutuhan pengadaan setiap business, data ekonomi (e.g. index kemahalan harga, makroekonomi, inflasi, dll.), data mapping kategori, dll., sehingga dapat meningkatkan value kegiatan pengadaan termasuk didalamnya dapat mengurangi biaya kegiatan pengadaan",
                "definition_english" => "Knowledge and ability to design procurement strategies (classification, data prediction, also budget impact) for each category, set a procurement priority up to develop specific plans for procurement activities, based on understanding procurement needs in each business, economy data (e.g., price expensive index, macroeconomy, inflation, etc.), data mapping category, etc., that improves procurement activity value and saving procurement activity cost",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Category Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan menyusun definisi setiap category, melakukan spend analysis dan cost breakdown, menggunakan software category management tertentu, melakukan supply market analysis hingga proses continuous improvement, berdasarkan pada pemahaman tentang category management cycle, strategi organisasi, pemutakhiran perkiraan harga, kinerja supplier, dll, guna menghasilkan strategy category yang dapat menurunkan waktu proses PO, mengurangi biaya pengadaan dan risiko pada proses supply chain",
                "definition_english" => "Knowledge and ability to compile definitions for each category, conduct spend analysis and cost breakdown, use certain category management software, conduct supply market analysis up to a continuous improvement process, based on understanding the category management cycle, organizational strategy, updated price forecasting, supplier performance, etc, to provide category strategies that reduces PO processing time, reduce procurement cost, and risks in supply chain process  ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Procurement Sourcing",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan penilaian kebutuhan pengadaan user internal, menyusun spesifikasi kebutuhan pengadaan, mencari vendor serta mengumpulkan katalog vendor, melakukan RFI process hingga RFQ process, dengan menggunakan beberapa tools (e-sourcing, e-RFX, e-auction,dll.), berdasarkan pada pengetahuan supplier sourcing process, guna menghasilkan supplier terbaik untuk setiap kategori",
                "definition_english" => "Knowledge and ability to assess internal user procurement needs, compile specifications for procurement requirements, find vendors and collect vendor catalogs, perform the RFI process to the RFQ process, by using several tools ( e-sourcing, e-RFX, e-auction, etc.), based on the supplier sourcing process knowledge, to provide the best supplier for each category",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Procurement Contract Monitoring",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan proses monitoring secara berkala, melakukan test (secara acak) dan tindak lanjut dari kualitas produk/layanan, melakukan pengelolaan risiko, menyediakan rekomendasi dan penyelesaian permasalahan/ mediasi pada kontrak yang sedang berjalan, guna menghasilkan produk/layanan yang sesuai dengan kesepakatan/kontrak & KPI",
                "definition_english" => "Knowledge and ability to perform regular monitoring processes, conduct tests (randomly) and follow up on product / service quality, carry out risk management, provide recommendations and resolve problems / mediation on ongoing contracts, in order to produce products / services that are in accordance with agreements / contracts & KPIs",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Requisition to Purchase (R2P)",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menindaklanjuti permintaan pengadaan, melakukan pemesanan barang maupun jasa, serta melakukan penerimaan barang dan jasa pada sistem, berdasarkan pada pengetahuan tentang procurement/e-procurement, guna menghasilkan kegiatan pengadaan yang efektif dan efisien",
                "definition_english" => "Knowledge and ability to follow up on procurement request, placing orders for goods/services, also receive goods/services in the system, based on the procurement/e-procurement knowledge, to provide an effective and efficient procurement activity",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Supplier Relationship Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun segmentasi supplier, menyusun strategi pengelolaan supplier, menyusun kriteria dan monitoring kinerja supplier, serta melakukan pembinaan terhadap supplier (e.g., memberikan informasi-informasi penting kepada key supplier dll.), berdasarkan procurement life cycle dan pillars of vendor management success, guna mendukung optimalisasi proses supply chain serta meningkatkan hubungan antara buyer dan supplier",
                "definition_english" => "Knowledge and ability to prepare suppliers segmentation and suppliers management strategy, compile criteria and monitoring the supplier performance, also provide guidance to suppliers (e.g., give information to the key supplier, etc.), based on the procurement life cycle and pillars of vendor management success, to support the optimization of the supply chain process and improve the relationship between buyers and suppliers",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Integrated Management Export and Import",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan pelaksanaan teknis, melakukan transaksi (e.g., perizinan, dll) serta menyelesaikan permasalahan yang terjadi dengan berbagai pihak, berdasarkan pada tata laksana/prosedur ekspor, impor, kepabeanan, mekanisme perdagangan dan  transportasi internasional (e.g., pihak-pihak yg terlibat, dll) serta dokumen-dokumen ekspor impor yang dibutuhkan, guna menghasilkan proses ekspor-impor yang efektif, efisien serta  meminimalisir permasalahan-permasalahan yang akan timbul",
                "definition_english" => "Knowledge and ability to execute the technical implementation, conduct transactions (e.g., permit, etc.) and solving problems with several parties, based on an understanding of procedures of export, import, customs & excise, commerce mechanism, and international transportation (e.g., involved parties, etc.) also the required documents of export-import, to produce an export-import process which is effective, efficient and minimize problems that will arise  ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Inventory Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan pengendalian & pengawasan pembelian dari supplier serta melakukan pengendalian/pemantauan jumlah stock (dapat dilakukan secara digital maupun non digital) termasuk penentuan safety stock, berdasarkan pada basic supply chain concept, guna  menghasilkan stock gudang yang tepat jumlah dan tepat waktu serta meminimalisir pengeluaran biaya yang berlebih",
                "definition_english" => "Knowledge and ability to control and supervise the supplier purchase as well as monitor the amount of stock (digital or non-digital) incl. the determination of safety stock, based on basic supply chain  concepts, in order to produce the exact amount & exact time of warehouse stock also to minimize an unnecessary cost",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Warehousing",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam penerimaan barang, penentuan penyimpanan barang (e.g., penataan layout, optimalisasi kapasitas muat, persiapan alat bantu, dll.), pelaksanaan opname, pengeluaran barang, serta melakukan perawatan barang pada gudang, berdasarkan pada fungsi dan peran dalam pengelolaan gudang, guna menyediakan  arus barang yang tertata dengan rapi, teratur, dan dapat diperiksa jika sewaktu-waktu diperlukan serta dapat meminimalisir pengeluaran biaya yang berlebih",
                "definition_english" => "Knowledge and ability to conduct goods collecting, determine goods storage,  (e.g., layout design, optimize the loading capacity, prepare support device, etc.), conduct opname, goods expenditure, and goods maintenance in the warehouse, based on the warehousing functions and their roles, to provide flow of goods which is neatly organized, able to be inspected at any time (if needed), and cost-saving  ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Distribution Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan identifikasi kebutuhan pengiriman, perencanaan fasilitas, perencanaan biaya, pemilihan moda transportasi, penentuan drop point,  serta melakukan pengecekan persediaan distribusi, berdasarkan pada prinsip sistem distribusi dan kebutuhan pengiriman barang, guna menghasilkan proses penyaluran/distribusi yang tepat jumlah dan waktu",
                "definition_english" => "Knowledge and ability to identify shipping needs, plan facilities and cost, select the option of transportation mode, determine the drop points, and check the distribution inventory, based on the distribution system principles and needs of goods shipment, to provide the exact amount and time of distribution process",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Production Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan perencanaan produksi (e.g penentuan jenis barang, bahan baku, kualitas & kualitas barang, dll.), melakukan pengendalian produksi (e.g., penyusunan jadwal kerja, penentuan target market produk, dll.) serta melakukan pengawasan produksi (e.g penetapan kualitas barang, penetapan standar barang, produksi sesuai jadwal, dll), berdasarkan pada prinsip-prinsip sistem manajemen produksi dan memahami kebutuhan produksi, guna menghasilkan produk serta menjalankan proses produksi yang sesuai kualitas, jumlah, & waktu",
                "definition_english" => "Knowledge and ability to compile production planning (e.g., determine the types of goods, raw material, quality & goods quality, etc.), perform production control (e.g., work schedules, market product’s target, etc.) and monitor the production process (e.g., determine product quality, goods standard, production on schedule, etc.), based on production management system principles, and the production needs, to provide products and a production process that meets quality, quantity, and time",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Corporate Culture Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan melakukan culture gap assessment, melalui penyebaran instrumen pengukuran tertentu (e.g., OCAI, dll.), merancang desain budaya (core values) yang selaras dengan tujuan perusahaan, serta berdasarkan pada prinsip-prinsip penyusunan/ pengembangan budaya perusahaan, termasuk menyusun program hingga melaksanakan internalisasi budaya perusahaan, guna memastikan penerapan budaya perusahaan pada seluruh aspek kegiatan di organisasi",
                "definition_english" => "Knowledge and ability to conduct culture gap assessment, by distributing a specific measurement instrument (e.g., OCAI, etc.), design core value in accordance with corporate goals along with creating corporate culture internalization program, based on principles of corporate culture design, as well as perform internalization, to ensure that corporate culture fit with every aspects of activity in the organization",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Organization Structure Design",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mendesain struktur organisasi sesuai dengan strategi & kebutuhan bisnis perusahaan (e.g. organistic structure, mechanistic structure, dll.), berdasarkan pada prinsip-prinsip & model desain organisasi, serta melalui proses identifikasi isu/permasalahan/kebutuhan terkait perubahan/perbaikan struktur organisasi (e.g., perubahan bisnis, proses bisnis, beban kerja, teknologi, dll.)",
                "definition_english" => "Knowledge and ability to design an organization structure that accordance with corporate business strategy & needs (e.g. organistic structure, mechanistic structure, etc.), based on principles & models of organization design, through identification on organization structure issues/problems/needs (e.g., business transformation, business process, workload, technology, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Workforce Planning",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menganalisis manpower supply and demand dengan menggunakan berbagai tools maupun metode (e.g., 9-Box Grid, HR Dashboarding, dll.), menyusun strategi & melakukan proyeksi kebutuhan (e.g. build, buy, borrow) berdasarkan pada analisis beban kerja (WLA), working time, size pekerjaan, dll., serta berpedoman pada aturan/regulasi terkait perencanaan tenaga kerja, guna mendukung tersedianya alokasi tenaga kerja yang sesuai kapabilitas organisasi (kritikal/tidak) & sejalan dengan strategi serta arah bisnis perusahaan",
                "definition_english" => "Knowledge and ability to analyze the manpower supply and demand by using certain tools/methods (e.g., 9-Box Grid, HR Dashboarding, etc.), develop strategies & perform workforce needs projection (e.g. build, buy, borrow), based on workload analysis (WLA), working time, job size, etc., and refer to rules/regulations related to workforce planning, in order to support availability of labor allocation that meets the organizational capability (critical/not critical) and align with the corporate business strategy & direction",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Job Analysis",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami komponen-komponen dari sebuah uraian jabatan, mengumpulkan & menganalisis informasi terkait tugas & tanggung jawab jabatan dengan metode-metode tertentu (e.g., RASCI Matrix, dll.), termasuk mengintegrasikan seluruh atribut jabatan (e.g., job role, job family, dll.) di perusahaan, sehingga menghasilkan uraian tugas & tanggung jawab serta job/position profile, yang akurat, komprehensif, dan terukur",
                "definition_english" => "Knowledge and ability to understand components of a job description, collect, and analyze information related to tasks and responsibilities of certain jobs with any relevant methods (e.g., RASCI Matrix, etc.), incl. integrate the entire corporate job attributes (e.g., job role, job family, etc.) in the organization, to provide an accurate, comprehensive, and measurable job description & responsibilities",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Job Evaluation",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun rencana, menentukan metodologi evaluasi jabatan, hingga melakukan pembobotan jabatan (job valuation) berdasarkan pada pemahaman terhadap tugas & tanggung jawab jabatan, dengan menggunakan metode penilaian terstandar (e.g., factor comparison, dll.), guna menghasilkan job grade yang terukur dan berdasar (memiliki rationale serta evidence yang kuat), sehingga dapat dipertanggungjawabkan/dipresentasikan kepada pihak-pihak terkait",
                "definition_english" => "Knowledge and ability to create plan, determine methods, perform job evaluation with a standardize methods, up to perform job valuation based on  tasks and responsibilities of a certain jobs (e.g., factor comparison, etc.), to provide a measurable and reasonable job grade (that rational and have strong evidences), so it can be accounted for or presented to related parties",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Competency Modelling",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengidentifikasi tipe & elemen-elemen terkait penetapan model/framework kompetensi, menentukan tujuan, mendesain arsitektur kompetensi, serta melakukan penyusunan kompetensi (baik kompetensi teknis maupun perilaku), meliputi penjabaran nama, definisi & kriteria pengukurannya (proficiency level), berdasarkan pada proses bisnis, tinjauan literatur, riset, interview, dll., sehingga tersedia arsitektur & kompetensi yang akurat, komprehensif, terukur, terstandar, selaras dengan visi, misi & nilai perusahaan, serta mampu mendapatkan buy in oleh pihak manajemen terkait",
                "definition_english" => "Knowledge and ability to identify types & elements of competency model/framework, determine goals, design competency architecture, and create competency lists (both technical and behavior), incl. competency's name, definition & measurement criteria (proficiency level), based on business process, literature review, research, interview, etc., to provide an accurate, comprehensive, measurable, and standardize competency model/framework, which accordance with corporate vision, mission, & value, so could be buy-in by management",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Knowledge Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengidentifikasi tipe-tipe knowledge management system, melakukan pengumpulan & pemrosesan pengetahuan di perusahaan, baik tertulis (formal/explicit knowledge) maupun tak tertulis (tacit knowledge), termasuk menentukan, mengoptimasi & mengevaluasi efektivitas sistem pengelolaan pengetahuan yang tengah berlaku di perusahaan (e.g., Concord, Docebo, Travitor, Thought Industries, dll.), serta mendorong terciptanya kebiasaan saling berbagi pengetahuan (knowledge sharing/transfer knowledge) sehingga menjadi knowledge capital bagi perusahaan",
                "definition_english" => "Knowledge and ability to identify various types of knowledge management system, collect & process corporate knowledge either formal/explicit knowledge or tacit knowledge, incl. determine, optimize, and evaluate the effectiveness of relevant knowledge management system in the organization (e.g., Concord, Docebo, Travitor, Thought Industries, etc.), as well as establish knowledge sharing or transfer knowledge habit in organization in order to create knowledge capital for the company",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Candidate Sourcing",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami, mereview, serta mengidentifikasi tipe/model sourcing (aktif vs pasif), channel & metode sourcing & kompetensi Telkomsel, menyusun strategi, rencana, mengoptimalisasi channel, menentukan metode sourcing yang efektif, hingga melaksanakan pencarian kandidat potensial (potential candidates) melalui social networking websites, referrals, dll., sesuai dengan requirement & kompetensi yang dibutuhkan perusahaan (meets requirement & competency)",
                "definition_english" => "Knowledge and ability to understand, review, as well as identify sourcing types/models (active vs passive),  channels, methods & Telkomsel competencies, design a strategy, plan, optimize sourcing channels, determine the most effective sourcing methods, up to perform a potential candidate searching through social networking website, referrals, etc., align with corporate’s needs (meets requirement & competency)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Selection",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan pengumpulan berkas/dokumentasi yang dibutuhkan (e.g., CV potential candidates, dll.), menentukan metode, menyusun agenda, kriteria, dll., menyaring, hingga mengevaluasi hasil assessment, baik terhadap kandidat internal maupun eksternal, dengan menggunakan metode-metode assessment tertentu (e.g. wawancara, dll.), berdasarkan pada prinsip-prinsip serta etika pelaksanaan seleksi, guna mendapatkan kandidat yang mampu memenuhi requirement kompetensi Telkomsel & paling tepat (suitable candidates) untuk mengisi posisi di organisasi",
                "definition_english" => "Knowledge and ability to collect the required documents (e.g., CV of potential candidates, etc.), determine the suitable methods, prepare the agenda, criterias, etc., perform screening, then evaluate candidates assessment’s results, either internal or external (by doing structured or unstructured interview), based on selection code of ethics and principles, to obtain suitable candidates & able to meet Telkomsel's competency requirements, in order to occupy positions in organization",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Employee Placement",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengumpulkan data hasil seleksi, memberikan rekomendasi terkait pengaturan posisi/penempatan bagi para karyawan (dapat melalui job person matching, assessment, wawancara, maupun metode lainnya) sesuai dengan prinsip-prinsip & metode yang telah ditetapkan, guna menentukan the right man on the right place, right time & right reason",
                "definition_english" => "Knowledge and ability to collect selection data results, provide recommendations related to set employee position (by perform job person matching, assessment process, interview, etc.), based on job placement principles & methods, in order to determine the right man on the right place, right time & right reason",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Onboarding Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengidentifikasi kebutuhan, aturan & tipe-tipe program orientasi karyawan (onboarding), menyusun program, memfasilitasi, memonitor proses orientasi pada karyawan yang menduduki posisi baru (baik untuk karyawan baru maupun karyawan eksisting), hingga menganalisis feedback terkait program orientasi, guna memastikan terciptanya pemahaman akan tugas & tanggung jawab jabatannya, mendukung tumbuhnya employee engangement, mengantisipasi munculnya rasa kecemasan & stress kerja, serta mencapai keberhasilan dalam pekerjaannya",
                "definition_english" => "Knowledge and ability to identify onboarding needs, rules & types, design onboarding program, facilitate, monitor implementation of employee orientation process for any persons that occupy new position (either new or existing employees), up to analyze feedback on orientation program, to ensure understanding of their tasks and responsibilities, emerge employee engagement, anticipate anxiety or work stress issues, and success in their work",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Career Framework Design",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan identifikasi journey dari suatu jabatan ke jabatan lain di perusahaan, serta merumuskan desain arah & jalur pergerakan karir (career map & movement, career ways) untuk setiap jabatan, termasuk rotasi, mutasi & promosi, baik di dalam, ke luar organisasi, maupun dari luar organisasi—karyawan eksternal (e.g. exchange, dll.), sesuai dengan prinsip-prinsip & hierarki pengembangan jalur karir yang telah ditetapkan perusahaan",
                "definition_english" => "Knowledge and ability to identify journey of certain position to another position in the organization, formulate career map & movements and career ways for each positions, incl. rotation, mutation & promotion, either inside, outside, or from another organization—external employee (e.g. exchange, etc.), in accordance with predefined corporate hierarchy & principles of career path development",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Succession Planning",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun strategi & rencana suksesi, mengidentifikasi/menyeleksi (employee profiling) dengan melakukan pendekatan sistematik tertentu (e.g., assessment, pengumpulan aspirasi pegawai, informasi terkait IDP, dll.), berdasarkan pada prinsip-prinsip terkait succession management, guna mempersiapkan calon pengganti yang baik (good-calibre employee) serta memastikan kontinuitas peran-peran untuk seluruh posisi di perusahaan",
                "definition_english" => "Knowledge and ability to design succession strategy & plan, perform employee profiling with a systematic approaches (e.g., assessment, collect employee aspiration, IDP-related information, etc.), based on succession management principles, in order to prepare good-calibre employee to be replacement candidate and ensure the continuity for all position in the organization",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Employee Performance Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun, mereview, menyepakati, memonitor, hingga mengevaluasi pencapaian target kinerja individual, baik dari segi jumlah pencapaian (number of achievement) maupun cara pencapaian (how to achieve), untuk performance ataupun non-performance, pada periode triwulanan, semesteran, atau tahunan, berdasarkan pada performance management cycle, termasuk menentukan tools Performance Management System yang sesuai untuk digunakan (e.g., Balance Scorecard, OKR, 4DX, dll.), guna menghasilkan rekomendasi yang mendukung peningkatan efektivitas, efisiensi, & kualitas pencapaian individu terkait pekerjaannya",
                "definition_english" => "Knowledge and ability to design, review, agree, monitor, up to evaluate individual performance target achievement, either number of achievement or how to achieve, for performance or non performance, quarterly, semesterly, or annual certain periods, based on performance management cycle, incl. determine the most suitable tools for Performance Management System (e.g., Balance Scorecard, OKR, 4DX, etc.), in order to provide recommendation to enhance effectiveness, efficiency, and quality of employee’s achievements",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Employee Assessment",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menentukan metodologi yang tepat, melaksanakan pengukuran/penilaian terhadap kompetensi karyawan (KSA – baik kompetensi teknis maupun behavior) melalui observasi langsung, online/offline assessment, studi kasus, feedback, dll., hingga melaporkan hasil gap assessment (assessment report)—informasi terkait kesenjangan antara persyaratan kompetensi jabatan dengan kompetensi karyawan—sebagai dasar dalam proses pengembangan/pembinaan karyawan",
                "definition_english" => "Knowledge and ability to determine appropriate methodology, perform measurements/assessments on employee competencies (KSA - both technical and behavior competency) by performing direct observation, online/offline assessment, case study, feedback, etc., up to create gap assessment report—information about gaps between job competency requirements and employee competency—as a basis for developing/fostering employees",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Coaching & Counselling",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan review kekuatan serta kelemahan target karyawan yang akan dibimbing, menyusun rencana (meliputi tujuan, urgensi/alasan pelaksanaan, dll.) & melaksanakan proses pembinaan & pembimbingan (melalui tukar pikiran/sharing, refleksi, mendengar, bertanya, dll.), hingga mereview progress karyawan secara berkala, sesuai dengan kriteria/standar performance yang diharapkan, guna mendukung pengembangan potensi & produktivitas pekerja, termasuk membantu mereka mengatasi hambatan dalam dunia kerja",
                "definition_english" => "Knowledge and ability to review strengths and weaknesses of coaching & counselling targeted employee, create plan (incl. objectives, urgency/reasons, etc.), perform coaching & counselling (through sharing, reflect, listen, ask, etc.), up to review learner’s progress periodically, align with expected performance criterias/standards, in order to support development of employee’s potency & productivity, incl. help them to overcome any obstacles in related to their jobs",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Learning Need Analysis",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan identifikasi & analisis kebutuhan pembelajaran, serta menerjemahkan kapabilitas/kompetensi yang dibutuhkan untuk menghasilkan suatu outcomes, berdasarkan hasil assessment, penyebaran kuesioner, survey, interview, dll., hingga menyusun prioritas kebutuhan pembelajaran yang selaras dengan kepentingan bisnis perusahaan, sebagai dasar pembentukan program pembelajaran",
                "definition_english" => "Knowledge and ability to identify & analyze needs for learning, as well as translate capability/competency requirements to get an outcome, based on assessment results, distribute a questionnaires, surveys, perform interviews, etc., and set the priority of learning needs which accordance with corporate business interests, as the basis of learning program design",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Learning Design & Evaluation",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan penyusunan roadmap & rancangan program pembelajaran, yang meliputi kurikulum, jadwal/kalender dan silabus pembelajaran secara detail serta sesuai dengan kebutuhan kompetensi Telkomsel, menentukan metode pembelajaran yang akan digunakan berdasarkan pada hasil learning need analysis, termasuk mensosialisasikan program pembelajaran tersebut kepada pihak-pihak yang terkait, hingga melakukan evaluasi efektivitas program pembelajaran berdasarkan kriteria pengukuran yang terstandar (dengan menggunakan kuesioner, survei, checklist, dll.), guna menghasilkan rekomendasi perbaikan program pembelajaran",
                "definition_english" => "Knowledge and ability to create roadmap & learning program design, that incl. detailed curriculums, schedules & syllabus and align with Telkomsel competency needs, determine the applicable learning method based on the learning need analysis, incl. socialize learning program to the certain parties, up to evaluate learning program effectiveness, based on standardized measurement criterias (by using a questionnaires, surveys, checklists, etc.), in order to provide recommendation to improve learning program design",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Learning Delivery Technique",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memfasilitasi, memberi pengajaran, serta menyampaikan materi pembelajaran (baik secara langsung maupun virtual) sesuai dengan materi & kurikulum yang telah disusun guna meningkatkan pengetahuan/keterampilan/kompetensi bagi para peserta",
                "definition_english" => "Knowledge and ability to facilitate, teach, and deliver learning materials (direct or virtual), in accordance with the designed material & curriculum, in order to improve the participants’ knowledge, skills, or competencies",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Compensation Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun strategi, program, hingga melakukan evaluasi terhadap sistem pemberian kompensasi (cash) yang kompetitif (internal & eksternal), engaged, adil, dan terjangkau bagi finansial perusahaan, dengan memperhatikan prinsip-prinsip, tipe & faktor-faktor yang mempengaruhi sistem pemberian kompensasi (e.g., aturan/regulasi terkait, dll.), termasuk menentukan tools pengelolaan kompensasi yang sesuai dengan kebutuhan perusahaan (e.g., Workday HCM, Paycom, UltiPro, Payfactors, dll.)",
                "definition_english" => "Knowledge and ability to design a strategy, program, up to evaluate the compensation management system (cash), that is competitive (internal & external), engaged, fair, and affordable for corporate’s financial plan, based on principles, types & factors that affect the compensation management system  (e.g., rules or relevant regulations, etc.), incl. determine compensation management’s tools which is relevant with corporate’s needs (e.g., Workday HCM, Paycom, UltiPro, Payfactors, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Benefit Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun strategi, program, hingga melakukan evaluasi terhadap sistem pemberian fasilitas tambahan/benefit (cash/non-cash) yang kompetitif (internal & eksternal), engaged, adil, dan terjangkau bagi finansial perusahaan, dengan memperhatikan prinsip-prinsip, tipe & faktor-faktor yang mempengaruhi sistem pemberian fasilitas tambahan/benefit (e.g., aturan/regulasi terkait, dll.), termasuk menentukan tools pengelolaan benefit yang sesuai dengan kebutuhan perusahaan (e.g., Rippling, BenefitFocus, Happay, Ledgy, dll.)",
                "definition_english" => "Knowledge and ability to design a strategy, program, up to evaluate the benefit management system (cash/non-cash) that is competitive (internal & external), engaged, fair, and affordable for corporate’s financial plan, based on principles, types, & factors that affect the benefit management system (e.g., rules or relevant regulations, etc.), incl. determine benefit management’s tools which is relevant with corporate’s needs (e.g., Rippling, BenefitFocus, Happay, Ledgy, etc.) ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Board Remuneration Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun strategi, program, hingga melakukan evaluasi terhadap sistem pemberian fasilitas tambahan/benefit (cash/non-cash) untuk Board yang kompetitif (internal & eksternal), engaged, adil, dan terjangkau bagi finansial perusahaan, dengan memperhatikan prinsip-prinsip & standar pemberian remunerasi terhadap jabatan-jabatan eksekutif di pasaran, termasuk faktor-faktor yang mempengaruhinya (e.g., aturan/regulasi terkait, dll.)",
                "definition_english" => "Knowledge and ability to design a strategy, program, up to evaluate additional facilities or benefit (cash/non-cash) for Board that is competitive (internal & external), engaged, fair, and affordable for corporate’s financial plan, based on principles & standards of remuneration for board compared to market, incl. any factors that could affect it (e.g., rules/relevant regulations, etc.),",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Payroll Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan perhitungan & menentukan nominal penggajian, sesuai dengan prinsip, standar maupun aturan/regulasi yang berlaku, serta mempertimbangkan komponen-komponen terkait, seperti jabatan, masa kerja, pinjaman, tunjangan, Jamsostek, overtime, PPh 21, dll., mengelola proses pembayaran gaji secara akurat (tepat waktu, jumlah, sasaran/orang, dll.), hingga menghasilkan laporan penggajian",
                "definition_english" => "Knowledge and ability to calculate & determine salary amounts, in accordance with aplicable standards and rules/regulations, as well as considering related components, such as job positions, tenures, loans, allowances, Jamsostek, overtime, PPh21 (tax), etc., incl. manage payroll process accurately (on time, on amount, on target/person, etc.), up to create payroll report",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Work Norms, Policies & Procedures",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengelola serta memonitor implementasi norma & syarat-syarat kerja yang mengatur hak & kewajiban pekerja dan perseroan—seperti tertuang dalam PKB & Undang-Undang—termasuk status pekerja (e.g., alih daya, pemborongan kerja, karyawan tetap, karyawan tidak tetap, dll.) dengan mempertimbangkan kepentingan kedua belah pihak",
                "definition_english" => "Knowledge and ability to manage and monitor the implementation of work norms, policies & procedures which govern rights and obligations for employees and organization—that reflected in PKB & Regulations—incl. Employee Status (e.g., outsourcing, contracting jobs, permanent employees, temporary employees, etc.) by considering the interests of both parties",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Labour and Industrial Law",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami, mengidentifikasi, serta mengevaluasi dampak dari aturan-aturan hukum, baik nasional maupun internasional, yang berkaitan dengan aturan hubungan industrial & ketenagakerjaan di perusahaan (e.g., UU No.13 terkait Ketenagakerjaan, dll.), termasuk menangani perselisihan/penyelesaian sengketa terkait hubungan industrial non litigasi (bipartid, tripartid, dll.), guna memberikan perlindungan hukum bagi pekerja maupun perusahaan serta meminimalisasi terjadinya resiko yang dapat menimbulkan permasalahan hingga merugikan pekerja & perseroan",
                "definition_english" => "Knowledge and ability to understand, identify, and evaluate impact of legal regulations, either national/international, that related to industrial relation & labour rules in organization (e.g., UU No.13—Ketenagakerjaan, etc.), incl. non-litigation industrial relations conflicts resolution/disputes handling (bipartide, tripartide, etc.), in order to provide legal protection for employees and organization, as well as minimize risks that could cause problems to the detriment of employees & organization",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Building and Maintaining Industrial Relation",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami standar, prinsip, aturan-aturan hukum terkait, & struktur relasi para pemangku kepentingan yang berpengaruh (e.g., Serikat, Disnaker, Imigrasi, Parent Company, dll.), termasuk melakukan pembinaan hubungan yang harmonis dengan mereka, guna mendukung pembentukan keputusan-keputusan penting serta penyelesaian permasalahan terkait hubungan industrial",
                "definition_english" => "Knowledge and ability to understand standards, principles, regulations, relation & structures of influential stakeholders (e.g., Serikat, Disnaker, Immigration, Parent Company, etc.), inc. foster harmonious relations, in order to support the formation of important decisions and the resolutions for any problems related to industrial relations",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Employer Branding",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun program pengembangan brand perusahaan (employer brand), yakni dengan menunjukkan nilai-nilai positif dari budaya organisasi, pengalaman bekerja, hingga penawaran yang diberikan oleh perusahaan (employment experience, benefits, dll.) serta memperhatikan trend branding yang digunakan perusahaan lain untuk menarik para pencari kerja, guna mendukung terciptanya reputasi organisasi yang dapat dipercaya sebagai daya tarik bagi para pencari kerja & menciptakan value proposition untuk meningkatkan employee engagement bagi pekerja",
                "definition_english" => "Knowledge and ability to design corporate or employer brand development program, that highlight corporate’s positive values, cultures, employment experiences, up to any offers that could be given by organization (e.g., employment experience benefits, etc.), by considering trends of employer brand that are used by other companies to attract job seekers, in order to establish organization’s reputation which trusted as a captivation for job seekers and value proposition that could enhance employee engagement ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Employee Engagement",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun program peningkatan komitmen & keterikatan karyawan (employee engagement) di perusahaan, baik menggunakan cara konvensional maupun bantuan tools (e.g., CakeHR, ProofHub, Hi5, dll.), dengan memperhatikan trend program employee engagement di perusahaan lain, serta melakukan evaluasi efektivitas/dampak program tersebut (tercermin dari indeks employee engagement yang diukur melalui survei), guna mendukung terciptanya komitmen & keterikatan karyawan yang mendorong sikap kerja yang efektif, aktif, proaktif, serta memunculkan kesediaan untuk going the extra miles",
                "definition_english" => "Knowledge and ability to design employee engagement development program in the organization, either in a conventional way or using relevant tools (e.g., CakeHR, ProofHub, Hi5, etc.), by considering trends related to employee engagement in another organization, as well as perform impact assessment/survey on employee engagement development program (that reflected on employee engagement level), to enhance employee commitment and engagement, which drive an effective, active, proactive working attitudes and willing to ‘going the extra miles’",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "HC Service Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengidentifikasi kebutuhan serta merancang model/desain layanan HC (mekanisme, standar, service level, dll.) sesuai dengan prosedur manajemen mutu, spesifikasi pelayanan & kebutuhan perusahaan, hingga memberikan pelayanan terintegrasi sesuai dengan SLA yang berlaku, termasuk mengukur kualitas pelayanan HC dengan menyebarkan survei kepuasan pelayanan (user satisfaction surveys)",
                "definition_english" => "Knowledge and ability to identify needs of HC service, create model/design of HC service (mechanisms, standards, service level, etc.),in accordance with quality management procedures, service specifications & corporate needs, up to provide an integrated service following the applicable SLA, incl. measure the quality of HC service by distributing the user satisfaction surveys",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Financial Modelling ",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menguji beberapa skenario terkait perencanaan biaya, anggaran dan sumber daya finansial lainnya sebagai pengambilan keputusan keuangan perusahaan (capital allocation, raising capital, dll.), melalui proses menganalisa historical kinerja keuangan perusahaan & asumsi proyeksi kondisi keuangan kedepannya, merumuskan suatu gambaran/model keuangan yang terukur, fleksibel, komprehensif yang mampu menyesuaikan dengan ketidakpastian variabel-variabel ekonomi dan bisnis melalui  simulasi kondisi keuangan yang akan datang (dengan memanfaatkan fitur-fitur Ms. Excel atau tools lainnya) yang selaras dengan Corporate Strategy & rencana bisnis",
                "definition_english" => "Knowledge and ability to test several scenarios related to costs planning, budgets, and other financial resources for making corporate financial decisions (capital allocation, capital raising, etc.), through processes of analyzing company’s historical financial performance & the projected assumptions of future financial conditions, formulating a measurable, flexible and comprehensive financial model which able to adjust with the uncertainty of economic and business variables through simulation of future financial conditions (by utilizing the Ms. Excel features or other tools), that are in line with the Corporate Strategy & business strategy ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Capital Market Analysis",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami pasar modal dan perundang-undangan yang berlaku, menganalisis informasi (e.g., laporan keuangan, dll.), risiko, regulasi & perkembangan tren/ situasi pasar modal serta memberikan rekomendasi yang berhubungan dengan aktivitas perusahaan di pasar modal (aktivitas korporat dalam mengakuisisi, menahan, atau menjual saham tertentu) ",
                "definition_english" => "Knowledge and ability to understand a capital market and the applicable regulations, analyze information (e.g., financial statement, etc.), risk, regulation & trend development/capital market situation also provide recommendations related to company activities in the capital market (corporate activities in acquiring, holding or selling certain shares)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Financial Planning ",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan evaluasi status keuangan perusahaan (regard to income, savings, expenses, debts, dll.), menentukan tujuan, jangka waktu, dan rencana kebijakan keuangan (benefit pekerja, investasi, portofolio, dll.), mengimplementasikan serta melakukan monitor dan re-evaluasi pelaksanaan rencana keuangan secara keseluruhan yang selaras dengan tujuan strategis perusahaan ",
                "definition_english" => "Knowledge and ability to evaluate company’s financial status (regard to income, savings, expenses, debts, etc.), set the goals, time period, and financial policy plan (employee’s benefit, investment, portfolio, etc.), implement, monitor, and re-evaluate the integrated  implementation of financial planning which align to company’s strategic goals",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Budgeting",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menggambarkan intensi manajemen dalam memperoleh dan menggunakan sumber daya, untuk mencapai  tujuan strategis perusahaan, melalui proses analisis finansial, alokasi sumber daya, koordinasi proses anggaran yang meliputi menetapkan target, jangka waktu, koordinasi  top-down dan bottom-up, distribusi sumber keuangan, mencari sinergi pada konsolidasi serta evaluasi perencanaan anggaran perusahaan, berdasarkan pada prinsip, teknik, dan proses penganggaran perusahaan",
                "definition_english" => "Knowledge and ability to describe the intentions of management in obtaining and using resources to achieve the company's strategic objectives, through processes of performing financial analysis, allocate the resource, coordinate budgeting process includes setting the target, time period, coordinate top-down and bottom-up, distribute financial resource, find synergy in consolidation and evaluate the budgets plan, based on the principle, technique, and process of corporate budgeting",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Financial Forecasting",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memprediksi future income dan expense bisnis perusahaan secara akurat, melalui proses menentukan tujuan, periode, dan teknik-teknik forecasting yang sesuai (e.g., statistical method, time series method, delphi method, dll.), menganalisis data/informasi operasional perusahaan  (e.g., cash, sales, inventory, people, dll.), menyusun financial forecast (estimate revenue, profit, raw material cost, labour cost, dll.), melakukan monitor ketepatan/keakuratan dari forecasting, menyusun financial re-forecasting (jika dibutuhkan) serta memberikan rekomendasi atas perbaikan proses & prosedur financial forecasting",
                "definition_english" => "Knowledge and ability to predict the future corporate business income and expense accurately, through processes of setting goals, period and determining the suitable techniques of forecasting (e.g., statistical method, time series method, delphi method, etc.), analyzing company’s operational data/information (e.g., cash, sales, inventory, people, etc.), structuring the financial forecast (estimate revenue, profit, raw material cost, labor cost, etc.), monitoring the accuracy of forecasting, structuring the financial re-forecasting (if needed), and providing recommendations  ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Cash Flow Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengumpulkan, konsolidasi & rekonsiliasi data transaksi arus kas (inflow & outflow), melakukan penilaian performa arus kas (posisi likuiditas) serta memberikan solusi kebijakan pengaturan arus keuangan (terkait loan/ credit, mengontrol pengeluaran operasional, dll.), guna memperoleh praktik terbaik cash management yang dapat memenuhi kebutuhan bisnis perusahaan",
                "definition_english" => "Knowledge and ability to collect, consolidate & reconciliate the cash flow of data transaction (inflow & outflow), assess the cash flow performance (liquidity position), and provide policy solutions for managing financial flows (regards to loan/credit, control operational expense, etc.), to achieve the best practice of cash management that fulfill corporate business needs",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Fund Management ",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun strategi sumber-sumber pendanaan/ alokasi keuangan perusahaan (maintaining, disposing, upgrading assets, dll.) sesuai dengan analisis kebutuhan & tujuan bisnis perusahaan, serta memberikan rekomendasi struktur kapital, guna memenuhi kebutuhan bisnis jangka panjang ",
                "definition_english" => "Knowledge and ability to develop a source of fund/financial allocation strategy (maintaining, disposing of, upgrading assets, etc.), based on needs analysis and goals of corporate business,and provide a recommendation of capital structure, to achieve a long term business needs",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Revenue Assurance (RA) Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengembangkan strategi, mendeteksi, menganalisis, mengatasi, serta meminimalisir ataupun mencegah revenue leakage (e.g., billing problems, mediation problems, dll.) dengan tools pendukung (e.g., RA Software, dll.), guna memaksimalkan revenue perusahaan",
                "definition_english" => "Knowledge and ability to develop strategies, detect, analyze, handle and minimize or preventing revenue leakage (e.g., billing problems, mediation problems, etc.) by using support tools such as RA Software, etc, to maximize the corporate revenue",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Account Payable Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun strategi & pedoman pelaksanaan terkait pencatatan, pengendalian, hingga pembayaran kewajiban/hutang (down payment, dll.) yang meliputi SOP, jurnal, dokumen pendukung, melakukan penerimaan invoice supplier, melakukan pembayaran sesuai SLA serta melakukan pencatatan dan melakukan pembukuan payable, guna menghasilkan pengelolaan payable yang teratur",
                "definition_english" => "Knowledge and ability to develop strategies & implementation guideline for the related to recording, controlling, and conducting payment of liabilities/debt (e.g., down payment, etc.), which includes SOPs, journals, supporting documents, receiving supplier invoice, conducting payments according to SLA as well as record and performing account payable ledger, to provide regular payable management",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Account Receivable Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun strategi & pedoman pelaksanaan terkait  penagihan piutang (white off, impairment, dll.), melakukan pencatatan, penyusunan & penyerahan invoice, serta penagihan kepada setiap pelanggan sesuai dengan tanggal jatuh tempo pembayarannya masing-masing, penanganan keterlambatan pembayaran (bad debt) hingga penyelesaian penagihan (billing settlement) dengan menerapkan prosedur atau teknik tertentu (e.g., mengirimkan surat peringatan, menghentikan pemberian layanan, mengambil jalur hukum, dll.)",
                "definition_english" => "Knowledge and ability to develop strategies & implementation guideline related to billing receivable (white off, impairment, etc.), recording, drafting & submitting invoices, also billing to each customer according to the payment due date respectively, handling late payments (bad debt) to billing settlement, by applying certain procedures or techniques (e.g., sending a warning letter, stopping service delivery, taking legal action, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Internal Control",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam meningkatkan integritas dan transparansi kegiatan operasional, pencatatan, dan aktivitas keuangan lainnya serta memastikan pelaporan keuangan akurat, tepat waktu, dan kredibel, melalui proses memahami, mengimplementasikan aturan &  prosedur pelaksanaan kontrol internal di perusahaan (menggunakan COSO framework, landasan SOA, dll.), melakukan monitoring, penilaian efektivitas serta memberikan rekomendasi terkait sistem internal kontrol perusahaan",
                "definition_english" => "Knowledge and ability to improve the integrity and transparency of operational activity, recording, and other financial activities as well as ensuring accurate and on-time financial reporting, through processes of understanding, implementing rules & procedures of internal control practice in the company (using COSO framework, SOA etc.), monitoring, assessing the effectiveness and providing recommendations regarding the internal control system",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                // "name" => "Accounting Record, Closing and Consolidation",
                "name" => "Accounting Record, Closing and Consolidation",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami konsep, prinsip & standar jurnal ataupun pembukuan transaksi,  melakukan pencatatan, analisis, rekonsiliasi, dan konsolidasi  yang berkaitan dengan kegiatan/aktivitas keuangan perusahaan guna mendukung proses persiapan financial statement yang akurat, lengkap, dan tepat waktu",
                "definition_english" => "Knowledge and ability to understand concepts, principles & standards of the journal or transaction ledger, recording, analysis, reconciliation, and consolidation which is  in line to the corporate finance activities to support the process of preparing financial statements that are accurate, complete, and on-time",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Cost Accounting",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam  melakukan klasifikasi serta analisis biaya yang dibutuhkan (bahan baku, upah tenaga kerja, dan biaya tambahan lainnya), melakukan perhitungan harga jual product/services, serta penyajian informasi secara sistematis ke dalam bentuk laporan biaya, berdasarkan pada pendekatan Activity-based costing, Variance analysis & Customer profitability analysis model, dsb., sebagai pertimbangan manajemen untuk menentukan harga product/services",
                "definition_english" => "Knowledge and ability to classify and analyze required costs (raw materials, labor wages, and other additional costs), calculate the selling price of products/services, and present information systematically in the form of cost reports, based on costing approaches such as, Activity-based costing, Variance analysis & Customer profitability analysis models, etc., as management considerations to determine product/service price",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Asset Accounting ",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan pencatatan, perhitungan nilai & penaksiran pada tangible asset  dan intangible asset (depresiasi, amortisasi, deplesi & penilaian kembali), berdasarkan pada standar akuntansi dan peraturan-peraturan mengenai aset, melakukan pencatatan, klasifikasi jenis asset (aset yang dimiliki & lokasinya), guna menyajikan nilai perhitungan aset perusahaan secara akurat serta mengoptimalisasikan pengelolaan biaya aset perusahaan",
                "definition_english" => "Knowledge and ability to record, calculate the value & approximation of tangible assets and intangible assets (depreciation, amortization, depletion & revaluation), based on the accounting standardization and asset  regulations, perform records, assets types classification (owned & location), to present the value of company's assets calculations accurately and optimize the management of company’s assets costs",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Financial Reporting",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan identifikasi data finansial yang akan dicantumkan ke dalam laporan keuangan, menyusun struktur laporan serta memberikan informasi dan penjelasan hasil analisis dalam laporan keuangan, berdasarkan pada konsep dan standar pelaporan keuangan, guna menyediakan informasi terkait perspektif keuangan yang sesuai dengan standar laporan keuangan (PSAK, SAI, dll.) sehingga dapat membantu perusahaan dan stakeholders dalam mengevaluasi kinerja keuangan perusahaan",
                "definition_english" => "Knowledge and ability to identify the financial data into the financial statement, prepare the report structure, and provide information and explanation of the financial analysis in the financial statements, based on the concept and standard of financial reporting, to  provide  information from a financial perspectives in accordance with  financial reporting standards (PSAK, SAI, etc.) so that it can assist the company and stakeholders in evaluating the company’s financial performance",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Tax Planning",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merumuskan rencana perpajakkan perusahaan yang mencapai penghematan pajak (tax saving) serta meminimalisir permasalahan terkait perpajakan, melalui proses melakukan pengumpulan, kajian, serta identifikasi aspek-aspek perpajakkan & peraturannya, menyusun model perencanaan pajak, melakukan evaluasi hingga memberikan rekomendasi perbaikan yang sesuai dengan bisnis perusahaan ",
                "definition_english" => "Knowledge and ability to formulate corporate tax plans that achieve tax saving and minimize tax-related problems, through processes of collecting, reviewing, and identifying aspects of taxations & its regulations, preparing tax planning models, evaluate up to provide recommendation for improvement in accordance with company business",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Tax Accounting",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan pencatatan, analisis, perhitungan dalam menentukan besaran  nilai pajak yang akurat, estimasi potensi pajak di masa yang akan datang, serta pelaporan pembayaran pajak yang  tepat waktu dan sesuai dengan standar akuntansi pajak, peraturan/ketentuan pajak dan kepabeanan yang berlaku",
                "definition_english" => "Knowledge and ability to record, analyze, and calculate tax, determine the accurate amount of tax value, future tax estimation, provide an accurate and on-time tax payment report following the standardization of tax accounting, current tax regulations, and customs",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Contract Drafting",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengkaji hukum & fakta dalam topik tertentu serta menuangkan hasil pemikiran (analisis isu legal) untuk menghasilkan rancangan perjanjian dan kontrak yang berpedoman pada prinsip hukum yang berlaku, guna mengakomodasi kebutuhan dan kepentingan bisnis perushaan terkait  kontrak pengadaan, MoU, dll.",
                "definition_english" => "Knowledge and ability to review the law and fact of a certain topic and poured out the thought (regards to illegal issue analysis), to produce a draft of agreement and contract, based on the relevant law principles, that accommodate the company's business needs and interest related to procurement contract, MoU, etc.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Legal Advisory ",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memberikan opini, solusi atau langkah hukum selanjutnya yang tepat bagi bisnis perusahaan, dengan melakukan identifikasi risiko hukum yang mungkin dihadapi, analisa sumber informasi hukum, mempersiapkan dokumen hukum pendukung yang diperlukan, menyusun opini atau pertimbangan hukum baik secara tertulis/ verbal, berdasarkan pada aspek-aspek legal dalam suatu aktivitas, masalah, ataupun kasus terkait bisnis perusahaan",
                "definition_english" => "Knowledge and ability to provide opinions, solutions or further legal actions that are appropriate for the company's business, by identifying legal risks that may be faced, analyzing legal information sources, preparing supporting legal documents needed, formulating written / verbal opinions or legal considerations, based on legal aspects in an activity, problem, or case relted to the company business",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Non Court Litigation (Arbitration & Alternative Dispute Resolutions)",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan identifikasi & analisa permasalahan hukum,serta penyusunan strategi penanganan hukum, mempersiapkan serta meninjau dokumen non-litigasi (permohonan arbitrase, surat jawaban, etc.) & data/informasi bukti pendukung, beracara di lembaga/forum hukum luar pengadilan, arbitrase (Badan Arbitrase Nasional Indonesia/ BANI, dll.), hingga memberikan solusi penyelesaian suatu sengketa, klaim, gugatan, dan perkara yang dilaksanakan di lembaga/forum di luar pengadilan, seperti mediasi ataupun alternatif penyelesaian sengketa lainnya ",
                "definition_english" => "Knowledge and ability to identify & analyze the legal issues and formulate legal handling strategies, prepare and review the non-litigation documents (petition of arbitration, response letter, etc.) as well as the data/information of supporting evidence, proceeding in institutions/forums outside the court, arbitration (Indonesian National Arbitration Board, etc.), up to providing solutions to resolve disputes, claims, accusations, and cases carried out in institutions/forums outside the court, such as mediation or other dispute resolution alternatives",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Court Litigation",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan identifikasi & analisa permasalahan hukum, penyusunan strategi penanganan hukum, menyusun serta meninjau dokumen litigasi (surat gugatan, surat jawaban, kasasi, replik/duplik, PK etc.), mempersiapkan data/informasi bukti pendukung, implementasi hukum beracara di lembaga/forum pengadilan (perdata, pidana, hubungan industrial, etc.) serta memberikan solusi penyelesaian sengketa, klaim, gugatan, dan perkara baik di bidang pidana/perdata terkait bisnis perusahaan (e.g., employment and labor, etc.) ",
                "definition_english" => "Knowledge and ability to identify and analyze the legal issues, formulate legal handling strategies, compile and review litigation documents (lawsuit, motions, response letters, judicial review, etc.), prepare the data/information of supporting evidence, implementation of the legal proceedings in the  court forum/institution (court of public, criminal, industrial relations, etc.), and provide solutions for the settlement of disputes, claim, accusation, and case either in civil/criminal field which related to company business (e.g., employment and labor, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Local and International Rules and Regulations",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami  peraturan serta regulasi lokal (Peraturan Daerah, dll.), nasional (Undang-Undang, Permen, dll.), dan internasional (Regulasi Telekomunikasi Internasional/ITRs, dll.), mengidentifikasi peraturan internal & eksternal yang dapat mempengaruhi jalannya bisnis perusahaan serta melakukan antisipasi terkait tren dan perubahan peraturan & regulasi lokal, nasional, dan internasional sehingga dapat diimplementasikan dalam mengembangkan kebijakan yang sesuai dengan kebutuhan bisnis perusahaan",
                "definition_english" => "Knowledge and ability to understand the local (Government Legislation, etc.), national (Legislation, Ministrial Rules, etc.) & international (International Telecommunication Regulations/ITRs, etc.) rules and regulation, through processes of identifying the internal and external rules that can affect the course of corporate business, anticipating trends and change in national and international rules & regulation, to develop policies that fit corporate business needs",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Regulatory Analysis",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mempertimbangkan kebijakan internal, perundang-undangan eksternal dan kebutuhan bisnis perusahaan, melalui proses pemahaman tentang tata urutan/hierarki peraturan perundang-undangan serta peraturan & kebijakan perusahaan, menganalisis hingga menuangkan hasil pemikiran terhadap regulasi terkait, guna menghasilkan kajian peraturan untuk mempengaruhi regulasi  eksternal/ di luaran perusahaan",
                "definition_english" => "Knowledge and ability to consider the internal policies, legislation, and company business needs, through processes of understanding the order/hierarchy of legislation, rules, and company’s regulation, analyzing and pouring out the thought of related regulations, to provide regulatory reviews to influence the company external regulations",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Corporate Reputation Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun strategi reputasi, mengawasi konten publikasi perusahaan (e.g., search engine results, social media networks, google alerts, forums, dll.), menindaklanjuti konten negatif tentang perusahaan (Mugshot removal sites, dll.) serta mengukur persepsi stakeholder terhadap citra perusahaan, guna menciptakan Good Corporate Reputation",
                "definition_english" => "Knowledge and ability to develop reputation strategy, monitor corporate publication content (e.g., by search engine results, social media networks, google alerts, forums, etc.), respond or handle negative content that related to the corporate (Mugshot removal sites, etc.) and measure stakeholder's perspective towards corporate reputation, to achieve good Corporate Reputation",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Media Planning",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengomunikasikan suatu pesan kepada target audiens secara efektif dan efisien di waktu dan frekuensi yang tepat yang berkaitan dengan reputasi perusahaan, promosi, product/services, maupun informasi perusahaan lainnya, dengan menggunakan data/informasi (target market profile, competitor media strategy, dll.) untuk mengidentifikasi target audiens, menentukan objektif & strategi penyampaian pesan serta menentukan sarana media yang akan digunakan (radio, televisi, blogger, celebrities, dll.)",
                "definition_english" => "Knowledge and ability to communicate a message to the target audience at the right time and right frequency related to the company reputation, promotion, products/services, or other company informations, by using data or information (such as: target market profile, competitor’s media strategy, etc.), identify the target audience, determine the objectives & message delivery strategies as well as determining the options of media channel (radio, television, blogger, celebrities, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Media Relations",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menganalisis karakteristik media/influencer & trend saat ini, membangun serta merancang aktivitas hubungan dengan media ataupun influencer (press release, media tour, company tour, brand storytelling, media gathering, etc.), menyediakan & memonitor informasi yang diberikan kepada media/influencer pilihan (media massa, bloggers, celebrities, dll.), guna memperoleh publisitas, pemberitaan, brand image, dan brand popularity yang dapat membangun citra positif perusahaan",
                "definition_english" => "Knowledge and ability to analyze media/influencer characteristic & current trend, build and design media/influencer relations activities (press release, media tour, company tour, brand storytelling, media gathering, etc.), provide & monitor the provided information which given to the selected media/influencer (mass media, bloggers, celebrities, etc.) to gain publicity, media coverage, brand image, and brand popularity that build positive corporate image",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Content Writing",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan pengumpulan informasi mengenai topik/ide tulisan, mengolah (mengartikulasi dan mengkurasi) kata-kata & bahasa hingga proses finalisasi tulisan, berdasarkan pada gaya penulisan yang sesuai dan konsep struktur penyusunan konten, guna menghasilkan konten (reputasi perusahaan, promosi, product/services, dll.) yang jelas, sesuai dengan karakteristik target, mudah dibaca & dipahami, serta mampu meyakinkan para pembaca, melalui berbagai media channel (e.g website, social media, e-mail, dll.)",
                "definition_english" => "Knowledge and ability to collect information of writing topic or ideas, processing (articulate and curate) words & language up to writing finalization process (revise, edit, etc.), based on the suitable writing styles and content arrangement structure concept to convince readers related to corporate image, promotion, product/services, or others corporate information through various media channel (e.g website, social media, e-mail, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Public Communication",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan identifikasi target audiens, menyusun struktur penyampaian, menyebarluaskan (diseminasi), bertukar pesan, informasi, ide ataupun opini dengan tujuan tertentu (to inform, to persuade, to entertain, dll.) serta mengevaluasi hasil penyampaian pesan/informasi kepada publik internal & eksternal perusahaan dengan berbagai macam media, guna menghasilkan efektivitas komunikasi dengan para stakeholders (e.g., diskusi publik, press conference, e-mail, blog, dll.)",
                "definition_english" => "Knowledge and ability to identify target audience, arrange delivery structure, disseminate and exchanging message, information, ideas or opinion with certain goals (to inform, to persuade, to entertain, etc.) and evaluate the result of message/information delivery to the internal & external public of organization by various media to achieve communication effectiveness with stakeholders (e.g., public discussion, press conference, e-mail, blog, etc.) ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Crisis Communication",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menangani ataupun mencegah situasi yang mengancam kredibilitas perusahaan di mata publik (e.g., Distance Strategies, Mortificiation Strategies, dll.), melalui proses melakukan antisipasi pre-crisis (identifikasi, pembagian tugas),  pengelolaan in crisis (mengumpulkan hingga menyebarkan informasi & koordinasi langkah strategis), hingga melakukan tindakan post-crisis (follow-up, mendapat feedback & evaluasi)",
                "definition_english" => "Knowledge and ability to handle or prevent a situation that threatens corporate credibility in public (e.g., Distance Strategies, Mortification Strategies, etc.), by anticipating pre-crisis (identification, task allocation), managing in-crisis situation (collect information up to disseminate information  & coordinate strategic move) and responding post-crisis situation (follow-up, getting feedback & evaluate)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Partnering",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami pekerjaan pada unit bisnis terkait, membina relasi, memberikan konsultasi & rekomendasi teknis terkait kegiatan bisnis perusahaan kepada pihak-pihak internal fungsi (technical specialist), serta memoderasi hubungan dengan eksternal fungsi (functional intermediator), sebagai upaya untuk mendukung tercapainya pengetahuan, keterampilan & kemampuan yang mampu mendorong peningkatan business outcomes serta pengambilan keputusan bisnis",
                "definition_english" => "Knowledge and ability to understand any jobs in each business units, build relation, provide advisory & technical recommendation to internal function parties related to their business activities (as a technical specialist) and moderate their relationship with external functions (functional intermediator), as an effort to attain knowledge, skills & ability that could improve business outcomes and business decision making",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Account Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami kebutuhan & permasalahan pelanggan, merumuskan strategi pengelolaan account, menyusun definisi key account, memberikan saran/advice terkait solusi yang mampu memberikan kebermanfaatan bagi pelanggan (product solutioning), serta terlibat dalam ekosistem manajemen pengembangan produk, guna mempertahankan hubungan dengan para account & memaksimalkan performa penjualan",
                "definition_english" => "Knowledge and ability to understand customer needs & problems,  develop/maintain account relationship, formulate the definition of key account, provide advisory, perform product solutioning, and involve on product development ecosystem, in order to maintain account relationship & maximize sales performances",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Stakeholder Mapping",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan identifikasi, kategorisasi, prioritisasi serta pemetaan terhadap stakeholder dengan menggunakan template/matrix (e.g., The Participation Planning Matrix, Power Versus Interest Grid, etc.) sebagai upaya untuk mengetahui pihak-pihak yang termasuk key stakeholder (pelanggan, direksi, karyawan, NGO, asosiasi, Masyarakat Telekomunikasi Indonesia, dll.) perusahaan/proyek bisnis",
                "definition_english" => "Knowledge and ability to identify, categorize, prioritize and mapping the stakeholder with a template/matrix (e.g., The Participation Planning Matrix, Power Versus Interest Grid, etc.) as a purpose to know the key stakeholders (customer, directors, employee, NGO, association, Masyarakat Telekomunikasi Indonesia, etc.) of the corporate/ business project",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Stakeholder Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mendengar, menyediakan kebutuhan/informasi, serta mengatur strategi komunikasi (face to face/online, daily/weekly, dll.) dengan key stakeholder, guna mendukung jalannya kegiatan operasional perusahaan",
                "definition_english" => "Knowledge and ability to listen and provide needs/information as well as organizing communication strategy (face to face/online, daily/weekly, etc.) with key stakeholder to support the corporate operational activities",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Investor Relation Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam membangun dan menjaga hubungan dengan para investor/calon investor, melalui proses pengelolaan aktivitas dengan investor (e.g., meetings, press conference, dll.) serta  memfasilitasi komunikasi dua arah (menyediakan & menyampaikan informasi/pesan berupa situasi pasar modal, nilai & potensi saham, informasi dari quarterly/annual report, release financial information, dll.)",
                "definition_english" => "Knowledge and ability to build and maintain a good relationship with investors or potential investor, through processes of managing activities with the investor (e.g., meetings, press conference, etc.) as well as facilitating two-way communication (providing & deliver information/message about capital market, stock's value & potential, quarterly/annual report, release financial information, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Government Relations",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menjalin hubungan yang baik dengan pemerintah, melalui proses mengumpulkan data/informasi dari pemerintahan, mengawasi berita/isu pemerintahan, interpretasi langkah-langkah pemerintah, membangun, menjembatani dan menjaga interaksi/komunikasi dengan pemerintah atau aparat birokrasi, guna  memperoleh kebijakan/keputusan yang sesuai dengan kebutuhan perusahaan",
                "definition_english" => "Knowledge and ability to form a good relationship with government and obtain a policy/decision under the corporate needs to collect data/information from the government, observe the government's news/ issue,  interpret government strategies, build, mediate and maintain interaction/ communication with the government or bureaucracy apparatus ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Event Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menentukan objektif acara/kegiatan, merencanakan (e.g., scheduling, dll.), mengkoordinasikan (media, audiens, speakers, entertainer, dll.), memonitor, hingga mengevaluasi pelaksanaan sebuah acara (untuk semua acara korporasi, e.g., brand activation, seminar, pelatihan, dll.) sehingga seluruh acara terselenggara sesuai dengan rencana  ",
                "definition_english" => "Knowledge and ability to determine the objective of an event, conduct plan (e.g., scheduling,etc.), coordinate (media, audiences, speakers, entertainer, etc.), monitor up to evaluate the implementation of an event (for all corporate event (e.g., Brand activation, seminar, training, etc.) so that all  events are well organized ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Social Mapping",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun gambaran struktur batasan wilayah yang akan menjadi landasan penyusunan program community development dan pelibatan masyarakat dalam bisnis (e.g.,  Participatory Rural Appraisal, dll.), melalui proses melakukan pengumpulan data/ informasi terkait komunitas, identifikasi masalah/ kebutuhan masyarakat, serta analisis sosial yang meliputi potensi wilayah (jumlah kepala keluarga, umur anak yang bersekolah, dll.), elemen budaya & sistemnya (strata sosial, dll.) serta hubungan sosial masyarakat",
                "definition_english" => "Knowledge and ability to develop regional boundaries structure as the basis of organizing community development programs and community involvement in business  (e.g  Participatory Rural Appraisal, etc.), through processes of collecting data/information of the community, identifying problem/needs, conduct social analysis which includes regional’s potential (amount of the family head, age of school children, etc.) and social community relationship",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "CSR & Community Development",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merancang & mengembangkan model intervensi komunitas, menyusun persiapan aktivitas, menjalankan, melaporkan, memonitor, serta mengevaluasi program sosial perusahaan (CSR & Community Development) yang bertujuan memenuhi kepentingan masyarakat (services), menunjang kemandirian (empowering) ataupun pengembangan informasi & komunikasi (relations), guna meningkatkan keberlanjutan (sustainability) perusahaan serta mengikutsertakan (engage) stakeholders ke dalam kegiatan sosial perusahaan",
                "definition_english" => "Knowledge and ability to design and develop community intervention model, organize activities preparation, execute, report, monitor, and evaluate the CSR & Community Development programs which aim to meet community interests (services), supporting independence (empowering) or developing information & communication (relations) to increase corporate sustainability and engaging stakeholder on corporate social activities",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Audit Tools & Techniques",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami prosedur dan prinsip audit, melakukan perencanaan kegiatan audit yang meliputi menentukan target, ruang lingkup, prosedur, penjadwalan audit (per tahun, per triwulan, dll.), membentuk tim, melakukan survei pendahuluan, meninjau dokumen/ informasi audit sebelumnya serta pelaksanaan audit yang meliputi audit sampling hingga mendokumentasikan temuan audit (audit findings) yang sesuai dengan aturan dan standar yang berlaku (e.g., ISO 9001, dll.)",
                "definition_english" => "Knowledge and ability to understand the procedure and principle of audit, planning audit activities include setting the target, scope, procedure, audit's schedule (annual, semester, etc.), build a team, conduct a preliminary survey, review the previous audit's document/information, and execute audit implementation which includes audit sampling up to the audit findings documentation following the applicable rules and standards (e.g., ISO 9001, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Fraud Forensic",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan yang dibutuhkan auditor dalam mengidentifikasi aktivitas ilegal,  mengumpulkan bukti-bukti  forensik, melaksanakan investigasi serta menganalisis hasil temuan/data yang mengarah pada tindakan fraud, irregularities, illegal action, dan/atau abuse of power ",
                "definition_english" => "Knowledge and ability that required for auditor in identifying illegal activities, collecting forensic evidence, conduct investigation and analyzing the findings which lead to fraud, irregularities, illegal action, or abuse of power ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Risk Management Framework & Principles",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan identifikasi (inherent & residual risk), kategorisasi risiko, dokumentasi dalam bentuk risk register (atau yang lainnya), mengukur kemungkinan (likelihood) dan besar dampak risiko (impact) dengan konsep dan metode perhitungan kuantitatif, kualitatif ataupun hybrid model, serta membuat urutan skala prioritas atas risiko sehingga dapat menggambarkan exposure, kapasitas, appetite, toleransi, target, dan batasan risiko di dalam perusahaan, menyusun strategi/ tanggapan mitigasi risiko serta monitoring dan evaluasi  pelaksanaan mitigasi risiko perusahaan",
                "definition_english" => "Knowledge and ability to identify inherent and residual risk, categorize risks, conduct documentation into a risk register (or others), measure risk likelihood and risk impact with the concept and methods of a quantitative, qualitative or hybrid model and making risk priority sequence to describe the exposure, capacity, appetite, tolerance, target and limitation of the risk on the company, arrange strategy or risk mitigation response, monitor and evaluate the implementation of the risk mitigation",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Risk Maturity",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam  memahami Risk Management Maturity Model, melakukan penilaian mandiri terhadap kematangan (risk maturity), implementasi manajemen risiko dari segi proses, dan indikator kesiapan lainnya dengan menggunakan model standarisasi internasional (ISO 31000, RIMS RMM Model, dll.) guna menggambarkan posisi tingkat kematangan manajemen risiko perusahaan (risk rating) dan memberikan rekomendasi perbaikan manajemen risiko",
                "definition_english" => "Knowledge and ability to understand Risk Management Maturity Model, conduct a self-assessment to measure risk maturity, implement risk management from the process and others indicator of preparedness using the international standardized model (ISO 31000, RIMS RMM Indicator, etc.) to describe the position of corporate risk maturity (risk rating) and provide an improvement recommendation of corporate risk management",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Investment & Financial Risk Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan kontrol, monitoring,  serta memberikan rekomendasi mitigasi risiko keuangan (e.g., risiko likuiditas, risiko kredit, risiko pasar) secara proaktif & sistematis, guna menjamin seluruh portofolio investasi berjalan dengan konsisten dan meminimalisir  terjadinya risiko bisnis  & keuangan di perusahaan",
                "definition_english" => "Knowledge and ability to control, monitor, and provide recommendations for financial risk mitigation (e.g., liquidity risk, credit risk, market risk) in a proactive & systematic manner, to ensure that all investment portfolios run consistently and minimize the occurrence of business & financial risk in the company",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Insurance Management ",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan identifikasi & analisa objek asuransi, memperhitungkan serta merekomendasikan jenis asuransi yang paling tepat untuk bisnis perusahaan ",
                "definition_english" => "Knowledge and ability to identify & analyze insurance objects, calculate and recommend the most suitable type of insurance products for the corporate business",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Compliance Framework Design",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menentukan, merancang, serta mengembangkan metode/ framework compliance guna mendukung pengawasan kepatuhan program perusahaan",
                "definition_english" => "Knowledge and ability to determine, design, and develop the compliance methods/framework to support monitoring of corporate compliance program",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Compliance Evaluation",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merencanakan pelaksanaan evaluasi kepatuhan, mengumpulkan data/informasi, menganalisa, mengukur, mengevaluasi tingkat kepatuhan dan transaksi bisnis perusahaan, serta memberikan rekomendasi terkait prosedur penerapan Good Corporate Governance ",
                "definition_english" => "Knowledge and ability to plan the compliance evaluation program, collect data/information, analyze, measure, evaluate the level of compliance and corporate business transaction, also provide a recommendation of the implementation procedure of Good Corporate Governance",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Fraud Prevention",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mengidentifikasi, menganalisis potensi, dan menyusun tindakan pencegahan terjadinya fraud (e.g., employment, supplier, and customer screening, code of conduct, fraud policy, hire employee, etc.) ",
                "definition_english" => "Knowledge and ability to identify, analyze a fraud potential, and arrange fraud prevention action (e.g., employment, supplier, and customer screening, code of conduct, fraud policy, hire employee, etc.) ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Due Diligence ",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam mempersiapkan kebutuhan informasi/ dokumen serta menganalisis seluruh aspek kepatuhan suatu objek/ subjek bisnis guna memastikan kelayakan (due diligence) sebagai bahan pertimbangan sebelum melakukan transaksi bisnis (e.g., M&A, investment, dll.) dan kegiatan bisnis lainnya",
                "definition_english" => "Knowledge and ability to prepare the needs of information/document and analyze entire compliance aspects of a business object/subject to ensure fairness as a matter of consideration before conducting business transactions (e.g., M&A, investment, etc.) and other business activities",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Property/Site Acquisition & Disposal",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan identifikasi kondisi, potensi & kebutuhan akuisisi/ pelepasan properti/site, melakukan riset, evaluasi terhadap hukum-hukum yang berlaku di daerah tersebut, serta pengecekan property/site secara langsung (survei), menyediakan informasi  properti/site (pemetaan lokasi, akses, dll.), pemilihan hingga memperoleh persetujuan proses akuisisi properti (beli/sewa) serta melakukan proses penghapusan atau pelepasan properti/site (penjualan, peralihan hak milik, dll.) berdasarkan pada  metodologi akuisisi properti/site",
                "definition_english" => "Knowledge and ability to identify the condition, potential & needs of property/site acquisition or disposal, perform research, evaluate the law in force of the potential acquisition area, property/site survey, and provide information up to gain the agreement of property (buy/rent) and doing property/site removal or disposal (sell, transfer of property site, etc.), based on property/site acquisition methods",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Building & Facility Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan kegiatan perencanaan teknis, pelaksanaan, pengoperasian, inspeksi, pemeliharaan, perbaikan, dan pengawasan pembangunan perkantoran beserta seluruh prasarananya yang dengan bantuan beberapa tools pendukung (e.g., Task List Checklist, CAFM, CMMS, etc.), berdasarkan pada pemahaman akan material/konstruksi gedung, guna menghasilkan kenyamanan fasilitas perusahaan",
                "definition_english" => "Knowledge and ability to perform technical planning, execute, operate, conduct an inspection, maintenance, improvement, and supervision of the  building construction including all the infrastructure with support tools such as Task List Checklist, CAFM, CMMS, etc., based on understand material/building construction, to provide system and recommendation for a comfortable corporate facilities",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Space Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun perkiraan (proyeksi) tata letak ruang kerja, melalui proses menganalisa data (jumlah karyawan, departemen, aset, etc.), menyusun strategi, pengaturan, dengan bantuan tools pendukung (e.g., AutoCAD, Excel Spreadsheet, etc.) agar tercipta lingkungan kerja yang nyaman dan efisien",
                "definition_english" => "Knowledge and ability to compile projection of workspace layout analyze data (amount of employees, department, assets, etc.), design a strategy, settings, with supporting tools, such as AutoCAD, Excel Spreadsheet, etc., to create comfort and efficient work environment",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Utilities Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melacak data penggunaan energi (billing, repair records, etc.) serta menyusun strategi optimalisasi penggunaan gas, air, listrik, telekomunikasi, air conditioning, dan bahan bakar yang dibutuhkan dalam kegiatan operasional perusahaan guna mencapai penghematan energi dan keuangan perusahaan ",
                "definition_english" => "Knowledge and ability to track used energy data (billing, repair records, etc.), arrange and resolve utility system problems for optimizing the use of gas, water, electricity, telecommunication, air conditioning, and fuel needed in the company's operational activities to achieve energy savings and economizing financial",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Office Support",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam merencanakan serta implementasi penyediaan fasilitas dan pelayanan umum (e.g., fasilitas ruangan kerja & rapat, penyediaan alat tulis kantor, ketersediaan kendaraan, ketersediaan supir, pemeliharaan kendaraan, ketersediaan jasa keamanan, pelayanan resepsionis, kebersihan ruangan, konsumsi, penyediaan kebutuhan pantry, furniture, dan kartu identitas, dll.) untuk mendukung kegiatan operasional perusahaan",
                "definition_english" => "Knowledge and ability to plan and implement the provision of the facility and general services (e.g guest/visitor, office stationery, telecommunication, transportation and the maintenance, availability of drivers, receptionist services, availability of security services,  catering, furniture, ID card, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Travel Management & Accommodation",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan terkait kegiatan pengajuan, persiapan & pengaturan jadwal serta keperluan perjalanan/ kendaraan dinas, penyelesain klaim serta memberikan rekomendasi terhadap kebijakan perjalanan dinas (e.g., untuk perjalanan pendidikan & pelatihan, seminar, rapat kerja nasional/internasional, kunjungan kerja, dll.) ",
                "definition_english" => "Knowledge and ability to propose activities, prepare the schedule settings and travel/official vehicle needs, claim settlement and provide recommendation of  travel policy (e.g for training & education program, seminar, international/national meetings, business visitation, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Health and Wellness Program Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun program kesehatan pekerja (lunch & healthy snacks, fitness center, dll.), mengimplementasikan (e.g., paramedical service, dll.) serta mengevaluasi program tersebut, dengan mempertimbangkan faktor-faktor yang dapat mempengaruhi kesehatan (sosial, fisik, dan mental), guna mendukung kesehatan dan produktivitas pekerja",
                "definition_english" => "Knowledge and ability to arrange employees health  programs (lunch & healthy snacks, fitness center, etc.), implement (e.g., paramedical service, etc.) and evaluate the programs, by considering factors that  can affect health (social, physics and mental), to support employees health and productivity",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Safety Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami sistem manajemen keselamatan, melakukan identifikasi, analisis, dan mitigasi risiko yang dapat menggunakan bantuan tools (e.g., Basic Excel SRM Template, BowTie SRM Software, etc.) yang berkaitan dengan sistem manajemen keselamatan serta  aspek keselamatan termasuk risiko-risiko kecelakaan/ bahaya",
                "definition_english" => "Knowledge and ability to understand safety management system, identify, analyze and mitigate the risk with supporting tools (e.g., Basic Excel SRM Template, BowTie SRM Software, etc.) that related to safety aspects such as the risk of accidents/hazards ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Emergency Response Management ",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan identifikasi, perencanaan dan implementasi prosedur penanggulangan keadaan bahaya/ darurat  termasuk menyusun emergency preparedness, pre-fire planning, fire drill/emergency drill untuk meminimalisir kerugian dan menjamin kesigapan kondisi darurat perusahaan",
                "definition_english" => "Knowledge and ability to identify, plan and implement the emergency or hazards response procedure which includes arranging emergency preparedness, pre-fire planning, fire drill/emergency drill to minimize loss and guarantee the readiness of emergency conditions in the company",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Physical Security",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan identifikasi jenis ancaman, menyusun rencana pengamanan, melaksanakan, serta mengawasi kegiatan pengamanan terhadap personil, fasilitas, peralatan, sistem pendukung, dan material logistik, dari berbagai bentuk ancaman maupun bahaya, baik dari dalam maupun luar perusahaan",
                "definition_english" => "Knowledge and ability to identify types of threats, arrange security plan, execute, and monitor security programs towards personnel, facilities, equipment, support system, and logistic materials from all types of threats and hazards both from internal and external of the company",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Green Management ",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menyusun program, mengimplementasikan, mengawasi, serta memberikan rekomendasi terhadap prosedur penerapan The Triple-R : Reduce, Reuse, dan Recycle kepada seluruh karyawan guna meminimalisir limbah perkantoran (kertas, plastik, catridge tinta, limbah elektronik, dll.)",
                "definition_english" => "Knowledge and ability to arrange program, implement, monitor, and provide recommendation towards the implementation of The Triple-R: Reduce, Reuse, and Recycle to the entire employees to minimize industry waste (paper, plastic, ink cartridge, electronic waste, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Strategy Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terhadap detail arahan serta strategi bisnis perusahaan secara keseluruhan (Corporate Strategic Plan), baik jangka panjang, menengah, maupun pendek",
                "definition_english" => "Knowledge and ability to understand detailed busienss directions and overall Corporate Strategic Plan, both long, medium, and short term",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Process Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terhadap keseluruhan proses bisnis yang berlaku di dalam perusahaan, termasuk framework yang digunakan (e.g., eTom, ITIL, dll.) serta keterkaitan proses bisnis tersebut dengan tugas & tanggung jawab setiap fungsi dan/atau antar unit kerja",
                "definition_english" => "Knowledge and ability to understand overall business process in the organization, incl. the used framework (e.g., ETom, ITIL, etc.), as well as the linkaged between business process with each functions and/or cross-functional tasks & responsibilities",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Knowledge",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terhadap lingkungan, dinamika, kondisi bisnis (domestik, regional, maupun global), tren industri bisnis saat ini & akan datang, kompetitor, partner strategis, hingga preferensi, permintaan, karakteristik & perilaku customer, guna memperoleh pemahaman yang komprehensif atas bisnis korporasi",
                "definition_english" => "Knowledge and ability to understand business environment, dynamism, condition (domestic, regional, also global), current and future business trends, competitors, strategic partners, preferences, demands, customer characteristics & behaviors, in order to gain comprehensive understanding of corporate business",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Product/Service Knowledge",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terhadap varian/jenis product/services, keseluruhan fitur, kegunaan, penerapan, serta informasi/syarat pendukung lain (e.g., tata cara pengajuan, siapa saja yang dapat mengajukan/memiliki, dll.), termasuk mengikuti perkembangan informasi terkait product/services Telkomsel secara mendetail",
                "definition_english" => "Knowledge and ability to understand the variants/types of products/services, whole features, utilities, application, and other information/supporting requirements (e.g., submission procedures, person who can apply/own, etc.), incl. keep up with updated information related to Telkomsel’s product/services in detail",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Games Product Knowledge",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait tren & kebutuhan pasar terhadap jenis/variasi genre, spesifikasi, sistem, fitur (e.g., grafik, audio, dll.), syarat-syarat penggunaan (e.g., batasan usia, in-app-purchases, dll.) dari sebuah game, serta kepekaan terhadap perubahan dan/atau perkembangan aspek-aspek dalam game tersebut (e.g., event games yang digemari, dll.), termasuk ketentuan/aturan/regulasi hukum yang mengatur bisnis game, hingga penawaran-penawaran yang diberikan kompetitor kepada pelanggan/end-user (e.g., paket pembelian item, dll.)",
                "definition_english" => "Knowledge and ability to understand trends & market needs related to games product, incl. variants/types of genre, specifications, system, features (e.g., graphic, audio, etc.), terms of use (e.g., age limit, in-app purchases, etc.), as well as have sensitivity on changes and/or development of game aspects (e.g., event for popular games, etc.), also terms/rules/legal regulations related to game business, and the offers provided by competitors to customer/end-user (e.g., purchase item package, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Video Product Knowledge",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait tren & kebutuhan pasar terhadap jenis tontonan video (e.g., drama, movie, serial TV, dll.), persyaratan untuk menonton (e.g., batasan usia,wilayah, dll.), serta kepekaan terhadap perubahan dan/atau perkembangan tren tontonan video, termasuk ketentuan/aturan/regulasi hukum yang mengatur bisnis video, platform yang sering digunakan & paling berpengaruh bagi masyarakat, hingga penawaran-penawaran yang diberikan kompetitor kepada pelanggan/end-user (e.g., subscribe, paket streaming video, membership, freemium, dll.)",
                "definition_english" => "Knowledge and ability to understand trends & market needs related to video product, incl. video viewing type (e.g. drama, movie, TV serial, etc.), requirements to watch (e.g. age limit, area, etc.), as well as have sensitivity on changes and/or development of video viewing trends, also terms/rules/legal regulations related to video business, platform that regularly used & impactful to public, and the offers provided by competitors to customer/end-user (e.g., subscribe, video streaming package, membership, freemium, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Music Product Knowledge",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait tren & kebutuhan pasar terhadap jenis/variasi genre musik (e.g., hip hop, rock, dll.), persyaratan penggunaan paket/aplikasi musik (e.g., batasan usia, wilayah, dll.), serta kepekaan terhadap perubahan dan/atau perkembangan tren lagu/musik terpopuler di tangga musik nasional maupun internasional, termasuk ketentuan/aturan/regulasi hukum yang mengatur bisnis musik, platform yang sering digunakan & paling berpengaruh bagi masyarakat (e.g, LangitMusik, Spotify, JOOX, Smule, Resso, Svara, Deezer, dll.), hingga penawaran-penawaran yang diberikan kompetitor kepada pelanggan/end-user (e.g., subscribe, Pay As You Go membership, paket streaming musik, freemium, dll.)",
                "definition_english" => "Knowledge and ability to understand trends & market needs related to music product, incl. genre (e.g., hip hop, rock, etc.), music terms of package/application use (e.g., age limit, area, etc.), as well as have sensitivity on changes and/or development of popular song/music trends, both in national and international music chart, also terms/rules/legal regulations related to music business, popular platform that regularly used & impactful to public (e.g, LangitMusic, Spotify, JOOX, Smule, Resso, Svara, Deezer, etc.), and the offers provided by competitors to customer/end-user (e.g., subscribe, Pay As You Go membership, music streaming package, freemium, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "VAS Product Knowledge",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait tren & kebutuhan pasar terhadap layanan dukungan komunikasi (e.g., transfer pulsa, collect SMS, berbagi kuota, personal ring back tone, dll.), serta kepekaan terhadap perubahan dan/atau perkembangan konten layanan dukungan komunikasi (standar/premium), termasuk ketentuan/aturan/regulasi hukum yang terkait, penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan konten layanan yang digemari dan/atau untuk memenuhi kebutuhan pelanggan/end-user",
                "definition_english" => "Knowledge and ability to understand trends & market needs related to communication support services (e.g., credit transfer, SMS collect, sharing quota, personal ring back tone, etc.), as well as have sensitivity on changes and/or development of communication support services (standard/premium), also terms/rules/legal regulations related to this business, the offers provided by competitors, and opportunity to develop popular service content and/or to fulfill customer/end-user needs",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Legacy Product (Prepaid & Postpaid) Knowledge",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait tren & kebutuhan pasar terhadap produk prepaid & post-paid, yang meliputi prosedur aktivasi, policies, terms & conditions, tarif, keseluruhan fitur-fitur layanan (e.g., discount, usage detail, prepaid and postpaid subscription plan, dll.), skenario billing process prepaid & post-paid, serta macam-macam perkembangan tren billing process saat ini maupun yang akan datang (e.g., Authenticating, Authorizing, dll.), termasuk ketentuan/aturan/regulasi hukum yang terkait, hingga penawaran-penawaran yang diberikan kompetitor kepada pelanggan/end-user (e.g., diskon telpon, bundling sms, dll.) ",
                "definition_english" => "Knowledge and ability to understand trends & market needs related to prepaid & post-paid products, incl. activation procedures, policies, terms & conditions, tariff, whole service features (e.g., discount, usage detail, prepaid and post-paid subscription plan, etc.), prepaid & post-paid billing process scenarios, as well as variety of current and future billing process trends (e.g., Authenticating, Authorizing, etc.), also terms/rules/legal regulations related to this business, the offers provided by competitors to customer/end-user needs (e.g., call discount, message bundling, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Banking Solution Knowledge",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait tren & kebutuhan enterprise terhadap layanan keuangan berbasis digital (e.g., money deposits, withdrawals, transfers checking/saving account management, bill pay, dll.), serta kepekaan terhadap perubahan dan/atau perkembangan layanan keuangan berbasis digital, termasuk ketentuan/aturan/regulasi hukum yang terkait, platform yang sering digunakan & paling berpengaruh, penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan layanan yang mampu memberikan kemudahan bertransaksi & manfaat bagi perusahaan/klien",
                "definition_english" => "Knowledge and ability to understand trends & market enterprise related to digital banking solution products (e.g., money deposits, withdrawals, transfers checking/saving account management, bill pay, etc.), as well as have sensitivity on changes and/or development of digital banking services, also terms/rules/legal regulations related to digital banking business, most used and impactful platforms, the offers provided by competitors, and opportunity to develop services that could provide convenience of transactions & benefits for another company/clients",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Advertising Solution Knowledge",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait tren & perkembangan kebutuhan enterprise terhadap solusi pemasaran produk/layanan melalui platform digital (e.g., social media, digital media, dll.), serta kepekaan terhadap perubahan dan/atau perkembangan layanan/solusi pemasaran produk/layanan, termasuk ketentuan/aturan/regulasi hukum yang terkait, platform yang sering digunakan & paling berpengaruh, penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan solusi yang mampu memberikan manfaat bagi perusahaan/klien untuk melaksanakan aktivitas pemasaran berbasis digital",
                "definition_english" => "Knowledge and ability to understand trends & enterprise needs related to product/service advertising solution through digital platform (e.g., social media, digital media, etc.), as well as have sensitivity on changes and/or development of digital advertising solution, also terms/rules/legal regulations related to digital advertising business, most used and impactful platforms, the offers provided by competitors, and opportunity to develop services that could provide convenience of advertising based digital for another company/clients",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IoT Solution Knowledge",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait tren & kebutuhan enterprise, keseluruhan fitur- fitur layanan (e.g., monitoring, organizing, dll.), pertimbangan dalam mendesain produk IoT, yang meliputi kondisi lingkungan, tipe sensor yang akan digunakan, volume data yang akan dikumpulkan, kebutuhan power, range, dan speed dalam desain perangkat, serta biaya unit perangkat dan total biaya ownership, keunggulan layanan, termasuk ketentuan/aturan/regulasi hukum yang terkait (e.g., standarisasi frekuensi, perangkat, TKDN, dll.), penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan layanan yang mampu memberikan manfaat bagi perusahaan/klien",
                "definition_english" => "Knowledge and ability to understand the trends & enterprise needs related to IoT products, incl. whole service features (e.g., monitoring, organizing, etc.), consideration in designing IoT products, that are included environment condition, types of sensor to be used, data volume to be collected, power needs, range, and speed in designed devices, as well as the budget for each device units and ownership total cost, service excellence, also terms/rules/legal regulations (e.g., frequency standardization, device, TKDN, etc.), the offers provided by competitors, and opportunity to develop service that could provide benefits for another company/clients",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Fleet Solution Knowledge",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait tren & kebutuhan enterprise terhadap solusi pemantauan logistik, transportasi & kendaraan operasional (e.g., mobil, kapal, van, truk, bus, dll.), serta kepekaan terhadap keunggulan, perubahan, dan/atau perkembangan fitur layanannya, termasuk ketentuan/aturan/regulasi hukum yang terkait, penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan fitur-fitur layanan yang mampu memberikan kemudahan, manfaat, meningkatkan efisiensi & evaluasi kinerja bagi perusahaan/klien",
                "definition_english" => "Knowledge and ability to understand the trends & enterprise needs related to monitoring solution for logistic, transportation & operation vehicle (e.g., car, boat, van, truck, bus, etc.), as well as have sensitivity on changes and/or development of fleet solution features, also terms/rules/legal regulations, the offers provided by competitors, and opportunity to develop fleet solution features that could provide convenience, benefits, increasing efficiency & performance evaluation for another company/clients",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Mobility Solution Knowledge ",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait tren & kebutuhan enterprise, keseluruhan fitur-fitur layanan (e.g., Mobile device management, dll.), memahami end-user point of view (e.g., develop mobile apps, facilitate BYOD, make mobile-ready business platforms, dll.), platform selection, serta kepekaan terhadap keunggulan, perubahan, dan/atau perkembangan teknologi, baik smartphone maupun perangkat lainnya, termasuk ketentuan/aturan/regulasi hukum yang terkait, penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan fitur-fitur layanan yang mampu memberikan kemudahan (mobile), manfaat, meningkatkan efisiensi & evaluasi kinerja bagi perusahaan/klien",
                "definition_english" => "Knowledge and ability to understand the trends & enterprise needs related to a whole mobility solution features (e.g., Mobile device management, etc.), understand end-user point of view (e.g., develop mobile apps, facilitate BYOD, make mobile-ready business platforms, etc.), platform selection, as well as have sensitivity on technology excellence, changes, and/or development, either smartphone or other device, also terms/rules/legal regulations related to mobility solution, the offers provided by competitors, and opportunity to develop service features that could provide convenience (mobile), benefits, increasing efficiency, and performance evaluation for another company/clients",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Cloud Solution Knowledge ",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait tren & kebutuhan enterprise, keseluruhan fitur-fitur layanan komputasi berbasis internet (e.g., storage, database, public, private, hybrid dll.), serta kepekaan terhadap keunggulan, perubahan, persyaratan keamanan & kepatuhan yang dibutuhkan, dan/atau perkembangan layanan, termasuk ketentuan/aturan/regulasi hukum yang terkait, penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan fitur-fitur layanan yang mampu memberikan kemudahan & manfaat bagi perusahaan/klien",
                "definition_english" => "Knowledge and ability to understand the trends & enterprise needs related to whole features of internet based computational services (e.g., storage, database, public, private, hybrid, etc.), as well as have sensitivity on solution required excellence, changes, security & compliance requirements, and/or development, also terms/rules/legal regulations related to this solution, the offers provided by competitors, and opportunity to develop service features that could provide convenience & benefits for another company/clients",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Security Solution Knowledge",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait tren & kebutuhan enterprise terhadap solusi terkait privasi & keamanan, keunggulan, jenis solusi keamanan (e.g., firewall protection, security information, dll.), serta kepekaan terhadap keunggulan, keseluruhan fitur & layanannya (e.g., malware, spyware, VPN, dll.), dan/atau perkembangan layanan, termasuk ketentuan/aturan/regulasi hukum yang terkait, penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan fitur-fitur layanan yang mampu memberikan kemudahan & manfaat bagi perusahaan/klien",
                "definition_english" => "Knowledge and ability to understand the  trends & enterprise needs related to privacy & security solution, incl. solution excellence, types (e.g., firewall protection, security information, etc.), as well as have sensitivity on solution excellence, whole features & its services (e.g., malware, spyware, VPN, etc.), and/or development, also terms/rules/legal regulations related to this solution, the offers provided by competitors, and opportunity to develop service features that could provide convenience & benefits for another company/clients",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Solution Knowledge",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait tipe & karakteristik data, fungsi (e.g., pencapaian data availability, governance, security, centralization, dll.), tren & kebutuhan enterprise terhadap solusi penunjang pengelolaan data, serta kepekaan terhadap keunggulan, perubahan/perkembangan layanan, termasuk ketentuan/aturan/regulasi hukum yang terkait, penawaran-penawaran yang diberikan kompetitor, hingga peluang pengembangan fitur-fitur layanan yang mampu memberikan kemudahan & manfaat bagi perusahaan/klien untuk melakukan pengelolaan data di perusahaan",
                "definition_english" => "Knowledge and ability to understand data types and characteristics, functions (e.g. data availability achievement, governance, security, centralization, etc.), trends & enterprise needs related to data management solution, as well as have sensitivity on solution excellence, service changes/development, also terms/rules/legal regulations related to this business, the offers provided by competitors, and opportunity to develop service features that could provide convenience & benefits for anothe company/clients to manage their corporate data",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Marketing Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait konsep, strategi, kerangka, serta unsur-unsur yang terkandung dalam model marketing mix (Product, Place, Price, Promotion, People, Process, Physical Evidence, dll.), termasuk mengikuti perkembangan model marketing mix tersebut",
                "definition_english" => "Knowledge and ability to understand the concepts, strategies, frameworks, and elements that included in marketing mix model (Product, Place, Price, Promotion, People, Process, Physical Evidence, etc.), incl. keep up in marketing mix model development",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Sales Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait prinsip, metode, serta teknik-teknik untuk menjual suatu produk/jasa, mencakup di dalamnya strategi & target penjualan, pelaksanaan demonstrasi produk, hingga pengelolaan proses monitoring & kontrol kegiatan penjualan",
                "definition_english" => "Knowledge and ability to understand the selling principles, methods, and service techniques, incl. understanding about sales strategy & target, implementation of product demonstration, as well as sales activity monitoring & control management ",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Customer Services Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait prinsip & proses pemberian jasa/layanan kepada pelanggan, yang meliputi wawasan akan customer needs assessment, standar kualitas pelayanan, serta evaluasi kepuasan pelanggan",
                "definition_english" => "Knowledge and ability to understand the principles & providing services processes to customers, incl. understanding about customer needs assessment, service standard quality, as well as customer satisfaction evaluation",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Information Technology Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terhadap konsep fundamental, sistem, platforms, tools, teknologi, hingga perangkat IT (hardware, software, serta perangkat IT lainnya) yang dibutuhkan dan/atau biasa digunakan di industri",
                "definition_english" => "Knowledge and ability to understand the fundamental IT concepts, systems, platforms, tools, technologies, and devices (hardware, software and other IT devices) that are needed and/or commonly used in the organization",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "IT Architecture Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terhadap desain, konsep, roadmap serta strategi jangka panjang IT, termasuk arahan terkait pengembangan solusi yang tepat bagi keberlangsungan bisnis perusahaan",
                "definition_english" => "Knowledge and ability to understand the IT design, concept, roadmap, and long term strategic plan, also direction related to solution development that would support business sustainability",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Data Management Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terhadap landasan serta konsep-konsep pengelolaan data sebagaimana tertuang dalam DAMA Body of Knowledge (DMBoK), meliputi tata cara pengaturan, pencarian, pengurutan, hingga pendefinisian data menjadi informasi yang optimal & efisien",
                "definition_english" => "Knowledge and ability to understand the basic and concepts of data management that written on DAMA Body of Knowledge (DMBoK), incl. data management procedures, searching, sorting, as well as defining data into optimal and efficient information",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Telecommunication Network Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman tentang konsep fundamental, sistem, protokol, hingga komponen/elemen network (core, radio, transport, serta komponen/elemen lainnya) yang dibutuhkan di perusahaan",
                "definition_english" => "Knowledge and ability to understand the fundamental network concepts, systems, protocols, and components/elements (core, radio, transport, and other component/element) that are needed in organization",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Network Architecture Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terhadap desain, konsep, roadmap, kerangka/rancang bangun, serta arahan strategis terkait pengelolaan network perusahaan yang tepat bagi keberlangsungan bisnis perusahaan",
                "definition_english" => "Knowledge and ability to understand network design, concept, roadmap, framework/architecture, also strategic direction related to the most suitable way on managing network that would support business sustainability",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Supply Chain Management Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait siklus pengelolaan rantai pasok, yang terdiri dari proses pengadaan, pengelolaan supplier/vendor, optimalisasi kegiatan produksi (dari raw material hingga menjadi suatu produk), proses penerimaan dan pengiriman/distribusi produk, serta kegiatan inventori",
                "definition_english" => "Knowledge and ability to understand the supply chain management cycle, including procurement process, supplier/vendor management, production activities optimization (from raw material into a product), process of receiving and delivering/distributing product, as well as the inventory activities",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Human Resources Management Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait keseluruhan proses pengelolaan sumber daya manusia, meliputi kebijakan, aturan, serta penerapan kegiatan perencanaan SDM, penyusunan desain organisasi, perekrutan, pelatihan & pengembangan, performance evaluation, career management, competency (behaviour & technical), rewards/recognition, hubungan tenaga kerja/industrial, hingga employee experience",
                "definition_english" => "Knowledge and ability to understand the whole Human Resources Management process, including policies, rules and implementation of Human Resources plan activities, drafting organization design, recruitment, training and development, performance evaluation, career management, competency (behaviour & technical), rewards/recognition, employee/industrial relationship and employee experience",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Finance and Accounting Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman tentang seluruh prinsip & konsep keuangan meliputi budgets, investing, banking, financial products, interest and compounding, financial regulations and resource, financial statement (balance sheet, income statement & cash flow statement), financial metrics yang diantaranya; ROI, IRR, WACC, Profit & Loss, istilah dalam akuntansi termasuk pendapatan (revenue), biaya (expenses), assets & kewajiban (liabilities), equity/net worth, value generation dan value consumption, serta kepekaan terhadap tren, perubahan dan/atau perkembangan  tentang topik keuangan",
                "definition_english" => "Knowledge and ability to understand the whole finance principles & concepts including budgets, investing, banking, financial products, interest and compounding, financial regulations and resource, financial statement (balance sheet, income statement & cash flow statement), financial metrics including: ROI, IRR, WACC, Profit & Loss, terms in accounting including income (revenue), expenses, assets & liabilities, equity/net worth, value generation and value consumption, as well as sensitivity to trends, changes and/or finance topic development",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Taxation Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman perusahaan sebagai wajib pajak (batas waktu pembayaran, penyetoran, dan pelaporan pajak), asas-asas pemungutan & pengenaan pajak, jenis-jenis pajak (PPh, PPN, dll.), istilah umum perpajakan, serta hal-hal mengenai administrasi pajak lainnya sebagai kepentingan dan jalannya bisnis perusahaan",
                "definition_english" => "Knowledge and ability to understand the company as a taxpayer (payment deadline, deposit and tax reporting), collection procedures & tax imposition, type of tax (PPh, PPN, etc.), general terms of tax, as well as other tax administration matters as interest and continuity of the company",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Legal Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman tentang hirarki, struktur, subjek hukum, sumber hukum (material dan formal), asas-asas, peraturan & norma hukum yang berlaku, apa saja hal yang dapat dihukum (tindak, perbuatan, peristiwa, ataupun delik),  hak dan tanggung jawab dalam hukum, tata cara mengatasi, memastikan, dan mencegah masalah/pelanggaran hukum termasuk kewajiban dan perizinan yang harus dipenuhi, paham akan bagaimana dan dimana mencari sumber daya atau informasi hukum, serta kepekaan terhadap perubahan dan/atau perkembangan tentang hukum ",
                "definition_english" => "Knowledge and ability to understand the hirarcies, structures, legal objects, legal sources (materal and formal), principles, rules & applicable law norms, things that can be punished (action, behavioral, incident, or offense), rights and responsibilities in law, resolve procedures, ensure, and prevent problems/violations of the law, including obligations and permits that must be fulfilled, understand how and where to seek legal resources or informations, as well as sensitivity to changes and/or developments regarding to the law",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Corporate Law",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman tentang jenis-jenis & kegiatan badan usaha (e.g., CV, PT, Perum, Perseroan, dll.), dasar hukum perusahaan, tugas dan kewajiban perusahaan (termasuk pelaporan perusahaan yang diatur oleh undang-undang, perizinan/license sebagai syarat keberlangsungan bisnis perusahaan), lifecycle perusahaan (pembentukkan, pendanaan, kegiatan tata kelola perusahaan, & konsekuensi hukum dari pembubaran), aspek hukum mengenai peraturan persaingan usaha yang adil serta aspek hukum lainnya yang mengatur investor, direksi, karyawan, dan pemangku kepentingan lainnya berinteraksi satu sama lain yang sesuai dengan kebutuhan bisnis perusahaan, serta kepekaan terhadap perubahan dan/atau perkembangan tentang hukum perusahaan",
                "definition_english" => "Knowledge and ability to understand the types and activities of business entity (e.g., Co., Ltd., Inc., LLC, etc.), company basic law, company tasks and responsibles (including company report that regulated by law, license as a condition for business continuity of the company), company lifecycle (building, funding, corporate governance activities, & legal consequences of dissolution), legal aspects regarding to fair business competition regulations as well as the other legal aspects that regulate investors, directors, employees and other stakeholders to interact with each other according to the company's business needs, as well as sensitivity to changes and/or developments regarding to company law",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Labour Law",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman tentang perkembangan hukum ketenagakerjaan, asas-asas dalam hubungan industrial & tanggung jawab pekerja baik yang diatur dalam dasar hukum Indonesia dan International Labour Organization/ILO (UU Ketenagakerjaan) yang mengatur; manpower planning, manpower information, perjanjian kerja, tenaga kerja asing, hubungan kerja, perlindungan pengupahan & kesejahteraan pekerja, lembaga penyelesaian perselisihan hubungan industrial  & hal-hal lainnya mengenai ketenagakerjaan, serta kepekaan terhadap perubahan dan/atau perkembangan tentang hukum ketenagakerjaan",
                "definition_english" => "Knowledge and ability to understand labor law development, princeples of industrial relationship & employee responsibilities both regulated in Indonesia law and International Labour Organization/ILO (Labor Law), manpower planning, manpower information, employment agreement, foreign worker, employment relations, protection of wages & worker welfare, industrial relations dispute settlement institution & other labor matters, as well as sensitivity to changes and/or developments regarding to labor law",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Tax Law",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman tentang konsep, unsur-unsur pajak, fungsi hukum pajak, ketentuan teknis pengelolaan pajak, dasar pungutan pajak baik secara konstitusional maupun filosofis, serta kepekaan terhadap perubahan dan/atau perkembangan tentang hukum perpajakan",
                "definition_english" => "Knowledge and ability to understand the concepts, tax elements, tax law functions, technical provisions of tax management, basic tax collection both constitutionally and philosophically, as well as sensitivity to changes and/or developments regarding to tax law",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Civil Law (Private)",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman tentang peraturan, asas-asas hukum, subjek hukum (perorangan atau badan hukum), perbuatan-perbuatan hukum (perjanjian sewa-menyewa, pinjam-meminjam, dll.), hubungan subjek dengan hukum, dan sumber hukum yang menyangkut hubungan antar-individu atau individu dengan suatu perusahaan, asosiasi, atau badan lainnya,  baik itu hukum perdata ataupun hukum perniagaan (dagang), dan lainnya yang berkaitan dengan bisnis perusahaan, serta kepekaan terhadap perubahan dan/atau perkembangan tentang hukum privat",
                "definition_english" => "Knowledge and ability to understand the regulations, legal principles, legal subjects (individual or legal entity), legal actions (leasing and borrowing agreements, etc.), subject to law, and legal sources relating to relationships between individuals or individuals with a company, association, or other entity, be it civil law or commercial law (trade), and the others related to the company's business, as well as sensitivity to changes and/or developments regarding to private law",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Criminal Law (Public) ",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman tentang peraturan, subjek hukum, asas-asas hukum, jenis-jenis hukuman (pokok & tambahan), apa saja yang dapat dihukum (tindak, perbuatan, peristiwa, ataupun delik), ketentuan umum, golongan kejahatan, golongan pelanggaran, dan tujuan hukum yang menyangkut kepentingan publik, hubungan antara negara sebagai pemerintah dan pribadi serta  pengaruh antara tindakan individu/perusahaan terhadap negara, baik itu hukum pidana, baik umum (KUHP) maupun khusus (tindak pidana korupsi & pencucian uang) ataupun lainnya yang berkaitan dengan bisnis perusahaan, serta kepekaan terhadap perubahan dan/atau perkembangan tentang hukum public",
                "definition_english" => "Knowledge and ability to understand the rules, legal subjects, legal principles, type of punishments (principal and additional), things that can be punished (action, behavior, event, or offense), general rules, type of crime, type of offense that related to public interest, relation between countries as a Government or individual, also the impact of personal/company action to country, be it criminal law, both general (KUHP) and specific (corruption & money laundering) or the others related to company business, as well as sensitivity to changes and/or public law development",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Business Law",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman tentang norma, kebijakan, dan perizinan terkait transformasi digital di dunia bisnis, acuan regulasi yang dapat melindungi aktivitas bisnis (penyelenggaraan sistem, informasi, transaksi  elektronik/digital, dll.) serta aspek-aspek hukum lainnya yang berhubungan dengan bisnis perusahaan di era ekonomi digital, serta kepekaan terhadap perubahan dan/atau perkembangan tentang hukum bisnis digital",
                "definition_english" => "Knowledge and ability to understand the norms, policies, and licensing related to digital transformation in business world, regulatory references that can protect business activities (system administration, information, electronic /digital transaction, etc.) and the other legal aspects regarding to company business in the digital economy era, as well as sensitivity to changes and/or public law development",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Cyber Law",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman tentang prinsip, ruang lingkup, kebijakan dan sanksi terkait aspek-aspek dan persoalan yang berhubungan dengan pemanfaatan teknologi informasi  dan dunia siber (e.g., perlindungan data konsumen/perusahaan, penyadapan/perekaman telekomunikasi, transaksi elektronik, cyber crimes, dll.)",
                "definition_english" => "Knowledge and ability to understand the principles, scopes, policies and penalties of aspects and problems related to the use of information technology and cyberspace (e.g., consumer protection/company data, telecommunication wiretapping/recording, electronic transaction, cyber crimes, etc.)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Intellectual Property Rights",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman tentang prinsip, ruang lingkup, kebijakan, sanksi, dan tata cara upaya perlindungan HaKI yang meliputi informasi kekayaan intelektual (business plans, research & development cycle, dll.), hak paten, hak cipta, desain industri, layout design of integrated circuit, trademark, dan rahasia dagang baik secara fisik ataupun digital",
                "definition_english" => "Knowledge and ability to understand the principle, scopes, policies, penalties and procedures of IPR protection including intellectual property information (business plans, research & development cycle, etc.), patent rights, copyrights, industrial design, layout designs of integrated circuit, trademark and trade secret, both physically or digitally",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Telecoms Law & Regulations",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman tentang perkembangan hukum, instruksi, aturan, regulasi, dan  aspek-aspek kepastian hukum terkait tata kelola penyebaran jaringan, pemberlakuan teknologi telekomunikasi baru, akses, interkoneksi, penomoran, alokasi & kapasitas jaringan (e.g., spektrum frekuensi radio, dll.)  dan infrastruktur internet yang diatur dalam UU Telekomunikasi No.36/1999 dan norma hukum lainnya",
                "definition_english" => "Knowledge and ability to understand the development of legal, instructions, rules, regulations, and legal certainty related to network deployment procedure, new telecommunication technology implementation, access, interconnection, numbering, allocation, and network capacity (e.g., radio frequency spectrum, etc.) and internet infrastructure that regulated by Indonesia Telecommunication Legislations Number 36/1999 and other law norm",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Communication Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait prinsip, konsep, proses pelaksanaan, serta ruang lingkup komunikasi, baik di internal maupun eksternal, yang meliputi public relations, penyusunan konten/materi komunikasi, jurnalistik, periklanan, pemasaran, hingga hubungan dengan media dan stakeholders (e.g., pemerintah, masyarakat, dll.) guna mendukung identity, image & branding",
                "definition_english" => "Knowledge and ability to understand the principles, concepts, implementation process, and communication scopes, both in internal or external, including public relations, drafting communication content/material, journalism, advertising, marketing, and relations with media and stakeholders (e.g., government, public, etc.) in order to support the identity, image and branding",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Audit Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman tentang tata cara pengecekan, pengawasan, dan pengukuran suatu sistem, produk, layanan, dan/atau aktivitas fungsional suatu unit yang bertujuan untuk mengidentifikasi serta mengatasi suatu risiko, memastikan kepatuhan prosedur dan kebijakan, serta merekomendasikan langkah peningkatan kualitas berkelanjutan",
                "definition_english" => "Knowledge and ability to understand the checking procedure, supervision, and measurement system, product, services, and/or functional activity of an unit in order to identify and handling risk, ensure the compliance procedure and policy, as well as provide recommendation for the sustainable of quality improvement",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Risk Management Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman tentang konsep, prinsip, tipe-tipe risiko & mitigasinya serta proses manajemen risiko yang meliputi perencanaan, identifikasi, analisis, implementasi risk response, monitoring dan kontrol terhadap jenis risiko tersebut",
                "definition_english" => "Knowledge and ability to understand the concepts, principles, the type of risk as well as the mitigation, and risk management process including planning, identification, analysis, risk response implementation, monitoring and risk control",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Compliance Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman tentang konsep dasar kepatuhan yang meliputi kode etik, anti korupsi, kebijakan persaingan usaha, keamanan informasi, perlindungan data dan pencegahan fraud/kecurangan",
                "definition_english" => "Knowledge and ability to understand the compliance basic concept including etic code of Ethics, anti-corruption, business competition policy, information security, data protection and fraud prevention",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Physical Asset Management Fundamentals ",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terkait lifecycle, fungsi, sistem, dan prinsip-prinsip pengelolaan aset fisik perusahaan (e.g., properti/gedung, prasarana, alat kantor, dll.), termasuk tata cara perancangan, pemilihan, pemeliharaan, hingga pengembangan kapasitas asset (Property, Plant, and Equipment (PP&E))",
                "definition_english" => "Knowledge and ability to understand the lifecycles, functions, systems, and principles of managing the company's physical assets (e.g., property/building, infrastructure, office equipment, etc.), including procedures for designing, selecting, maintaining, and developing asset capacity (Property, Plant, and Equipment (PP&E))",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "HSE Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman secara menyeluruh terkait prinsip, prosedur, dan kebijakan keselamatan, kesehatan kerja, pengukuran kinerja HSE, serta pengelolaan lingkungan (ISO 14001, OHSAS 18001, SMK3, dll.), termasuk penanganan keadaan darurat/bahaya untuk mengurangi efek samping terhadap operasional bisnis perusahaan",
                "definition_english" => "Knowledge and ability to understand the whole principles, procedures, and policy of safety, healthy, HSE performance measurement, as well as environment management (ISO 14001, OHSAS 18001, SMK3, etc.), including managing emergency/dangerous situation in order to reduce the side effect to company business operation",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "CREATIVITY",
                "type" => "DIGITAL CULTURE",
                "definition" => "- Berpikir dan melakukan sesuatu dengan cara berbeda diluar ide-ide yang sudah ada - Menemukan gagasan baru yang lebih bermanfaat",
                "definition_english" => NULL,
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "AGILITY",
                "type" => "DIGITAL CULTURE",
                "definition" => "- Fleksibel - Kecepatan dalam merespon - Kecepatan dalam beradaptasi",
                "definition_english" => NULL,
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "EXPERIMENTAL",
                "type" => "DIGITAL CULTURE",
                "definition" => "- Mencoba sesuatu yang baru berdasarkan persoalan konsumen - Melakukan sesuatu dengan cara yang berbeda - Berani menghadapi kegagalan",
                "definition_english" => NULL,
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "OPEN MIND",
                "type" => "DIGITAL CULTURE",
                "definition" => "- Kesadaran dan sikap membuka diri terhadap ide/konsep baru - Aktif mencari informasi trend teknologi terbaru - Terbuka terhadap kritik",
                "definition_english" => NULL,
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "ANTICIPATORY",
                "type" => "DIGITAL CULTURE",
                "definition" => "- Mempunyai kepekaan terhadap resiko yang akan terjadi - Selalu mempunyai alternatif solusi - Menggunakan data dan pengalaman untuk memprediksi perubahan yang akan datang",
                "definition_english" => NULL,
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "INNOVATION",
                "type" => "DIGITAL CULTURE",
                "definition" => "- Menerapkan ide baru untuk menghasilkan nilai tambah bagi perusahaan - Mengimplementasikan karya baru (hasil penerapan ide baru) di waktu dan kesempatan yang tepat untuk menghasilkan keunggulan kompetitif baru",
                "definition_english" => NULL,
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "NETWORKING",
                "type" => "DIGITAL CULTURE",
                "definition" => "- Membangun hubungan dengan seluruh stakeholder - Menjaga hubungan untuk menciptakan nilai tambah bagi perusahaan",
                "definition_english" => NULL,
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Valuation",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami business & market data (e.g., capital structure, assets, entitas portofolio bisnis, dll.) serta melakukan penilaian/perhitungan nilai ekonomi dari suatu bisnis berdasarkan pada total asset yang dimiliki (asset-based approaches), probabilitas nilai pendapatan (earning value approaches), maupun perbandingan nilai di pasar (market value approaches) sebagai dasar pertimbangan/rekomendasi dalam pengambilan keputusan manajemen",
                "definition_english" => "Knowledge and ability to understand business & market data (e.g., capital structure, assets, business portofolio entity, etc.), as well as perform economic value assessment/measurement on any businesses, based on total assets owned (asset-based approaches), income value probability (earning value approaches), as well as comparison of values ??in the market (market value approach) as basis or consideration/recommendation in management decision making",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Digital Literacy",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam menggunakan teknologi informasi & komunikasi digital (e.g., internet platforms, social media, mobile devices, dll.) guna mengevaluasi, menyusun, dan mengkomunikasikan suatu informasi, dimana kompetensi ini membutuhkan sejumlah set kompetensi lain, meliputi critical thinking, online safety, cultural & social understanding, collaboration, finding information, communication skills, serta basic computer skill",
                "definition_english" => "Knowledge and ability to utilize information technologies & digital communications (e.g., internet platforms, social media, mobile devices, etc.), in order to evaluate, organize, and communicate an information, which this skill needs another set of competencies, such as critical thinking, online safety, cultural & social understanding, collaboration, information finding, communication skills, and basic computer skills",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Business Acumen",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan dalam memahami bisnis, yang ditunjukkan melalui kepekaan terhadap bisnis dan kemampuan melihat situasi atau masalah dari sudut pandang bisnis. Penguasaan kompetensi ini ditunjukkan dengan kemampuan untuk memahami implikasi bisnis dari suatu peluang dan keputusan, berdasarkan pada pemahaman akan sistem dan target pencapaian organisasi, serta menerapkan strategi bisnis yang terbukti  mampu meningkatkan kinerja organisasi. Kompetensi ini membutuhkan kemampuan dalam melihat keterkaitan antara suatu isu/permasalahan, proses, hasil dan dampaknya pada pencapaian target organisasi.Kompetensi ini memengaruhi ketajaman dan kecepatan seseorang dalam memahami serta menanggapi 'situasi bisnis'.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan kedalaman pemahaman individu terhadap bisnis perusahaan.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Personal Development",
                "type" => "ROLE COMPETENCY",
                "definition" => "Kemampuan mengembangkan diri terhadap pengetahuan dan keterampilan serta keahlian yang dibutuhkan, melalui proses  pembelajaran dan pengalaman dengan menerapkanya ke dalam pekerjaan untuk meningkatkan kapasitas dan kapabilitas diri. Individu dengan kompetensi ini selalu menilai tingkat perkembangan atau keahlian diri terutama terkait dengan pekerjaannya, sebagai bagian dari perencanaan karir berikutnya.Proses pengembangan diri yang dilakukan merupakan inisiasi/dorongan pribadi (self-driven), penekanannya adalah kemandirian dan tanggung jawab atas pengembangan diri.",
                "definition_english" => "Kompetensi ini berkembang seiring dengan komitmen dan upaya yang dilakukan untuk mengembangkan kemampuan/kapasitas diri.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Core Network Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan analisis kebutuhan serta merumuskan rencana alokasi jaringan telekomunikasi berkapasitas tinggi (core network & service platform), e.g., VoIP, DSL, TV, internet, e-mail, dll., menyusun desain/permodelan serta perumusan dokumen teknis terkait core network, melakukan pemasangan/connecting/instalasi, integrasi, konfigurasi, baik secara langsung (melalui command line, dll.) maupun menggunakan sistem konfigurasi tertentu, serta peluncuran jaringan telekomunikasi berkapasitas tinggi (core network), untuk mengakomodasi jaringan VoIP, DSL, TV, internet, e-mail, dll. yang stabil, akurat, tepat guna & sejalan dengan kebutuhan end-user, dan memaksimalkan alokasi kapasitas serta jangkauan core network (link loading, queuing delay, performance with ping, ping path, dll.), melakukan evaluasi kinerja jaringan, hingga memberikan rekomendasi terkait utilisasi/optimasi core network (e.g., IT backbone, signaling, switching & routing), guna mendukung kualitas operasional jaringan secara berkelanjutan",
                "definition_english" => "Knowledge and ability to conduct needs analysis as well as formulate high-functional telecommunications network allocation plan (core network), e.g., VoIP, DSL, TV, internet, e-mail, etc., in order to support sustainable network operation quality, develop core network design/model and technical document, in order to provide VoIP, DSL, TV, internet network design, etc. that meet corporate’s network quality standards, architecture & plan, install/connect, integrate, configure, either directly (via command line, etc.) or by using certain configuration systems, as well as launch high-functional telecommunications network (core network), to provide network for VoIP, DSL, TV, internet, e-mail, etc. that is stable, accurate, appropriate & in line with end-user needs, optimize capacity allocation and coverage of core network (link loading, queuing delay, performance with ping, ping path, etc.), as well as evaluate network performance & provide recommendations related to core network (e.g., IT backbone, signaling, switching & routing) utilization/optimization G100",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Radio Access Network Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan analisis kebutuhan serta merumuskan rencana alokasi radio & mobile network, e.g., GSM, UMTS, LTE, 5G frekuensi, spektrum, pola antena, amplitudo, timeslot allocation, scrambling code planning, dll., menyusun desain/permodelan serta perumusan dokumen teknis terkait radio access network, melakukan pemasangan/connecting/instalasi, integrasi, konfigurasi, baik secara langsung (melalui command line, dll.) maupun menggunakan sistem konfigurasi tertentu, serta peluncuran radio access network untuk mengakomodasi jaringan GSM, UMTS, LTE, dll. yang stabil, akurat, tepat guna & sejalan dengan kebutuhan end-user dan memaksimalkan alokasi kapasitas serta jangkauan radio access network berdasarkan perkiraan awal traffic (dalam Erlang) maupun analisis cell profile (dalam bps), melakukan evaluasi kinerja jaringan, hingga memberikan rekomendasi terkait utilisasi/optimasi radio access network (Signal Interference Ratio), guna mendukung kualitas operasional jaringan secara berkelanjutan, ",
                "definition_english" => "Knowledge and ability to conduct needs analysis as well as formulate radio & mobile network allocation plan, e.g., GSM, UMTS, LTE, frequency,spectrum, antenna pattern, amplitude, timeslot allocation, scrambling code planning, etc, in order to support sustainable network operation quality, develop radio access network design/model and technical document, in order to to provide GSM, UMTS, LTE network design, etc. that meet corporate’s network quality standards, architecture & plan, nstall/connect, integrate, configure, either directly (via command line, etc.) or by using certain configuration systems, as well as launch radio access network, to provide network for GSM, UMTS, LTE, etc. that is stable, accurate, appropriate & in line with end-user needs, optimize capacity allocation and coverage of radio access network based on initial traffic estimation (in Erlang) and cell profile analysis (in bps), evaluate network performance as well as provide recommendations related to radio access network (Signal Interference Ratio) utilization/optimization",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Transport Network Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan analisis kebutuhan serta merumuskan rencana alokasi transport network, e.g., OSI layer, TCP/IP & protokol dasar routing, menyusun desain/permodelan serta perumusan dokumen teknis terkait transport network, guna menyediakan desain jaringan OSI layer, TCP/IP, dll. yang berkualitas & selaras dengan arsitektur & rencana network perusahaan, pemasangan/connecting/instalasi, integrasi, konfigurasi, baik secara langsung (melalui command line, dll.) maupun menggunakan sistem konfigurasi tertentu, serta peluncuran transport network untuk mengakomodasi jaringan OSI layer, TCP/IP, dll. yang stabil, akurat, tepat guna & sejalan dengan kebutuhan end-user, dan memaksimalkan alokasi kapasitas serta jangkauan transport network, melakukan evaluasi kinerja jaringan, hingga memberikan rekomendasi terkait utilisasi/optimasi transport network, guna mendukung kualitas operasional jaringan secara berkelanjutan",
                "definition_english" => "Knowledge and ability to conduct needs analysis, as well as formulate transport network allocation plan, e.g., OSI layer, TCP/IP & routing basic protocols, in order to support sustainable network operation quality, develop transport network design/model and technical document, in order to provide OSI layer, TCP/IP network design, etc. that meet corporate’s network quality standards, architecture & plan, install/connect, integrate, configure, either directly (via command line, etc.) or by using certain configuration systems, as well as launch transport network, in order to provide network for OSI layer, TCP/IP, etc. that is stable, accurate, appropriate & in line with end-user needs, optimize capacity allocation and coverage of transport network, evaluate network performance, as well as provide recommendations related to transport network utilization/optimization.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Datacomm",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami prinsip-prinsip terkait konfigurasi jaringan datacomm, merumuskan standar, melaksanakan instalasi, hingga menghubungkan/mengkoneksikan jaringan datacomm, termasuk melakukan verifikasi serta optimasi ke site (melalui WAN)",
                "definition_english" => "Knowledge and ability to understand the principles of Datacomm network configuration, develop standardization, installing and connecting Datacomm network, including site verification and optimization (through WAN)",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "WAN SDN",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam memahami, menentukan, hingga melakukan pengaturan jaringan yang lebih “smart” dan terpusat ,  berhubungan dengan semua teknologi SD-WAN yang lebih efektif dan efisien untuk berhubungan dengan cloud network",
                "definition_english" => "Knowledge and ability to understand, determine and set up more 'smart' and centralized network, related to all SD-WAN technology",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Service Platform Management",
                "type" => "TECHNICAL SKILL",
                "definition" => "Pengetahuan dan kemampuan dalam melakukan analisis kebutuhan serta merumuskan rencana alokasi service platform, menyusun desain/permodelan serta perumusan dokumen teknis terkait service platforms, pemasangan/connecting/instalasi, integrasi, konfigurasi, baik secara langsung (melalui command line, dll.) maupun menggunakan sistem konfigurasi tertentu untuk service platform, memaksimalkan alokasi kapasitas service platforms (link loading, queuing delay, performance with ping, ping path, dll.), melakukan evaluasi kinerja jaringan, hingga memberikan rekomendasi terkait utilisasi/optimasi service platforms guna mendukung kualitas operasional jaringan secara berkelanjutan",
                "definition_english" => "Knowledge and ability to conduct need analysis as well as formulate service platform allocation plan, esign/model and technical document of service platform, installation/connecting, integration, configuration, either directly (via command line, etc) or by using certain configuration system for service platform, optimize service platform capacity allocation (link loading, queuing delay, performance with ping, ping path, etc), evaluate network performance and provide recommendation related to service platform.",
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "ICT Network Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman tentang konsep fundamental, sistem, protokol, hingga komponen/elemen network (core, radio, transport, serta komponen/elemen lainnya) dan IT yang terkait dengan pengelolaan network (Software Define Network, Service platform, dll) yang dibutuhkan di perusahaan",
                "definition_english" => NULL,
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Agility",
                "type" => "TELKOMSEL DIGILIFE",
                "definition" => "- Fleksibel - Kecepatan dalam merespon - Kecepatan dalam beradaptasi",
                "definition_english" => NULL,
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Customer Centric",
                "type" => "TELKOMSEL DIGILIFE",
                "definition" => "Mengutamakan kebutuhan pelanggan dan memberikan solusi terbaik",
                "definition_english" => NULL,
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Innovation",
                "type" => "TELKOMSEL DIGILIFE",
                "definition" => "- Menerapkan ide baru untuk menghasilkan nilai tambah bagi perusahaan - Mengimplementasikan karya baru (hasil penerapan ide baru) di waktu dan kesempatan yang tepat untuk menghasilkan keunggulan kompetitif baru",
                "definition_english" => NULL,
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Open Mindset",
                "type" => "TELKOMSEL DIGILIFE",
                "definition" => "- Kesadaran dan sikap membuka diri terhadap ide/konsep baru - Aktif mencari informasi trend teknologi terbaru - Terbuka terhadap kritik",
                "definition_english" => NULL,
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Networking",
                "type" => "TELKOMSEL DIGILIFE",
                "definition" => "- Membangun hubungan dengan semua stakeholder - Menjaga hubungan untuk menciptakan nilai tambah bagi perusahaan",
                "definition_english" => NULL,
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Cloud Computing Fundamentals",
                "type" => "KNOWLEDGE",
                "definition" => "Pengetahuan dan pemahaman terhadap konsep dasar, arsitektur, fitur, model, layanan, infrastruktur, serta tata cara mengimplementasikan cloud secara tepat, sesuai dengan kebutuhan bisnis perusahaan",
                "definition_english" => NULL,
                "status" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
        ];

        Competency::insert($competencies); // Eloquent approach
    }
}
