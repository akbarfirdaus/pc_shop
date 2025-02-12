<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Projek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.projek.index', [
            'projeks' => Projek::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projek.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'mitra' => 'required|string|max:255',
                'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $data = $request->only('name', 'mitra');

            if ($request->hasFile('thumbnail')) {
                // Menyimpan file gambar ke dalam folder projek tanpa membuat subfolder
                $data['thumbnail'] = $request->file('thumbnail')->store('projek', 'public');
            }

            // Produk akan otomatis menghasilkan slug berdasarkan name
            Projek::create($data);

            return redirect()->route('projek.index')->with('success', 'Projek berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->route('projek.index')->with('failed', $e->getMessage());
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
    public function edit(Projek $projek)
    {
        return view('dashboard.projek.edit', [
            'projek' => $projek
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projek $projek)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'mitra' => 'required|string|max:255',
                'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $data = $request->only('name', 'mitra', );

            if ($request->hasFile('thumbnail')) {
                // Hapus gambar lama jika ada
                if ($projek->thumbnail) {
                    Storage::delete('public/' . $projek->thumbnail);
                }

                // Menyimpan file gambar ke dalam folder projek tanpa membuat subfolder
                $data['thumbnail'] = $request->file('thumbnail')->store('projek', 'public');
            }

            // Slug akan diupdate otomatis berdasarkan perubahan pada nama
            $projek->update($data);

            return redirect()->route('projek.index')->with('success', 'Projek berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->route('projek.index')->with('failed', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $projek = Projek::whereId($id)->first();
        try {
            if ($projek->thumnbail) {
                Storage::delete($projek->thumnbail);
            }
            Projek::destroy($id);
            return redirect('/dashboard/projek')->with('success', "Projek dengan nama $projek->name berhasil dihapus!");
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/dashboard/projek')->with('failed', "Projek $projek->name tidak bisa dihapus karena sedang digunakan!");
        }
    }
}
