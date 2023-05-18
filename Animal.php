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

// Membuat objek dari class Animal
$hewan = new Animal("Komodo", "Hewan Reptil Kuno");
echo $hewan->getInfo() . '<br>';

