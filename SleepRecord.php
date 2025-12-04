<?php

class SleepRecord {
    public $tanggal;
    public $jamTidur;
    public $jamBangun;
    public $durasi;
    public $kualitas;

    public function __construct($tanggal, $jamTidur, $jamBangun) {
        $this->tanggal   = $tanggal;
        $this->jamTidur  = $jamTidur;
        $this->jamBangun = $jamBangun;
        $this->durasi    = $this->hitungDurasi();
        $this->kualitas  = $this->tentukanKualitas();
    }

    private function hitungDurasi() {
        $mulai = strtotime($this->jamTidur);
        $akhir = strtotime($this->jamBangun);

        // kalau bangun lewat tengah malam
        if ($akhir <= $mulai) {
            $akhir += 24 * 3600;
        }

        $durasiJam = ($akhir - $mulai) / 3600;
        return round($durasiJam, 1);
    }

    private function tentukanKualitas() {
        if ($this->durasi < 5) {
            return "Kurang";
        } elseif ($this->durasi < 7) {
            return "Cukup";
        } else {
            return "Baik";
        }
    }
}
