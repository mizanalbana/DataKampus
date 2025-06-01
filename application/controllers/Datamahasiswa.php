<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datamahasiswa extends CI_Controller {

    public function index()
    {

    }

    public function data() {

        echo "Mahasiswa 1 bernama " . $this->uri->segment(3) . "<br>";
        echo "Mahasiswa 2 bernama " . $this->uri->segment(4) . "<br>";
        echo "Mahasiswa 3 bernama " . $this->uri->segment(5) . "<br>";
        echo "Mahasiswa 4 bernama " . $this->uri->segment(6) . "<br>";

    }
}