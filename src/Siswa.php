<?php

declare(strict_types=1);

class Siswa
{
    public function __construct(
        private string $nis,
        private string $nama,
    ) {
    }

    public function getNis(): string
    {
        return $this->nis;
    }

    public function getNama(): string
    {
        return $this->nama;
    }
}
