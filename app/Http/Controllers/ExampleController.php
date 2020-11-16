<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function hello() {
        return view('pages.xinchao');
    }

    public function goodbye() {
        return 'Tạm biệt';
    }
}
