<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PiramideController extends Controller
{
    private function areaLateral($h, $ab) {
        return sqrt(pow($h, 2) + pow($ab, 2));
    }

    private function areaTriangulo($g, $ab) {
        return (($g * ($ab * 2)) / 2);
    }

    private function areaBase($ab) {
        return pow(($ab * 2), 2);
    }

    private function areaTotal($g, $ab) {
        return ($this->areaTriangulo($g, $ab) * 4) + $this->areaBase($ab);
    }

    private function volumePiramide($ab, $h) {
        return ($this->areaBase($ab) * $h) / 3;
    }

    private function litrosTinta($at) {
        return $at / 4.76;
    }

    private function latasTinta($lt) {
        return ceil($lt / 18);
    }

    private function valorTinta($la, $tt) {
        if ($tt == 1) {
            return $la * 127.90;
        } else if ($tt == 2) {
            return $la * 258.98;
        } else {
            return $la * 344.34;
        }
    }

    public function piramide($ab, $h, $tt) {
        $g = $this->areaLateral($h, $ab);
        $lt = $this->litrosTinta($this->areaTotal($g, $ab));
        $la = $this->latasTinta($lt);
        echo "<h1>Pintura da pirâmide</h1> <br>";
        echo "ab: " . $ab . " <br>";
        echo "h: " . $h . " <br>";
        echo "al: " . $g . " <br>";
        echo "Área Triangulo: " . $this->areaTriangulo($g, $ab) . " <br>";
        echo "Área Base: " . $this->areaBase($ab) . " <br>";
        echo "Área Total: " . $this->areaTotal($g, $ab) . " <br>";
        echo "Tipo de Tinta: " . $tt . " <br>";
        echo "Litros de Tinta: " . $lt . " <br>";
        echo "Latas de Tinta: " . $la . " <br>";
        echo "Valor da Tinta: " . $this->valorTinta($la, $tt) . " <br>";
        echo "Volume: " . $this->volumePiramide($ab, $h) . " <br>";
    }

    public function index($ab = 13.89, $h = 41.87, $tt = 3) {
        PiramideController::piramide($ab, $h, $tt);
    }
}
