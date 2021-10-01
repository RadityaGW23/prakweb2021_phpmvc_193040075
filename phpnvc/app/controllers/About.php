<?php

class About {
    public function index($nama = "Mark", $pekerjaan = "CEO")
    {
        echo "Hallo nama saya $nama, dan saya seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}