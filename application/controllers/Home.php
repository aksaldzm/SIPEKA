<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard';

        $this->load->view('View File', $data);
    }
}

/* End of file Home.php */
