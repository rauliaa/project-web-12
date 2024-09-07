<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep; // Gunakan nama model yang sesuai

class ResepController extends Controller
{
    public function index()
    {
        $reseps = Resep::all(); // Mengambil semua data dari tabel `resep`
        return view('reseps.index', compact('reseps')); // Sesuaikan nama view
    }

    public function create()
    {
        return view('reseps.create'); // Sesuaikan nama view
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
        ]);

        Resep::create($request->all()); // Simpan data resep

        return redirect()->route('reseps.index') // Sesuaikan dengan nama route
                         ->with('success', 'Resep berhasil dibuat.');
    }

    public function show($id)
    {
        $resep = Resep::find($id); // Temukan resep berdasarkan ID
        return view('reseps.show', compact('resep')); // Sesuaikan nama view
    }

    public function edit($id)
    {
        $resep = Resep::find($id); // Temukan resep berdasarkan ID
        return view('reseps.edit', compact('resep')); // Sesuaikan nama view
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
        ]);

        $resep = Resep::find($id); // Temukan resep berdasarkan ID
        $resep->update($request->all()); // Perbarui data resep

        return redirect()->route('reseps.index') // Sesuaikan dengan nama route
                         ->with('success', 'Resep berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Resep::destroy($id); // Hapus resep berdasarkan ID

        return redirect()->route('reseps.index') // Sesuaikan dengan nama route
                         ->with('success', 'Resep berhasil dihapus.');
    }
}
