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

class EofficeController extends Controller
{
    public function dashboard(){
        $pegawai = pegawai::count();
        $departemen = departemen::count();
        $dir = direktorat::count();
        $devisi = Devisi::count();
        $seksi = Seksi::count();

        return view('content.dashboard', ['pegawai' => $pegawai,'departemen' => $departemen, 'dir' => $dir, 'seksi' => $seksi, 'devisi' => $devisi]);
    }



    //direktorat
    public function direktorat(){
        $dir = direktorat::all();

        return view('content.direktorat.direktorat', ['dir' => $dir]);
    }

    public function form_direktorat(){
        return view('content.direktorat.form_direktorat');
    }

    public function insert_direktorat(Request $request){
        $request -> validate([
            'kode_direktorat' => 'required',
            'nama_direktorat' => 'required'
        ]);
        
        
        direktorat::create([
            'kode_direktorat' => $request->kode_direktorat,
            'nama_direktorat' => $request->nama_direktorat
        ]);

        return redirect()->route('direktorat');
    }

    public function deletedirektorat($id)
    {
        $dir = direktorat::findOrFail($id);

        $dir->delete();
        return redirect()->route('direktorat');
    }

    public function editdirektorat($id)
    {
        $dir = direktorat::findOrFail($id);

        return view('content.direktorat.update_direktorat', ['dir' => $dir]);
    }

    public function updatdirektorat($id, Request $request)
    {
        $this->validate($request,[
            'kode_direktorat' => 'required',
            'nama_direktorat' => 'required'
        ]);
    
        $dir = direktorat::findOrFail($id);
        $dir->kode_direktorat = $request->kode_direktorat;
        $dir->nama_direktorat = $request->nama_direktorat;
        $dir->save();
        return redirect()->route('direktorat');
    }


    //devisi
    public function devisi(){
        $devisi = Devisi::all();

        return view('content.devisi.devisi', ['devisi' => $devisi]);
    }

    public function form_devisi(){
        $dir = direktorat::all();

        return view('content.devisi.form_devisi', ['dir' => $dir]);
    }

    public function insert_devisi(Request $request){
        $request -> validate([
            'direktorat_id' => 'required',
            'kode_devisi' => 'required',
            'nama_devisi' => 'required',
        ]);
        
        
        $devisi = Devisi::create([
            'direktorat_id' => $request->direktorat_id,
            'kode_devisi' => $request->kode_devisi,
            'nama_devisi' => $request->nama_devisi,
        ]);

        return redirect()->route('devisi');
    }

    public function deletedevisi($id)
    {
        $devisi = Devisi::findOrFail($id);

        $devisi->delete();
        return redirect()->route('devisi');
    }

    public function editdevisi($id)
    {
        $devisi = Devisi::find($id);
        $dir = direktorat::all();

        return view('content.devisi.update_devisi', ['devisi' => $devisi, 'dir' => $dir]);
    }

    public function updatedevisi($id, Request $request)
    {
        $this->validate($request,[
            'direktorat_id' => 'required',
            'kode_devisi' => 'required',
            'nama_devisi' => 'required',
        ]);
    
        $devisi = Devisi::find($id);
        $devisi->direktorat_id = $request->direktorat_id;
        $devisi->kode_devisi = $request->kode_devisi;
        $devisi->nama_devisi = $request->nama_devisi;
        $devisi->save();
        return redirect()->route('devisi');
    }


    //departemen
    public function departemen(){
        $departemen = departemen::all();

        return view('content.departemen.departemen', ['departemen' => $departemen]);
    }

    public function form_departemen(){
        $dir = direktorat::all();
        $devisi = Devisi::all();

        return view('content.departemen.form_departemen', ['dir' => $dir, 'devisi' => $devisi]);
    }

    public function insert_depar(Request $request){
        $request -> validate([
            'direktorat_id' => 'required',
            'devisi_id' => 'required',
            'kode_departemen' => 'required',
            'nama_departemen' => 'required',
        ]);
        
        
        $departemen = departemen::create([
            'direktorat_id' => $request->direktorat_id,
            'devisi_id' => $request->devisi_id,
            'kode_departemen' => $request->kode_departemen,
            'nama_departemen' => $request->nama_departemen,
        ]);

        return redirect()->route('departemen');
    }

