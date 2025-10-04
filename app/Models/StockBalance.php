<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockBalance extends Model
{
    use HasFactory;

    protected $table = 'stock_balance';

    protected $fillable = [
        'type',
        'no_lot',
        'material_name',
        'quantity',
        'description',
        'item_number',
        'search_name',
        'balance',
        'category',
        'status',
        'pic',
        'leader_confirmation',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'quantity' => 'integer',
        'balance' => 'integer',
    ];

    /**
     * Relasi opsional ke user pembuat.
     * (Bisa diaktifkan jika tabel users tersedia)
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Relasi opsional ke user pengubah terakhir.
     */
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
