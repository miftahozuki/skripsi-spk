<?php

namespace App\Http\Controllers\fuzzy;

use App\Http\Controllers\Controller;
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
        $this->d = $himpunan->nilai_d;
    }

    public function Segitiga($x) {

        $a = $this->a;
        $b = $this->b;
        $c = $this->c;

        if ($x <= $a || $x >= $c) {
            return 0;
        } 
        
        if($a <= $x && $x <= $b) {
            return ($x - $a) / ($b - $a);

        } 
        
        if ($b <= $x && $x <= $c) {
            return  ($c -$x) / ($c - $b);
        }

        return null;
    }

    public function LinearNaik($x) {

        $a = $this->a;
        $b = $this->b;

        if ($x <= $a) {
            return 0;
        } 

        if($a <= $x && $x <= $b) {
            return ($x-$a) / ($b-$a);
        }

        if($x >= $b) {
            return 1;
        }

        return null;
    }

    public function LinearTurun($x) {

        $a = $this->a;
        $b = $this->b;

        if ($x <= $a) {
            return 1;
        } 

        if($a <= $x && $x <= $b) {
            return ($b-$x) / ($b-$a);
        }

        if($x >= $b) {
            return 0;
        }

        return null;
    }

    public function BahuKanan($x) {
        $a = $this->a;
        $b = $this->b;

        if ($x <= $a) {
            return 1;
        }

        if ($a <= $x && $x <= $b) {
            return ($b-$x) / ($b-$a);
        }

        if ($x >= $b) {
            return 0;
        }

        return null;
    }

    public function BahuKiri($x) {

        $a = $this->a;
        $b = $this->b;

        if ($x <= $a) {
            return 0;
        } 

        if($a <= $x && $x <= $b) {
            return ($x-$a) / ($b-$a);
        }

        if($x >= $b) {
            return 1;
        }

        return null;
    }

    public function Trapesium($x) {
        $a = $this->a;
        $b = $this->b;
        $c = $this->c;
        $d = $this->d;

        if ($x <= $a || $x >= $d) {
            return 0;
        }

        if ($a < $x && $x <= $b) {
            return ($x-$a) / ($b-$a);
        }

        if ($b<= $x && $x <= $c) {
            return 1;
        }

        if ($c < $x && $x <= $d) {
            return ($d-$x) / ($d-$c);
        }

        return null;

    }
}