    public function deletedepartemen($id)
    {
        $departemen = departemen::findOrFail($id);
        $dir = direktorat::all();
        $devisi = Devisi::all();

        $departemen->delete();
        return redirect()->route('departemen');
    }

    public function editdepartemen($id)
    {
        $departemen = departemen::find($id);
        $dir = direktorat::all();
        $devisi = Devisi::all();

        return view('content.departemen.update_departemen', ['departemen' => $departemen, 'dir' => $dir, 'devisi' => $devisi]);
    }
    
    public function updatedepartemen($id, Request $request)
    {
        $this->validate($request,[
            'direktorat_id' => 'required',
            'devisi_id' => 'required',
            'kode_departemen' => 'required',
            'nama_departemen' => 'required',
        ]);
    
        $departemen = departemen::find($id);
        $departemen->direktorat_id = $request->direktorat_id;
        $departemen->devisi_id = $request->devisi_id;
        $departemen->kode_departemen = $request->kode_departemen;
        $departemen->nama_departemen = $request->nama_departemen;
        $departemen->save();
        return redirect()->route('departemen');
    }


    //seksi
    public function seksi(){
        $seksi = Seksi::all();

        return view('content.seksi.seksi', ['seksi' => $seksi]);
    }

    public function form_seksi(){
        $dir = direktorat::all();
        $devisi = Devisi::all();
        $departemen = departemen::all();

        return view('content.seksi.form_seksi', ['dir' => $dir, 'devisi' => $devisi, 'departemen' => $departemen ]);
    }

    public function insert_seksi(Request $request){
        $request -> validate([
            'direktorat_id' => 'required',
            'devisi_id' => 'required',
            'departemen_id' => 'required',
            'kode_seksi' => 'required',
            'nama_seksi' => 'required',
        ]);
        
        
        $seksi = Seksi::create([
            'direktorat_id' => $request->direktorat_id,
            'devisi_id' => $request->devisi_id,
            'departemen_id' => $request->departemen_id,
            'kode_seksi' => $request->kode_seksi,
            'nama_seksi' => $request->nama_seksi,
        ]);

        return redirect()->route('seksi');
    }

    public function deleteseksi($id)
    {
        $seksi = Seksi::findOrFail($id);

        $seksi->delete();
        return redirect()->route('seksi');
    }

    public function editseksi($id)
    {
        $seksi = Seksi::find($id);
        $dir = direktorat::all();
        $devisi = Devisi::all();
        $departemen = departemen::all();

        return view('content.seksi.update_seksi', ['seksi' => $seksi, 'devisi' => $devisi, 'dir' => $dir, 'departemen' => $departemen]);
    }

    public function updateseksi($id, Request $request)
    {
        $this->validate($request,[
            'direktorat_id' => 'required',
            'devisi_id' => 'required',
            'departemen_id' => 'required',
            'kode_seksi' => 'required',
            'nama_seksi' => 'required',
        ]);
    
        $seksi = Seksi::find($id);
        $seksi->direktorat_id = $request->direktorat_id;
        $seksi->devisi_id = $request->devisi_id;
        $seksi->departemen_id = $request->departemen_id;
        $seksi->kode_seksi = $request->kode_seksi;
        $seksi->nama_seksi = $request->nama_seksi;
        $seksi->save();
        return redirect()->route('seksi');
    }



    //kategori
    public function kategori(){
        $kategori = kategori::all();
        
        return view('content.kategori_surat.kategori_surat', ['kategori' => $kategori]);
    }



    //Jenis Surat

    public function jenis_surat(){
        $jenis = jenis_surat::all();

        return view('content.jenis_surat.jenis_surat', ['jenis' => $jenis]);
    }

    public function form_jenissurat(){
        $kategori = kategori::all();

        return view('content.jenis_surat.form_jenissurat', ['kategori' => $kategori]);
    }

    public function insert_jenissurat(Request $request){
        $request -> validate([
            'kategori_id' => 'required',
            'nama_jenis' => 'required',
            'kode_jenis' => 'required',
        ]);
        
        
        jenis_surat::create([
            'kategori_id' => $request->kategori_id,
            'nama_jenis' => $request->nama_jenis,
            'kode_jenis' => $request->kode_jenis,
        ]);

        return redirect()->route('jenis');
    }

