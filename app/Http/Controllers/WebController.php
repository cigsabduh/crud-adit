<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Barang;

class WebController extends Controller
{
    public function tampilan()
    { 
        $data['barang'] = Barang::get();
        
        return view('dashboard', $data);
    }

    public function welcome()
    { 
        $data['barang'] = Program::get();

        return view('welcome', $data);
    }
    // make create insert data validate to database

    public function create()
    {
        return view('form-input');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_barang' => 'required',
            'nama_barang' => 'required',
            'stok' => 'required',
        ]);

        $barang = Barang::addBarang($request->id_barang, $request->nama_barang, $request->stok);

        if ($barang == 'success') {
            return redirect('/dashboard')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect('/dashboard')->with('error', 'Data gagal ditambahkan');
        }


    }


    public function edit($id)
    {
        // dd($id);
        $data['barang'] = Barang::find($id);
          

        return view('edit', $data);
    }

    public function update(Request $request)
    {
        $update = Barang::updateByJumlah($request->id_barang, $request->barang, $request->stok, 9);

        if($update) return redirect('/dashboard');
        else return 'gagal update data';
    }


    // make method destroy data from databases
    public function destroy($id)
    {
        $delete = Barang::destroy($id);

        if($delete) return redirect('/dashboard');
        else return 'gagal delete data';
    }
}