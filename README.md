# Lab Sheet Pertemuan 10: UML Class Diagram dan Relasi Antarkelas

## 1. Narasi Kebutuhan Sistem (Sistem Manajemen Akademik & Kelas)
Sistem informasi akademik sekolah digunakan untuk mengelola data pengguna sekolah, mata pelajaran, penjadwalan kelas, serta pencatatan kehadiran dan penilaian siswa secara terstruktur. Setiap siswa memiliki nomor induk siswa, nama lengkap, dan terdaftar pada satu atau beberapa kelas pembelajaran yang dikelola oleh wali kelas maupun guru mata pelajaran. Guru dan staf tata usaha merupakan bagian dari sivitas akademik sekolah yang memiliki hak akses dan tanggung jawab berbeda dalam operasional harian.

Ketika sebuah kelas dibentuk, daftar siswa dapat ditambahkan ke dalam kelas tersebut tanpa menghilangkan eksistensi data siswa apabila siswa pindah kelas atau lulus. Selain itu, sistem perlu menyediakan mekanisme pelaporan dan notifikasi akademik yang dapat dikirimkan melalui berbagai kanal pengiriman. Dengan pemodelan berorientasi objek yang jelas, pengembangan modul aplikasi dapat dilakukan secara modular, mudah dipelihara, dan sesuai dengan kebutuhan nyata di lingkungan sekolah.

## 2. Noun Analysis (Identifikasi Kata Benda / Calon Class & Atribut)
- **Pengguna / Civitas** (`nama`, `email`) -> kandidat *superclass* / *interface*
- **Siswa** (`nis`, `nama`, `kelas`) -> *class* entitas
- **Guru** (`nip`, `nama`, `mataPelajaran`) -> *class* turunan / peran pengguna
- **Kelas** (`kodeKelas`, `namaKelas`, `daftarSiswa`) -> *class* wadah (relasi **Agregasi** dengan `Siswa`)
- **MataPelajaran** (`kodeMapel`, `namaMapel`) -> *class* domain
- **Jadwal** (`hari`, `jamMulai`, `jamSelesai`) -> *class* relasi/detail (relasi **Komposisi** dengan `Kelas`)
- **Notifikasi / PengirimPesan** -> *interface* (*Realisasi* oleh `EmailNotifikasi`, `WaNotifikasi`)

## 3. Rancangan Class Diagram (Minimal 5 Class)
- **Generalisasi (`extends`):** `Pengguna` <|-- `Siswa`, `Guru`
- **Realisasi (`implements`):** `PengirimNotifikasi` <|.. `EmailNotifikasi`, `WaNotifikasi`
- **Agregasi (`o---`):** `Kelas "1" o--- "0..*" Siswa`
- **Komposisi (`*---`):** `Kelas "1" *--- "1..*" Jadwal`
