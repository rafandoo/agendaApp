<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConeController extends Controller
{
    private function geratriz($r, $h) {
        return sqrt(pow($r, 2) + pow($h, 2));
    }

    private function areaLateral($r, $g) {
        return (3.14 * $r * $g);
    }

    private function areaCirculo($r) {
        return (3.14 * pow($r, 2));
    }

    private function litrosTinta($at) {
        return $at * 3.45;
    }

    private function latasTinta($lt) {
        return ceil($lt / 18);
    }

    private function valorTinta($la, $tt) {
        if ($tt == 1) {
            return $la * 238.90;
        } else if ($tt == 2) {
            return $la * 467.98;
        } else {
            return $la * 758.34;
        }
    }

    public function cone($r, $h, $tt) {
        $g = $this->geratriz($r, $h);
        $at = $this->areaLateral($r, $g) + $this->areaCirculo($r);
        echo "<h1>Pintura do Cone</h1> <br>";
        echo "Raio: " . $r . " <br>";
        echo "Altura: " . $h . " <br>";
        echo "Nivel: " . $tt . " <br><hr>";
        echo "Geratriz: " . $g . " <br><hr>";
        echo "Área do fundo: " . $this->areaCirculo($r) . " <br>";
        echo "Área lateral: " . $this->areaLateral($r, $g) . " <br>";
        echo "Área total: " . $at . " <br><hr>";
        echo "Litros: " . $this->litrosTinta($at) . " <br>";
        echo "Latas: " . $this->latasTinta($this->litrosTinta($at)) . " <br><hr>";
        echo "Valor: " . $this->valorTinta($this->latasTinta($this->litrosTinta($at)), $tt) . " <br>";   
    }

    public function index($r = 6, $h = 8, $tt = 1) {
        ConeController::cone($r, $h, $tt);
    }
}
