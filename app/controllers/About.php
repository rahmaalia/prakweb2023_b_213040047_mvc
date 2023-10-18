<?php 

class About{
    public function index($nama = 'rahma', $pekerjaan = 'mahasiswa')
    {
        echo "HALO SAYA $nama, saya adalah $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }

}

?>