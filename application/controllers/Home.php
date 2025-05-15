<?php
class Home extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home Page',
            'active' => 'home', // Tambahkan ini
            'content' => 'home'
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar'); // jika kamu pakai navbar terpisah
        $this->load->view('home');             // ← pastikan ada isinya
        $this->load->view('templates/footer');
    }
}
