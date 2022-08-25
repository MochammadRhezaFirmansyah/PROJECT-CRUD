<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rheza24;

use Session;

class rheza extends Controller
{
    public function index(){
        $bio=rheza24::all();
        return view('pages.tampil',['bio'=>$bio]);
        

    } 
    public function addReg (Request $request){
        $request->validate(
            [
                'nama' => 'required',
                'nis' => 'required',
                'tglLahir' => 'required'
            ]
        );

        $data=rheza24::create([
            'nama'=>$request->nama,
            'nis'=>$request->nis,
            'tglLahir'=>$request->tglLahir
        ]);

        if($data){
            Session::flash('sukses', 'Tambah data SUKSES!!');
            return redirect('/Firmansyah');
        }
        

    
           
    

        // dd($data);
    }

    public function ubah($id){
        $bioUbah=
        Rheza24::findOrFail($id);
        // dd($bioUbah);die();
        return view('pages.ubah',['bioUbah'=> $bioUbah]);

    }

    public function data ($id,Request $request){
        $request->validate([
                'nama' => 'required',
                'nis' => 'required',
                'tglLahir' => 'required'
        ],
        [
             'nama.required'=> 'Nama tidak boleh kosong',
             'nis.required' => 'NIS tidak boleh kosong',
             'tglLahir.required' => 'Tanggal Lahir tidak boleh kosong',
            
        ]
        );

        $bioupdate=rheza24::findOrFail($id);
        $bioupdate->nama=$request->nama;
        $bioupdate->nis=$request->nis;
        $bioupdate->tglLahir=$request->tglLahir;
        $bioupdate->save();


        Session::flash('sukses','Update Data SUKSESS!!');
        return redirect('/Rheza');
        



}


      public function hapusData($idHapus){
         $bioHapus=rheza24::findOrFail($idHapus);
         $bioHapus->delete();
         Session::flash('sukses','Hapus Data SUKSESS!!');
         return redirect('/Rheza');

}
}