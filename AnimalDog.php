<?php
class Animal {
    public $nama;
    public $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "Hewan ini bernama " . $this->nama . " dan termasuk dalam jenis " . $this->jenis . ".";
    }
}

class Anjing extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "Anjing");
    }

    public function getInfo() {
        return "Anjing Peliharaan ini bernama " . $this->nama . " dan Dia termasuk dalam jenis " . $this->jenis . ". Anjing adalah hewan yang setia dan loyal.";
    }
}

// Membuat objek dari class Animal
$hewan = new Animal("Komodo", "Hewan Reptil Kuno");
echo $hewan->getInfo() . '<br>';

// Membuat objek dari class Anjing
$anjing = new Anjing("Bob");
echo $anjing->getInfo();
