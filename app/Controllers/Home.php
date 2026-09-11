<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function nacional(): string
    {
        return view('nacional');
    }

    public function produtos(): string
    {
        return view('produtos');
    }

}
