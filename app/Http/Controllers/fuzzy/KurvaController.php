<?php

namespace App\Http\Controllers\fuzzy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Himpunan;

class KurvaController extends Controller
{
    protected $a;
    protected $b;
    protected $c;
    protected $d;

    public function __construct($id)
    {
        $himpunan = Himpunan::find($id);
        $this->a = $himpunan->nilai_a;
        $this->b = $himpunan->nilai_b;
        $this->c = $himpunan->nilai_c;
    }

    public function Segitiga($x) {

        $a = $this->a;
        $b = $this->b;
        $c = $this->c;

        if ($x <= $a || $x >= $c) {
            $hasil = 0;

        } else if($a <= $x || $x <= $b) {
            $hasil = ($x - $a) / ($b - $a);

        } else if ($b <= $x || $x <= $c) {
            $hasil = ($c -$x) / ($c - $b);
        }

        return $hasil;
    }
}
