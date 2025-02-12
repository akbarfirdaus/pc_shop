<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.kategori.index', [
            'kategoris' => Kategori::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255|unique:kategoris,name',
            ]);

            Kategori::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
            ]);

            return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan!');
        } catch (\Throwable $th) {
            //throw $th;
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255|unique:kategoris,name,' . $kategori->id,
            ]);

            $kategori->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
            ]);

            return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui!');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Kategori::whereId($id)->first();
        try {
            Kategori::destroy($id);
            return redirect()->route('kategori.index')->with('success', "Kategori dengan nama $kategori->name berhasil dihapus!");
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('kategori.index')->with('failed', "Kategori $kategori->name tidak bisa dihapus karena sedang digunakan!");
        }
    }
}
