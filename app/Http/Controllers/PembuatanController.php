<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembuatanController extends Controller
{
    public function index()
    {
        return view('pembuatan');
    }
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'no_kk' => 'required|string|max:20',
            'nik' => 'required|string|max:16',
            'birth_date' => 'required|date',
            'birth_place' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'kel' => 'required|string|max:255',
            'rt' => 'required|numeric|max:999',
            'rw' => 'required|numeric|max:999',
            'kecamatan' => 'required|string|max:255',
            'status' => 'required|string',
            'gender' => 'required|string',
            'agama' => 'required|string',
            'golongan_darah' => 'required|string',
            'kewarganegaraan' => 'required|string',
        ]);

        // Simpan data ke database (misalkan ke tabel 'penduduk')
        // Disini bisa menggunakan model Penduduk (misalnya model yang sudah Anda buat)

        // Penduduk::create($request->all());

        // Redirect atau beri pesan sukses
        return redirect()->route('pembuatan-ktp')->with('success', 'Data E-KTP berhasil disimpan!');
    }
}