    public function deletejenis($id)
    {
        $jenis = jenis_surat::findOrFail($id);

        $jenis->delete();
        return redirect()->route('jenis');
    }

    public function editjenis($id)
    {
        $jenis = jenis_surat::find($id);
        $kategori = kategori::all();
        
        return view('content.jenis_surat.update_jenissurat', ['jenis' => $jenis, 'kategori' => $kategori]);
    }

    public function updatjenis($id, Request $request)
    {
        $this->validate($request,[
            'kategori_id' => 'required',
            'nama_jenis' => 'required',
            'kode_jenis' => 'required',
        ]);
    
        $jenis = jenis_surat::find($id);
        $jenis->kategori_id = $request->kategori_id;
        $jenis->nama_jenis = $request->nama_jenis;
        $jenis->kode_jenis = $request->nama_jenis;
        $jenis->save();
        return redirect()->route('jenis');
    }


    
    //jabatan
    public function jabatan(){
        $jabatan = jabatan::all();

        return view('content.jabatan.jabatan', ['jabatan' => $jabatan]);
    }


    public function form_jabatan(){
        $level = level_jabatan::all();
        $dir = direktorat::all()->pluck("nama_direktorat","id");
        $departemen = departemen::all();
        $jabatan = jabatan::all();

        return view('content.jabatan.form_jabatan', ['level' => $level, 'dir' => $dir, 'departemen' => $departemen, 'jabatan' => $jabatan]);
    }


    public function insert_jabatan(Request $request){
        $request -> validate([
            'leveljabatan_id' => 'required',
            'direktorat_id' => 'required',
            'devisidepartement_id' => 'required',
            'kode_jabatan' => 'required',
            'jabatan' => 'required'
        ]);
        
        
        jabatan::create([
            'leveljabatan_id' => $request->leveljabatan_id,
            'direktorat_id' => $request->direktorat_id,
            'devisidepartement_id' => $request->devisidepartement_id,
            'kode_jabatan' => $request->kode_jabatan,
            'jabatan' => $request->jabatan,
        ]);

        return redirect()->route('jabatan');
    }

    public function deletejabatan($id)
    {
        $jabatan = jabatan::findOrFail($id);

        $jabatan->delete();
        return redirect()->route('jabatan');
    }

    public function editjabatan($id)
    {
        $jabatan = jabatan::find($id);
        $level = level_jabatan::all();
        $departemen = departemen::all();
        $dir = direktorat::all();
        
        return view('content.jabatan.update_jabatan', ['jabatan' => $jabatan, 'level' => $level, 'departemen' => $departemen, 'dir' => $dir]);
    }

    public function updatejabatan($id, Request $request)
    {
        $this->validate($request,[
            'leveljabatan_id' => 'required',
            'direktorat_id' => 'required',
            'kode_jabatan' => 'required',
            'nama_jabatan' => 'required'
        ]);
    
        $jabatan = jabatan::find($id);
        $jabatan->leveljabatan_id = $request->leveljabatan_id;
        $jabatan->devisidepartement_id = $request->devisidepartement_id;
        $jabatan->direktorat_id = $request->direktorat_id;
        $jabatan->kode_jabatan = $request->kode_jabatan;
        $jabatan->nama_jabatan = $request->nama_jabatan;
        $jabatan->save();
        return redirect()->route('jabatan');
    }



    //level jabatan
    public function level_jabatan(){
        $level = level_jabatan::all();
        
        return view('content.level jabatan.level_jabatan', ['level' => $level]);
    }

    public function form_level(){

        return view('content.level jabatan.form_level');

    }

    public function insert_level(Request $request){
        $request -> validate([
            'level_jabatan' => 'required'
        ]);
        
        
        level_jabatan::create([
            'level_jabatan' => $request->level_jabatan
        ]);

        return redirect()->route('level');
    }


    public function deletelevel($id)
    {
        $level = level_jabatan::findOrFail($id);

        $level->delete();
        return redirect()->route('level');
    }

    public function editlevel($id)
    {
        $level = level_jabatan::find($id);
        
        return view('content.level jabatan.update_level', ['level' => $level]);
    }

    public function updatlevel($id, Request $request)
    {
        $this->validate($request,[
            'level_jabatan' => 'required'
        ]);
    
        $level = level_jabatan::find($id);
        $level->level_jabatan = $request->level_jabatan;
        $level->save();
        return redirect()->route('level');
    }



