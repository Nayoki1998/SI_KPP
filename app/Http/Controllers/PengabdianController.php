<?php

namespace App\Http\Controllers;

use App\Models\Pengabdian;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use DB;

class PengabdianController extends Controller
{
    public function validateForm($req){
        $req->validate([
            'perihal'=> 'required',
            'berkas' => 'required|mimes:pdf',
        ]);
    }
    public function findId($id){
        $find = Pengabdian::find($id);
        return $find;
    }
    public function index()
    {
        return view('pengabdian.index', ['data' => Pengabdian::all()]);
    }

    public function create()
    {
        //
        return view('pengabdian.create');
    }

    public function store(Request $request)
    {
        //
        $this->validateForm($request);

        $input = $request->except(['_token']);
        // dd($input);
        if($request->hasfile('berkas')){
            $fileName = date("d_m_Y").'_'.$request->berkas->getClientOriginalName();
            $request->berkas->move(public_path('pengabdian'), $fileName);
            $input['berkas'] = $fileName;
        }

        $kerjasama = Pengabdian::create($input);
        return redirect()->route('peng.index')->with('success','Data Pengabdian telah tersimpan!!');
    }

  
    public function show(Pengabdian $pengabdian)
    {
        //
    }

    public function edit($id)
    {
        //
        return view('pengabdian.edit', ['data' => $this->findId($id)]);

    }

  
    public function update(Request $request, $id)
    {
        //
        $oldData = $this->findId($id);
        $input = $request->except(['_token', '_method']);
        if($request->berkas == null){
            // dd($request);
            $this->validate($request, [
                'perihal'=> 'required',
            ]);
            // dd($input);
            $updateData = Pengabdian::where('id', $id)->update($input);
            return redirect()->route('peng.index')->with('success','Data Pengabdian telah diperbaharui!!');

        }else{
            // dd($input);

            $this->validateForm($request);
            if(is_file($request->berkas)){
                $fileName = date("d_F_Y").'_'.$request->berkas->getClientOriginalName();
                $request->berkas->move(public_path('berkas'), $fileName);
                $input['berkas'] = $fileName;
                File::delete(public_path('pengabdian/'.$oldData->berkas));

                $updateData = Pengabdian::where('id', $id)->update($input);
                return redirect()->route('peng.index')->with('success','Data Pengabdian telah diperbaharui!!');


            }
        }
    }

    public function destroy( $id)
    {
        //
        File::delete(public_path('pengabdian/'.$this->findId($id)->berkas));
        $data = DB::table('pengabdians')->where('id',$id)->delete();
        return redirect()->route('peng.index')->with('deleted','Data Pengabdian terhapus!!');
    }
}
