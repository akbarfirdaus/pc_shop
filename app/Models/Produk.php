<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'id_kategori', 'harga', 'deskripsi', 'thumbnail'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($produk) {
            $produk->slug = str::slug($produk->name);
        });

        static::updating(function ($produk) {
            $produk->slug = Str::slug($produk->name);
        });
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
