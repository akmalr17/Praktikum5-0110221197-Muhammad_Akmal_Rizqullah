<?php

class dispenser{
    public $volume;
    public $hargaSegelas;
    public $volumeGelas;
    public $namaMinuman;
    public const PHI = 3.14;
    public $jarijari;
    public $tinggi;

    public function __construct($jari, $tinggi){
        $this->jarijari = $jari;
        $this->tinggi = $tinggi;
        echo "<br/>Jari-Jari : " . $jari . " cm";
        echo "<br/>Tinggi : " . $tinggi . " cm";
    }

    public function volwadah(){
        return self::PHI * $this->jarijari * $this->jarijari * $this -> tinggi;
    }
}

class harga extends dispenser{

    public function __construct($hargaSegelas){
        $this->hargaSegelas = $hargaSegelas;
        echo"<br>";
        echo "<br/> Diketahui : ";
        echo "<br/>Harga satu gelas : " . $hargaSegelas;
    }
    public function harga(){
        return $this -> hargaSegelas * 23 ;
    }
}

    echo "<br/>  PHI : " . dispenser::PHI;
    $volwadah = new dispenser(32, 64);
    $harga = new harga(500);
    echo "<br/> Volume Wadah : " . $volwadah -> volwadah() . " cm3";
    echo "<br/> Harga 23 Gelas : " . $harga -> harga();

?>