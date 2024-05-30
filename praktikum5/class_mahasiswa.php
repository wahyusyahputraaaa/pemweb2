<?php

class mahasiswa {
    public $ipk;
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;

    function __construct($_nim,$_nama){
        $this->nim = $_nim;
        $this->nama = $_nama;
    }
    
    function predikat_ipk(){
        if($this->ipk < 2.0){
            return 'Cukup';
        } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0){
            return 'Baik';
        } elseif ($this->ipk >= 3.0 && $this->ipk < 3.75){
            return 'Memuaskan';
        } elseif ($this->ipk >= 3.75 && $this->ipk < 4.0){
            return 'Cumlaude';
        } else{
            return 'Nilai Diluar Jangkauan';
        }
    
    
    
    
    }



}

$Mahasiswa1 = new Mahasiswa(110223287,'Wahyu Ganteng');
$Mahasiswa1->ipk = 3.95;
$Mahasiswa1->prodi = 'Teknik Informatika';
$Mahasiswa1->angkatan = 2023; 
