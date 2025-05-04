<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PageController extends Controller
{
    public function getDatas() {
        return [
            'layanans' => [
                ['nama' => 'Vermak', 'harga' => 10000, 'gambar' => '/layanan/vermak.jpeg'],
                ['nama' => 'Pasang Badge', 'harga' => 5000, 'gambar' => '/layanan/pasangBadge.jpeg'],
                ['nama' => 'Tambal lubang/sobek', 'harga' => 5000, 'gambar' => '/layanan/tambalLubang.jpeg'],
                ['nama' => 'Bikin Baju', 'harga' => 100000, 'gambar' => '/layanan/bikinBaju.jpeg'],
            ],
            'katalogs' => [
                ['nama' => 'Jarum Tangan Uk.12 REGAL', 'harga' => 5000, 'stok' => 702, 'gambar' => '/katalog/jarumTangan.jpeg'],
                ['nama' => 'Jarum Mesin Jahit Uk.14 SINGER', 'harga' => 10000, 'stok' => 322, 'gambar' => '/katalog/jarumMesin.png'],
                ['nama' => 'Gunting Jahit', 'harga' => 10000, 'stok' => 12, 'gambar' => '/katalog/guntingJahit.jpeg'],
                ['nama' => 'WHITE Benang Jahit YAMALON 5000yard', 'harga' => 10000, 'stok' => 3298, 'gambar' => '/katalog/whiteYamalon.jpeg'],
                ['nama' => 'BLACK Benang Jahit ULTRA 120yard 1 Kotak', 'harga' => 11800, 'stok' => 312, 'gambar' => '/katalog/blackUltra.jpeg'],
                ['nama' => 'WHITE Velcro Kasar+Halus lebar 1inchi', 'harga' => 2000, 'stok' => 432, 'gambar' => '/katalog/velcroWhite.jpeg'],
                ['nama' => 'BLACK Velcro Kasar+Halus lebar 1inchi', 'harga' => 2000, 'stok' => 992, 'gambar' => '/katalog/velcroBlack.jpeg'],
            ],
        ];
    }
    public function getDataPesanan() {
        return [
            'orders' => [
                ['nama' => 'BLACK Benang Jahit ULTRA 120yard 1 Kotak', 'qty' => 2, 'pemesan' => 'Hikam15', 'tenggat' => '10-05-2025'],
                ['nama' => 'WHITE Velcro Kasar+Halus lebar 1inchi', 'qty' => 10, 'pemesan' => 'BrillianMaulana', 'tenggat' => '15-05-2025'],
                ['nama' => 'Jarum Tangan Uk.12 REGAL', 'qty' => 12, 'pemesan' => 'AlyaPutri15', 'tenggat' => '20-05-2025'],
                ['nama' => 'Gunting Jahit', 'qty' => 1, 'pemesan' => 'BismillahSamsul', 'tenggat' => '15-06-2025'],
                ['nama' => 'WHITE Benang Jahit YAMALON 5000yard', 'qty' => 2, 'pemesan' => 'Kansa_Halda', 'tenggat' => '15-06-2025'],
                ['nama' => 'BLACK Velcro Kasar+Halus lebar 1inchi', 'qty' => 20, 'pemesan' => '山田　あんな', 'tenggat' => '15-05-2025'],
            ],
        ];
    }
    public function getDataSummary() {
        return [
            'pengunjung' => 32,
            'saleDay' => 40000,
            'saleMonth' => 332000,
        ];
    }

    public function showHomepage(Request $request) {
        $username = $request->query('username');
        $datas = $this->getDatas();
        return view('homepage', compact('username'), ['datas' => $datas]);
    }

    public function showLogin() {
        return view('login');
    }

    public function showProfile(Request $request) {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    public function showDashboard(Request $request) {
        $username = $request->query('username');
        $pesanans = $this->getDataPesanan();
        $summary = $this->getDataSummary();
        return view('dashboard', compact('username'), ['pesanans' => $pesanans, 'summaries' => $summary]);
    }

    public function showPengelolaan(Request $request) {
        $username = $request->query('username');
        $datas = $this->getDatas();
        return view('pengelolaan', compact('username'), ['datas' => $datas]);
    }

    public function showLayanan(Request $request) {
        $username = $request->query('username');
        $datas = $this->getDatas();
        return view('layanan', compact('username'), ['datas' => $datas]);
    }

    public function login(Request $request) {
        $valid = $request->validate([
            'username' => 'min:4|max:20|required',
            'password' => 'min:4|max:20|required',
        ]);

        if ($valid) {
            $username = $request->input('username');
            return redirect()->route('homepage', ['username' => $username]);
        }
    }
}
