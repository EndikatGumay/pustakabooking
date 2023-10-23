<?php   
class contoh1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
    }

    public function kata()
    {
    echo "<h1>kata2 hari ini</h1>";   
    }
    public function penjumlahan($n1, $n2)
    {
        $this->load->model('latihan');
        $hasil = $this->latihan->jumlah($n1, $n2);
        echo "<h1>Hasil Penjumlahan dari</h1>". $n1 ." + ". $n2 ." = "
        .$hasil;
    }
    public function jmlh($n1, $n2)
    {
        $this->load->model('latihan');
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->latihan->jumlah($n1, $n2);

        $this->load->view('view', $data);
    }
}
?>