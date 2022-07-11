<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';
    protected $primaryKey = 'id_barang';

    protected $fillable = [
        'nama_barang',
        'stok'
    ];

    public function scopeAddBarang($query, $id_barang, $nama_barang, $stok)
    {
        $status = $query->create([
            'id_barang'     => $id_barang,
            'nama_barang'   => $nama_barang,
            'stok'          => $stok
        ]);

        if($status) return 'success';
        else return 'gagal';
    }

    public function scopeUpdateByJumlah($query, $id_barang, $nama_barang, $stok, $jumlah)
    {
        if($stok > $jumlah) {
            $update = $query->where('id_barang', $id_barang)->update([
                'nama_barang'   => $nama_barang,
                'stok'          => $stok
            ]);

            if($update) return true;

            else return false;
        } else {
            return false;
        }
    }
}
