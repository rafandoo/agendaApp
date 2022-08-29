<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabController extends Controller
{
    public function tab($id = 2, $ini = 0, $fim = 10) {
        TabController::exec($id, $ini, $fim);
    }

    public function exec($id = 2, $ini = 0, $fim = 10) {
        for($i = $ini; $i <= $fim; $i++) {
            echo "</br>";
            echo $id . " x " . $i . " = " . $id * $i;
        }
    }
}
