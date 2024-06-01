<?php

namespace Hp\BaseWeb\Controllers\Client;

use Hp\BaseWeb\Commons\Controller;
use Hp\BaseWeb\Commons\Helper;
use Hp\BaseWeb\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = new User();
        // Helper::debug($user);
        $name = "bao";

        $this->rendViewClient('home', [
            'name' => $name
        ]);
    }
}
