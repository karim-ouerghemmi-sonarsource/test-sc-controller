<?php

class Start extends CI_Controller
{
    protected $cache_file;
    protected $user_password;

    public function index()
    {
        $this->user_password = "ex#amp¤el2020";
        $this->cache_file = isset($_GET['user_file']) ? $_GET['user_file'] : '';

        $file = $this->cache_file;
        if (file_exists($file)) unlink($file);

        if ($_POST['redirect_url'])
        {
            redirect($_POST['redirect_url']);
        }

        if ($_GET['redirect_url'])
        {
            redirect($_GET['redirect_url']);

        }
    }
}