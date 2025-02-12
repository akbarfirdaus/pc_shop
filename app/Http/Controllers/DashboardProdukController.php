<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.produk.index', [
            'produks' => Produk::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.produk.create', [
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'harga' => 'required|numeric|min:0',
                'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'deskripsi' => 'nullable|string',
                'id_kategori' => 'required|exists:kategoris,id',
            ]);

            $data = $request->only('name', 'harga', 'deskripsi', 'id_kategori');

            if ($request->hasFile('thumbnail')) {
                // Menyimpan file gambar ke dalam folder produk tanpa membuat subfolder
                $data['thumbnail'] = $request->file('thumbnail')->store('produk', 'public');
            }

            // Produk akan otomatis menghasilkan slug berdasarkan name
            Produk::create($data);

            return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->route('produk.index')->with('failed', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        return view('dashboard.produk.edit', [
            'kategoris' => Kategori::all(),
            'produk' => $produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'harga' => 'required|numeric|min:0',
                'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'deskripsi' => 'nullable|string',
                'id_kategori' => 'required|exists:kategoris,id',
            ]);

            $data = $request->only('name', 'harga', 'deskripsi', 'id_kategori');

            if ($request->hasFile('thumbnail')) {
                // Hapus gambar lama jika ada
                if ($produk->thumbnail) {
                    Storage::delete('public/' . $produk->thumbnail);
                }

                // Menyimpan file gambar ke dalam folder produk tanpa membuat subfolder
                $data['thumbnail'] = $request->file('thumbnail')->store('produk', 'public');
            }

            // Slug akan diupdate otomatis berdasarkan perubahan pada nama
            $produk->update($data);

            return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->route('produk.index')->with('failed', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::whereId($id)->first();
        try {
            if ($produk->thumnbail) {
                Storage::delete($produk->thumnbail);
            }
            Produk::destroy($id);
            return redirect('/dashboard/produk')->with('success', "Produk dengan nama $produk->name berhasil dihapus!");
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/dashboard/produk')->with('failed', "Produk $produk->name tidak bisa dihapus karena sedang digunakan!");
        }
    }
}
