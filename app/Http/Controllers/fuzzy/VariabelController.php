<?php

namespace App\Http\Controllers\fuzzy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VariabelController extends Controller
{
    public function index() {
        return view('fuzzy.data-variabel');
    }
}
