<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StockBalance;
use Illuminate\Support\Str;

class StockBalanceSeeder extends Seeder
{
    public function run(): void
    {
        $names = [
            'Budi', 'Andi', 'Sinta', 'Rizky', 'Dewi', 'Rian', 'Tono', 'Lisa', 'Agus', 'Fitri',
            'Hendra', 'Lina', 'Yudi', 'Sari', 'Rina', 'Bayu', 'Eka', 'Wulan', 'Arif', 'Maya',
        ];

        for ($i = 0; $i < 50; $i++) {
            // Format: [2 huruf][2 angka][2 huruf], huruf uppercase
            $type = strtoupper(Str::random(2)) . rand(10, 99) . strtoupper(Str::random(2));

            // Format: [3 angka][1 huruf]
            $no_lot = rand(100, 999) . strtoupper(Str::random(1));

            StockBalance::create([
                'type' => $type,
                'no_lot' => $no_lot,
                'material_name' => 'Material ' . ($i + 1),
                'quantity' => rand(1, 500),
                'description' => 'Deskripsi item ' . ($i + 1),
                'item_number' => 'ITEM-' . rand(1000, 9999),
                'search_name' => 'SearchName' . ($i + 1),
                'balance' => rand(0, 1000),
                'category' => collect(['pending', 'over-material'])->random(),
                'status' => collect(['ok', 'ng'])->random(),
                'pic' => collect($names)->random(),
                'leader_confirmation' => collect($names)->random(),
                'created_by' => rand(1, 5),
                'updated_by' => rand(1, 5),
            ]);
        }
    }
}
