<?php

namespace App\Http\Livewire\Presensi;

use Livewire\Component;
use App\Models\Presensi;

class Lihat extends Component
{

    public Presensi $presensi;

    public function mount($id)
    {
        $this->presensi = Presensi::find($id);
    }

    public function render()
    {
        return view('livewire.presensi.lihat');
    }

    public function hari_cek($day)
    {
        if ($day == "Monday") {
            $hari = "Senin";
        } else if ($day == "Tuesday") {
            $hari = "Selasa";
        } else if ($day == "Wednesday") {
            $hari = "Rabu";
        } else if ($day == "Thursday") {
            $hari = "Kamis";
        } else if ($day == "Friday") {
            $hari = "Jumat";
        } else if ($day == "Saturday") {
            $hari = "Sabtu";
        } else if ($day == "Sunday") {
            $hari = "Minggu";
        }
        return $hari;
    }

    public function bln_cek($bln_cek)
    {
        if ($bulan == "January") {
            $bln_cek = "Januari";
        } else if ($bulan == "February") {
            $bln_cek = "Februari";
        } else if ($bulan == "March") {
            $bln_cek = "Maret";
        } else if ($bulan == "April") {
            $bln_cek = "April";
        } else if ($bulan == "May") {
            $bln_cek = "Mei";
        } else if ($bulan == "June") {
            $bln_cek = "Juni";
        } else if ($bulan == "July") {
            $bln_cek = "Juli";
        } else if ($bulan == "August") {
            $bln_cek = "Agustus";
        } else if ($bulan == "September") {
            $bln_cek = "September";
        } else if ($bulan == "October") {
            $bln_cek = "Oktober";
        } else if ($bulan == "November") {
            $bln_cek = "November";
        } else if ($bulan == "December") {
            $bln_cek = "Desember";
        }
        return $bulan;
    }
}
