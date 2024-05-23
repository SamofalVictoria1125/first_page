<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\Account;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function submit(AccountRequest $req){


        $account = new Account();
        $account->name = $req->input('name');
        $account->email = $req->input('email');
        $account->password = $req->input('password');

        $account->save();

        return redirect()->route('account1')->with('success', 'Регистрация прошла успешно');
    }
}
