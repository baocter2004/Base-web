<?php

namespace Hp\BaseWeb\Controllers\Admin;

use Hp\BaseWeb\Commons\Controller;
use Hp\BaseWeb\Commons\Helper;
use Hp\BaseWeb\Models\User;

class UserController extends Controller
{
    private User $user;
    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        try {
            // phân trang user
            [$users, $totalPage] = $this->user->paginate($_GET['page'] ?? 1);

            $this->rendViewAdmin('users.index', [
                'users' => $users,
                'totalPage' => $totalPage
            ]);
            // Helper::debug($users);
        } catch (\Throwable $th) {
            Helper::debug($th->getMessage());
        }
    }

    public function create()
    {
    //    $this->user->insert([
    //     'name' => 'Chu Văn Thái Bảo',
    //     'email' => 'baocvt@gmail.com',
    //     'image' => '',
    //     'password' => password_hash('123456',PASSWORD_DEFAULT),
    //     'kich_hoat' => 1,
    //     'vai_tro' => 1
    //    ]);
    }

    public function store()
    {
        echo __CLASS__ . "@" . __FUNCTION__;
    }


    public function show($id)
    {
        echo __CLASS__ . "@" . __FUNCTION__ . $id;
    }

    public function edit($id)
    {
        echo __CLASS__ . "@" . __FUNCTION__ . $id;
    }

    public function update($id)
    {
        echo __CLASS__ . "@" . __FUNCTION__ . $id;
    }

    public function delete($id)
    {
        echo __CLASS__ . "@" . __FUNCTION__ . $id;
    }
}
