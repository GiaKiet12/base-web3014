<?php 

namespace tuankiet\src\Controllers\Client;

use tuankiet\src\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'DucTV44';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}