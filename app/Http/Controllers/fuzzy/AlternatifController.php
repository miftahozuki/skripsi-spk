<?php

namespace App\Http\Controllers\fuzzy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index() {
        return view('fuzzy.data-alternatif');
    }
}
