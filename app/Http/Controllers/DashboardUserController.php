<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.user.index', [
            'users' => User::latest()->get(),
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
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'username' => ['required', 'unique:users'],
                'password' => 'required|max:255',
            ]);

            $validatedData['password'] = Hash::make($validatedData['password']);

            User::create($validatedData);

            return redirect('/dashboard/user')->with('success', 'User baru berhasil dibuat!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect('/dashboard/user')->with('failed', $e->getMessage());
        } catch (\Exception $e) {
            return redirect('/dashboard/user')->with('failed', $e->getMessage());
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
    public function update(Request $request, User $user)
    {
        try {
            $rules = [
                'name' => 'required|max:255',
                'username' => 'required'
            ];

            if ($request->username != $user->username) {
                $rules['username'] = ['required', 'unique:users'];
            }

            $validatedData = $request->validate($rules);

            User::where('id', $user->id)->update($validatedData);


            return redirect('/dashboard/user')->with('success', 'User berhasil diperbarui!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect('/dashboard/user')->with('failed', $e->getMessage());
        } catch (\Exception $e) {
            return redirect('/dashboard/user')->with('failed', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::whereId($id)->first();
        try {
            User::destroy($id);
            return redirect('/dashboard/user')->with('success', "User dengan NIM $user->name berhasil dihapus!");
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/dashboard/user')->with('failed', "User $user->name tidak bisa dihapus karena sedang digunakan!");
        }
    }

    public function resetPasswordAdmin(Request $request)
    {
        $rules = [
            'password' => 'required|max:255',
        ];

        if ($request->password == $request->password2) {
            $validatedData = $request->validate($rules);
            $validatedData['password'] = Hash::make($validatedData['password']);

            User::where('id', $request->id)->update($validatedData);
        } else {
            return back()->with('failed', 'Konfirmasi password tidak sesuai');
        }

        return redirect('/dashboard/user')->with('success', 'Password berhasil direset!');
    }
}
