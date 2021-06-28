<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Pesanan;
use App\User;
use App\PesananDetail;
use Auth;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function upload()
    {
        return view('tambahBarang');
    }
    public function proses_upload(Request $request)
    {        
        // validasi file
        $this->validate($request, [
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $gambar = $request->gambar;
        // tujuan folder
        $folder_simpan = 'assets';
        $gambar->move($folder_simpan, $gambar->getClientOriginalName());
        
        // tambah barang 
        $barang = new Barang();
        $barang->nama_barang = $request->nama_barang;
        $barang->gambar = $gambar->getClientOriginalName();
        $barang->harga = $request->harga;
        $barang->stok = $request->jumlah;
        $barang->keterangan = $request->keterangan;
        $barang->berat = $request->berat;
        $barang->save();

        alert()->success('Tambah Barang', 'Berhasil!');
        return redirect('tambahBarang');
    }
    

    public function laporan()
    {
    	$pesanans = Pesanan::paginate();
        return view('laporan', compact('pesanans'));
    }
    public function user()
    {
    	$users = User::paginate();
        return view('user', compact('users'));
    }
    public function admin()
    {
        $barangs = Barang::paginate();
        return view('admin', compact('barangs'));
    }
    public function hapus($id)
    {
        DB::table('pesanans')
        ->where('id', $id)->delete();
        return redirect('admin-laporan');
    }
    public function delete($id)
    {
        DB::table('barangs')
        ->where('id', $id)->delete();
        return redirect('admin');
    }
    public function destroy($id)
    {
        DB::table('users')
        ->where('id', $id)->delete();
        return redirect('admin-user');
    }

}
