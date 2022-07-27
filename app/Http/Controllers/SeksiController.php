<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\direktorat;
use App\Models\departemen;
use App\Models\jenis_surat;
use App\Models\Seksi;
use App\Models\level_jabatan;
use App\Models\pegawai;
use App\Models\kategori;
use App\Models\Devisi;

class SeksiController extends Controller
{
    public function dashboard(){
        $pegawai = pegawai::count();
        $departemen = departemen::count();
        $dir = direktorat::count();
        $devisi = Devisi::count();
        $seksi = Seksi::count();

        return view('content.AkunSeksi.dashboard', ['pegawai' => $pegawai,'departemen' => $departemen, 'dir' => $dir, 'seksi' => $seksi, 'devisi' => $devisi]);
    }


    //Kategori
    public function kategori(){
        $kategori = kategori::all();
        
        return view('content.AkunSeksi.kategori_surat.kategori_surat', ['kategori' => $kategori]);
    }


    //Jenis Surat
    public function jenis_surat(){
        $jenis = jenis_surat::all();

        return view('content.AkunSeksi.jenis_surat.jenis_surat', ['jenis' => $jenis]);
    }


    //Direktorat
    public function direktorat(){
        $dir = direktorat::all();

        return view('content.AkunSeksi.direktorat.direktorat', ['dir' => $dir]);
    }


    //Devisi
    public function devisi(){
        $devisi = Devisi::all();

        return view('content.AkunSeksi.devisi.devisi', ['devisi' => $devisi]);
    }

    //Departemen
    public function departemen(){
        $departemen = departemen::all();

        return view('content.AkunSeksi.departemen.departemen', ['departemen' => $departemen]);
    }

    //Seksi
    public function seksi(){
        $seksi = Seksi::all();

        return view('content.AkunSeksi.seksi.seksi', ['seksi' => $seksi]);
    }

    //Level Jabatan
    public function level_jabatan(){
        $level = level_jabatan::all();
        
        return view('content.AkunSeksi.level_jabatan.level', ['level' => $level]);
    }

    public function pegawai(){
        $pegawai = pegawai::all();

        return view('content.AkunSeksi.pegawai.pegawai', ['pegawai' => $pegawai]);
    }

    //surat masuk
    public function surat_masuk()
    {
        
        return view('content.AkunSeksi.surat.surat_masuk.surat_masuk');
    }

    public function form_masuk()
    {
        $jenis = jenis_surat::all();
        return view('content.AkunSeksi.surat.surat_masuk.form_masuk', ['jenis' => $jenis]);
    }


    //surat keluar
    public function surat_keluar()
    {
        
        return view('content.AkunSeksi.surat.surat_keluar.surat_keluar');
    }
    
    public function form_keluar()
    {
        
        return view('content.AkunSeksi.surat.surat_keluar.form_keluar');
    }

    //Disposisi
    public function disposisi()
    {
        
        return view('content.AkunSeksi.surat.disposisi.disposisi');
    }

    //Memo
    public function memo()
    {
        
        return view('content.AkunSeksi.surat.memo.memo');
    }

    public function form_memo()
    {
        
        return view('content.AkunSeksi.surat.memo.form_memo');
    }
}
