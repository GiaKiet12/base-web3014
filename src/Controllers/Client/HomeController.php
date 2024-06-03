<?php 

namespace  Tuankiet\Web3014\Controllers\Client;

use  Tuankiet\Web3014\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'DucTV44';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}