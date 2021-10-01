<?php

class Mahsiswa_model{
    private $mhs = [
        [
            "nama" => "Raditya",
            "nrp" => "193040075",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Gilang",
            "nrp" => "193040076",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Wicaksono",
            "nrp" => "193040077",
            "jurusan" => "Teknik Informatika"
        ]
    ];
    
    public function getAllMahasiswa()
    {
        return $this->mhs;
    }
}