<?php

namespace App\Http\Controllers;

use App\Models\data_user_guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DataUserGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(data_user_guru $data_user_guru)
    {
        $data = [
            'data_user_guru' => $data_user_guru->all()
        ];
        return view('dashboard-admin.guru.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard-admin.guru.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, data_user_guru $data_user_guru)
    {

        $data = $request->validate(
            [
                'id_akun'    => ['required'],
                'nama'    => ['required'],
                'jabatan'    => ['required'],
                'foto_guru'    => ['required'],
            ]
        );

        if ($request->hasFile('foto_guru') && $request->file('foto_guru')->isValid()) {
            $foto_file = $request->file('foto_guru');
            $foto_nama = md5($foto_file->getClientOriginalName() . time()) . '.' . $foto_file->getClientOriginalExtension();
            $foto_file->move(public_path('foto'), $foto_nama);
            $data['foto_guru'] = $foto_nama;
        }

        if($data) {
            return redirect('dashboard-admin/guru')->with('success', 'Data Guru baru berhasil ditambah');
        } else {
            return back()->with('error', 'Data Guru gagal ditambahkan');
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
            'data_user_guru' =>  data_user_guru::where('id_data_user_guru', $id)->first()
        ];
        return view('dashboard-bendahara.data_user_guru.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, data_user_guru $data_user_guru)
    {
        $data = $request->validate(
            [
                'id_akun'    => ['required'],
                'nama'    => ['required'],
                'jabatan'    => ['required'],
                'foto_guru'    => ['required'],
            ]
        );

        $id_guru = $request->input('id_guru');
        if ($id_guru !== null) {
            $dataUpdate = $data_user_guru->where('id_guru', $id_guru)->update($data);

            if ($dataUpdate) {
                return redirect('dashboard-admin/guru')->with('success', 'Data Guru berhasil diupdate');
            } else {
                return back()->with('error', 'Data Guru gagal diupdate');
            }
        }
        else {
            return back()->with('error', 'Terjadi kesalahan dalam update data.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(data_user_guru $data_user_guru, Request $request)
    {
        $id_guru = $request->input('id_guru');

        $aksi = $data_user_guru->where('id_guru', $id_guru)->delete();

        if ($aksi) {
            $pesan = [
                'success' => true,
                'pesan'   => 'Data Guru berhasil dihapus'
            ];
        } else {
            $pesan = [
                'success' => false,
                'pesan'   => 'Data Guru gagal dihapus'
            ];
        }

        return response()->json($pesan);
    }
} 