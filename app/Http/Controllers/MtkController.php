<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MtkController extends Controller
{
    //
    public function addv3($a, $b){
        $hasil = $a + $b;
        return $hasil;
    }

    public function multiply($a, $b){
        $hasil = $a * $b;
        $data = [
            'bil_a' => $a,
            'bil_b' => $b,
            'bil_hasil' => $hasil
        ];
        return view('multiply', $data);
    }
}