    //pegawai
    public function pegawai(){
        $pegawai = pegawai::all();

        return view('content.pegawai.pegawai', ['pegawai' => $pegawai]);
    }

    public function form_pegawai(){
        $pegawai = pegawai::all();
        $dir = direktorat::all()->pluck("nama_direktorat","id");
        $level = level_jabatan::all();

        return view('content.pegawai.form_pegawai', ['pegawai' => $pegawai, 'level' => $level, 'dir' => $dir]);
    }

    public function getdevisi($id){
        $devisi = Devisi::all()->where("direktorat_id", $id)->pluck("nama_devisi", "id");

        return json_encode($devisi);
    }

    public function getdepartemen($id){
        $departemen= departemen::all()->where("devisi_id", $id)->pluck("nama_departemen", "id");

        return json_encode($departemen);
    }

    public function getseksi($id){
        $departemen = Seksi::all()->where("departemen_id", $id)->pluck("nama_seksi", "id");

        return json_encode($departemen);
    }

    public function insert_pegawai(Request $request){
        $request -> validate([
            'nik' => 'required',
            'no_ktp' => 'required',
            'nama_pegawai' => 'required',
            'npwp' => 'required',
            'leveljabatan_id' => 'required',
            'direktorat_id' => 'required'
        ]);

        pegawai::create([
            'nik' => $request->nik,
            'no_ktp' => $request->no_ktp,
            'nama_pegawai' => $request->nama_pegawai,
            'npwp' => $request->npwp,
            'leveljabatan_id' => $request->leveljabatan_id,
            'direktorat_id' => $request->direktorat_id,
            'devisi_id' => $request->devisi_id,
            'departemen_id' => $request->departemen_id,
            'seksi_id' => $request->seksi_id
        ]);
        
        return redirect()->route('pegawai');
    }

    public function editpegawai($id)
    {
        $pegawai = pegawai::find($id);
        $level = level_jabatan::all();
        $departemen = departemen::all();
        $dir = direktorat::all();
        $seksi = Seksi::all();
        $devisi = Devisi::all();
        
        return view('content.pegawai.update_pegawai', ['level' => $level, 'pegawai' => $pegawai, 'departemen' => $departemen, 'dir' => $dir, 'seksi' => $seksi, 'devisi' => $devisi]);
    }

    public function deletepegawai($id)
    {
        $pegawai = pegawai::findOrFail($id);

        $pegawai->delete();
        return redirect()->route('pegawai');
    }

    public function updatepegawai($id, Request $request)
    {
        $this->validate($request,[
            'nik' => 'required',
            'no_ktp' => 'required',
            'nama_pegawai' => 'required',
            'npwp' => 'required',
            'leveljabatan_id' => 'required',
            'direktorat_id' => 'required',
            'devisi_id' => 'required',
            'dedepartemen_id' => 'required',
            'seksi_id' => 'required'
        ]);
    
        $pegawai = pegawai::find($id);
        $pegawai->nik = $request->nik;
        $pegawai->no_ktp = $request->no_ktp;
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->npwp = $request->npwp;
        $pegawai->leveljabatan_id = $request->leveljabatan_id;
        $pegawai->direktorat_id = $request->direktorat_id;
        $pegawai->devisi_id = $request->devisi_id;
        $pegawai->departemen_id = $request->depertemen_id;
        $pegawai->seksi_id = $request->seksi_id;
        $pegawai->save();

        return redirect()->route('pegawai');
    }

    //surat masuk
    public function surat_masuk()
    {
        
        return view('content.surat.surat_masuk.surat_masuk');
    }

    public function form_masuk()
    {
        
        return view('content.surat.surat_masuk.form_masuk');
    }


    //surat keluar
    public function surat_keluar()
    {
        
        return view('content.surat.surat_keluar.surat_keluar');
    }
    
    public function form_keluar()
    {
        
        return view('content.surat.surat_keluar.form_keluar');
    }

    //Disposisi
    public function disposisi()
    {
        
        return view('content.surat.disposisi.disposisi');
    }

    //Memo
    public function memo()
    {
        
        return view('content.surat.memo.memo');
    }

    public function form_memo()
    {
        
        return view('content.surat.memo.form_memo');
    }
}
