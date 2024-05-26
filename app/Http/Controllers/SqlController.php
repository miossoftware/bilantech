<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

session_start();

class SqlController extends Controller
{
    public function add(Request $request)
    {
        $password = $request->input('password');
        $option = [
            'cost' => 11,
        ];
        $hashed_password = password_hash($password, PASSWORD_BCRYPT, $option);
        $query = DB::table('users')->insert([
            'username' => $request->input('username'),
            'password' => $hashed_password,
            'phone' => $request->input('phone'),
            'name_surname' => $request->input('name_surname')
        ]);
        if ($query) {
            return 1;
        } else {
            return 2;
        }
    }

    public function authentication(Request $request)
    {
        $username = $request->input("username");
        $password = $request->input("password");

        $login = DB::table('users')
            ->where('username', $username)
            ->where('status', '1')
            ->where('user_key', '1')
            ->first();
        if (!empty($login)) {
            $hash_password = $login->password;
            if (password_verify($password, $hash_password)) {
                $id = $login->id;
                $_SESSION["username"] = $username;
                $_SESSION["name_surname"] = $login->name_surname;
                $_SESSION["user_id"] = $id;
                return view('index');
            } else {
                echo 3;
            }
        } else {
            echo 2;
        }
    }

    public function getAllUsers()
    {
        $users = User::all();
        $all_users = [];
        foreach ($users as $user) {
            $row = [
                'name_surname' => $user->name_surname,
                'username' => $user->username,
                'phone_number' => $user->phone,
                'islem' => "<button class='btn btn-warning btn-sm'><i class='fa fa-refresh'></i></button> <button class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>"
            ];
            array_push($all_users, $row);
        }
        if (!empty($all_users)) {
            echo json_encode($all_users);
        } else {
            echo 2;
        }
    }
}
