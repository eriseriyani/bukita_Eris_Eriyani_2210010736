<?php
class About extends Controller
{
    public function __construct()
    {
        if ($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
            header('location: ' . base_url . '/login');
            exit;
        }
    }
    public function index()
    {
        $data['title'] = 'Halaman About';
        $data['nama'] = 'Eris Eriyani';
        $data['alamat'] = 'Jln. Katunun RT 03 RW 03 Pelaihari';
        $data['no_hp'] = '085251191868';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
