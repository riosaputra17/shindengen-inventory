<?php

namespace App\Http\Controllers;

use App\Models\StockBalance;
use Illuminate\Http\Request;

class StockBalanceController extends Controller
{
    /**
     * Tampilkan halaman Stock Balance.
     */
    public function index()
    {
        // Ambil data dari tabel stock_balance, urutkan terbaru dan tampilkan 25 per halaman
        $data = StockBalance::orderBy('created_at', 'desc')->paginate(25);

        // Kirim data ke view
        return view('pages.stock-balance', compact('data'));
    }

    /**
     * Tambahan jika nanti mau ekspor PDF.
     */
    public function exportPdf()
    {
        // Implementasi ekspor PDF bisa ditambahkan nanti
    }
}
