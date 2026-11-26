<?php

declare(strict_types=1);

require_once __DIR__ . '/Siswa.php';
require_once __DIR__ . '/Kelas.php';

$kelas = new Kelas('X IPA 1');
$kelas->tambahSiswa(new Siswa('101', 'Andi'));
$kelas->tambahSiswa(new Siswa('102', 'Siti'));

echo "Kelas: {$kelas->getNama()} | Total: {$kelas->jumlahSiswa()} siswa\n";
print_r($kelas->daftarNama());
