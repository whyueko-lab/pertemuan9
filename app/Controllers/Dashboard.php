<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        echo "Welcome to the dashboard, " . $session->get('user_name') . "!";
        echo "<br>";
        echo "<a href='" . base_url('logout') . "'>Logout</a>";
    }
}