<?php

namespace App\Http\Controllers;

use App\Models\daftar_prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class daftar_prestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(daftar_prestasi $daftar_prestasi)
    {   
        $data = [
            'daftar_prestasi'=> $daftar_prestasi::all()
        ];
        // if($role == 'siswa') {
        //     return view('dashboard-admin.daftar_prestasi.index', $data);
        // }
        // elseif($role == 'admin') {
            return view('dashboard-admin.daftar-prestasi.index', $data);
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(daftar_prestasi $daftar_prestasi)
    {
    
        $data = [
            'daftar_prestasi'=> $daftar_prestasi::all()
        ];

        return view('dashboard-admin.daftar-prestasi.tambah', $data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, daftar_prestasi $daftar_prestasi)
    {
        $data = $request->validate(
            [
                'id_ekskul'    => ['required'],
                'nama_prestasi'    => ['required'],
            ]
        );
        
        if ($data) {
            $daftar_prestasi->create($data);
            return redirect('dashboard-admin/daftar-prestasi')->with('success', 'Data Daftar Prestasi baru berhasil ditambah');
        } else {
            return back()->with('error', 'Data Daftar Prestasi gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, daftar_prestasi $daftar_prestasi)
    {
        $data = [
            'daftar_prestasi'=> $daftar_prestasi::all()
        ];
        return view('dashboard-admin.daftar_prestasi.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, daftar_prestasi $daftar_prestasi)
    {
        $id_daftar_prestasi = $request->input('id_daftar_prestasi');

        $data = $request->validate(
            [
                'id_ekskul'=> ['sometimes'],
                'nama_prestasi'    => ['sometimes'],
            ]
        );

            $dataUpdate = $daftar_prestasi->where('id_daftar_prestasi', $id_daftar_prestasi)->update($data);

            if ($dataUpdate) {
                return redirect('dashboard-admin/daftar-prestasi')->with('success', 'Data Daftar Prestasi berhasil diupdate');
            }

            return back()->with('error', 'Data Daftar Prestasi gagal diupdate');
        }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(daftar_prestasi $daftar_prestasi, Request $request)
    {
        $id_daftar_prestasi = $request->input('id_daftar_prestasi');

        $aksi = $daftar_prestasi->where('id_daftar_prestasi', $id_daftar_prestasi)->delete();

        if ($aksi) {
            $pesan = [
                'success' => true,
                'pesan'   => 'Data daftar_prestasi berhasil dihapus'
            ];
        } else {
            $pesan = [
                'success' => false,
                'pesan'   => 'Data gagal dihapus'
            ];
        }

        return response()->json($pesan);
    }
}