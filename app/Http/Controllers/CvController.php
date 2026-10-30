<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cv;

class CvController extends Controller
{
    // Menampilkan seluruh data CV
    public function index()
    {
        $cvs = Cv::all();

        return view('cv.index', compact('cvs'));
    }

    // Menampilkan form tambah CV
    public function create()
    {
        return view('cv.create');
    }

    // Menyimpan data CV
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
        ]);

        Cv::create($request->all());

        return redirect()->route('cv.index')
            ->with('success', 'Data CV berhasil ditambahkan!');
    }

    // Menampilkan detail CV
    public function show($id)
    {
        $cv = Cv::findOrFail($id);

        return view('cv.show', compact('cv'));
    }

    // Menampilkan form edit CV
    public function edit($id)
    {
        $cv = Cv::findOrFail($id);

        return view('cv.edit', compact('cv'));
    }

    // Memperbarui data CV
    public function update(Request $request, $id)
    {
        $cv = Cv::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
        ]);

        $cv->update($request->all());

        return redirect()->route('cv.index')
            ->with('success', 'Data CV berhasil diperbarui!');
    }

    // Menghapus data CV
    public function destroy($id)
    {
        $cv = Cv::findOrFail($id);
        $cv->delete();

        return redirect()->route('cv.index')
            ->with('success', 'Data CV berhasil dihapus!');
    }
}
