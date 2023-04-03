<?php

namespace App\Http\Controllers;

use App\Models\KerjaSama;
use Illuminate\Http\Request;
use DB;
use File;

class KerjaSamaController extends Controller
{
    
    public function validateForm($req){
        $req->validate([
            'perihal'=> 'required',
            'no_surat_pihak1'=>'required',
            'no_surat_pihak2'=>'required',
            'tgl_surat'=>'required',
            'pic_1' => 'required',
            'pic_2' => 'required',
            'berkas' => 'required|mimes:pdf',
        ]);
    }
    public function findId($id){
        $find = KerjaSama::find($id);
        return $find;
    }

    
    public function index()
    {
        return view('kerjasama.index', ['data' => Kerjasama::all()]);
    }

    public function create()
    {
        //
        return view('kerjasama.create');

    }

   
    public function store(Request $request)
    {
        //
        // dd($request);
        $this->validateForm($request);

        $input = $request->except(['_token']);
        // dd($input);
        if($request->hasfile('berkas')){
            $fileName = date("d_m_Y").'_'.$request->berkas->getClientOriginalName();
            $request->berkas->move(public_path('berkas'), $fileName);
            $input['berkas'] = $fileName;
        }

        $kerjasama = KerjaSama::create($input);
        return redirect()->route('kerjasama.index')->with('success','Data Kerja Sama telah tersimpan!!');

    }

    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
        return view('kerjasama.edit', ['data' => $this->findId($id)]);
    }

    public function update(Request $request, $id)
    {
        //
        $oldData = $this->findId($id);
        $input = $request->except(['_token', '_method']);

        if($request->berkas == null){
            $this->validate($request, [
                'perihal'=> 'required',
                'no_surat_pihak1'=>'required',
                'no_surat_pihak2'=>'required',
                'tgl_surat'=>'required',
                'pic_1' => 'required',
                'pic_2' => 'required'
            ]);
            // dd($input);
            $updateData = KerjaSama::where('id', $id)->update($input);
            return redirect()->route('kerjasama.index')->with('success','Data Kerja Sama telah diperbaharui!!');

        }else{
            // dd($input);

            $this->validateForm($request);
            if(is_file($request->berkas)){
                $fileName = date("d_F_Y").'_'.$request->berkas->getClientOriginalName();
                $request->berkas->move(public_path('berkas'), $fileName);
                $input['berkas'] = $fileName;
                File::delete(public_path('berkas/'.$oldData->berkas));

                $updateData = KerjaSama::where('id', $id)->update($input);
                return redirect()->route('kerjasama.index')->with('success','Data Kerja Sama telah diperbaharui!!');


            }
        }
        
    }

    
    public function destroy($id)
    {
        //
        // dd($id);
        File::delete(public_path('berkas/'.$this->findId($id)->berkas));
        $data = DB::table('kerja_samas')->where('id',$id)->delete();
        return redirect()->route('kerjasama.index')->with('deleted','Data Kerja Sama terhapus!!');
        
    }
}