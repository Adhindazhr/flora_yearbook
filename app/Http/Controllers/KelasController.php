<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class daftar_prestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(kelas $kelas)
    {   
        $data = [
            'kelas'=> $kelas::all()
        ];
        // if($role == 'siswa') {
        //     return view('dashboard-admin.kelas.index', $data);
        // }
        // elseif($role == 'admin') {
            return view('dashboard-admin.kelas.index', $data);
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(kelas $kelas)
    {
    
        $data = [
            'kelas'=> $kelas::all()
        ];

        return view('dashboard-admin.kelas.tambah', $data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, kelas $kelas)
    {
        $data = $request->validate(
            [
                'nama_kelas'    => ['required'],
                'nama_walas'    => ['required'],
            ]
        );
        if ($data) {
            $kelas->create($data);
            return redirect('dashboard-admin/kelas')->with('success', 'Data Kelas baru berhasil ditambah');
        } else {
            return back()->with('error', 'Data Kelas gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, kelas $kelas)
    {
        //
        $data = [
            'kelas'=> $kelas::all()
        ];
        return view('dashboard-admin.kelas.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, kelas $kelas)
    {
        $data = [
            'kelas'=> $kelas::all()
        ];
        return view('dashboard-admin.kelas.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kelas $kelas)
    {
        $id_kelas = $request->input('id_kelas');

        $data = $request->validate(
            [
                'nama_kelas'=> ['sometimes'],
                'nama_walas'    => ['sometimes'],
            ]
        );

            $dataUpdate = $kelas->where('id_kelas', $id_kelas)->update($data);

            if ($dataUpdate) {
                return redirect('dashboard-admin/kelas')->with('success', 'Data Kelas berhasil diupdate');
            }

            return back()->with('error', 'Data Kelas gagal diupdate');
        }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kelas $kelas, Request $request)
    {
        $id_kelas = $request->input('id_kelas');

        $aksi = $kelas->where('id_kelas', $id_kelas)->delete();

        if ($aksi) {
            $pesan = [
                'success' => true,
                'pesan'   => 'Data Kelas berhasil dihapus'
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