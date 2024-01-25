<?php

namespace App\Http\Controllers;

use App\Models\data_user_siswa;
use Illuminate\Http\Request;


class DataUserSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(data_user_siswa $data_user_siswa)
    {
        $data = [
            'data_user_siswa' => $data_user_siswa->all()
        ];
        return view('dashboard-admin.siswa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard-admin.siswa.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, data_user_siswa $data_user_siswa)
    {

        $data = $request->validate(
            [
                'id_akun'    => ['required'],
                'id_kelas'    => ['required'],
                'nama'    => ['required'],
                'instagram'    => ['required'],
                'linkedin'    => ['required'],
                'kesan'    => ['required'],
                'pesan'    => ['required'],
                'foto_siswa'    => ['required'],
            ]
        );

        if ($request->hasFile('foto_siswa') && $request->file('foto_siswa')->isValid()) {
            $foto_file = $request->file('foto_siswa');
            $foto_nama = md5($foto_file->getClientOriginalName() . time()) . '.' . $foto_file->getClientOriginalExtension();
            $foto_file->move(public_path('foto'), $foto_nama);
            $data['foto_siswa'] = $foto_nama;
        }

        if($data) {
            return redirect('dashboard-admin/siswa')->with('success', 'Data Siswa baru berhasil ditambah');
        } else {
            return back()->with('error', 'Data Siswa gagal ditambahkan');
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
        $data = [
            'data_user_siswa' =>  data_user_siswa::where('id_data_user_siswa', $id)->first()
        ];
        return view('dashboard-bendahara.siswa.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, data_user_siswa $data_user_siswa)
    {
        $data = $request->validate(
            [
                'id_akun'    => ['required'],
                'id_kelas'    => ['required'],
                'nama'    => ['required'],
                'instagram'    => ['required'],
                'linkedin'    => ['required'],
                'kesan'    => ['required'],
                'pesan'    => ['required'],
                'foto_siswa'    => ['required'],
            ]
        );

        $id_siswa = $request->input('id_siswa');
        if ($id_siswa !== null) {
            $dataUpdate = $data_user_siswa->where('id_siswa', $id_siswa)->update($data);

            if ($dataUpdate) {
                return redirect('dashboard-admin/siswa')->with('success', 'Data Siswa berhasil diupdate');
            } else {
                return back()->with('error', 'Data Siswa gagal diupdate');
            }
        }
        else {
            return back()->with('error', 'Terjadi kesalahan dalam update data.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(data_user_siswa $data_user_siswa, Request $request)
    {
        $id_siswa = $request->input('id_siswa');

        $aksi = $data_user_siswa->where('id_siswa', $id_siswa)->delete();

        if ($aksi) {
            $pesan = [
                'success' => true,
                'pesan'   => 'Data Siswa berhasil dihapus'
            ];
        } else {
            $pesan = [
                'success' => false,
                'pesan'   => 'Data Siswa gagal dihapus'
            ];
        }

        return response()->json($pesan);
    }
}