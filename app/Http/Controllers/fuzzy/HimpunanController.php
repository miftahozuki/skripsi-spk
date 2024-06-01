<?php

namespace App\Http\Controllers\fuzzy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HimpunanController extends Controller
{
    public function index() {
        return view('fuzzy.data-himpunan');
    }
}
