<Nama : M.Dhafa Jawadil Ubaid  -->
<NIM : 21091397058 -->
<Prodi : D4 Manajemen Informatika(2021B) -->

<?php

class Orang
{
    protected $nama, $umur;

    public function __construct($nama, $umur)
    {
        $this->nama = $nama;
        $this->umur = $umur;
    }
}

class Dosen extends Orang
{
    private $nip;

    public function __construct($nama, $umur, $nip)
    {
        parent::__construct($nama, $umur);
        $this->nip = $nip;
    }
    public function info(){
        return 'Nama : ' . $this->nama . ' | Umur : ' . $this->umur . ' | NIP : ' . $this->nip;
    }

}

$dosen1 = new Dosen('Dosen Alex', 50, 419121);
$dosen2 = new Dosen('Dosen Arip', 45, 412341);
$dosen3 = new Dosen('Dosen Tino', 40, 418214);

echo "Praktikum 4 Soal No 1";
echo '<br>';
echo '<br>';
echo $dosen1->info() ;
echo '<br>';
echo $dosen2->info();
echo '<br>';
echo $dosen3->info();
?>