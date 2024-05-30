<?php

class Lingkaran {
    // property
    private $jari;
    const PHI = 3.14;
    //method
    function __construct($r){
        $this->jari =$r;
    }

    function getLuas(){
        return self::PHI * $this->jari * $this->jari;
    }

    function getKeliling(){
        return 2 * self::PHI * $this->jari;
    }
    
}

// instance object
$lingkaran1 = new Lingkaran(10);
echo 'Luas Lingkaran = ' . $lingkaran1->getLuas();
echo '<br>Keliling Lingkaran = ' . $lingkaran1->getKeliling();
