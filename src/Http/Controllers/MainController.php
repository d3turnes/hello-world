<?php

namespace D3turnes\HelloWorld\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $req) {
		return "Hola mundo!!!";
	}
}
