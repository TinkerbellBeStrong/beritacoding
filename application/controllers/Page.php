<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function index()
    {
        $data['meta'] = [
			'title' => 'BeritaCoding',
		];
        $this->load->view('home', $data);
    }
    public function about()
    {
        $data['meta'] = [
			'title' => 'BeritaCoding',
		];
        // fungsi untuk me-load view about.php
        $this->load->view('about', $data);
    }

    public function contact()
    {
        $data['meta'] = [
			'title' => 'BeritaCoding',
		];
        if ($this->input->method() === 'post') {
            print_r($this->input->post());
        }
        // fungsi untuk me-load view contact.php
        $this->load->view('contact', $data);
    }
}
