<?php

declare(strict_types=1);

require_once __DIR__ . '/Siswa.php';

class Kelas
{
    /** @var Siswa[] */
    private array $daftarSiswa = [];

    public function __construct(
        private string $nama,
    ) {
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function tambahSiswa(Siswa $s): void
    {
        $this->daftarSiswa[] = $s;
    }

    public function jumlahSiswa(): int
    {
        return count($this->daftarSiswa);
    }

    /**
     * @return string[]
     */
    public function daftarNama(): array
    {
        return array_map(
            static fn (Siswa $siswa): string => $siswa->getNama(),
            $this->daftarSiswa
        );
    }
}
