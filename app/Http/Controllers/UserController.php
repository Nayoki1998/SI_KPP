<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
  
    public function validateForm($req){
        $req->validate([
            'nama_user'=> 'required|unique:users,nama_user',
            'jabatan'=>'required',
            'password'=>'required',
            'tipe_user'=>'required',
        ]);
    }
    public function findId($id){
        $find = User::find($id);
        return $find;
    }

    
    public function index()
    {
        return view('user.index', ['data' => User::all()]);
    }

    public function create()
    {
        //
        return view('user.create');

    }

   
    public function store(Request $request)
    {
        //
        // dd($request);
        $this->validateForm($request);

        $input = $request->except(['_token']);
        $input['password'] = bcrypt($input['password']);
        
        // dd($input);
        $user = User::create($input);
        return redirect()->route('user.index')->with('success','Data Kerja Sama telah tersimpan!!');

    }

    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
        return view('user.edit', ['data' => $this->findId($id)]);
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
            $updateData = User::where('id', $id)->update($input);
            return redirect()->route('user.index')->with('success','Data Kerja Sama telah diperbaharui!!');

        }else{
            // dd($input);

            $this->validateForm($request);
            if(is_file($request->berkas)){
                $fileName = date("d_F_Y").'_'.$request->berkas->getClientOriginalName();
                $request->berkas->move(public_path('berkas'), $fileName);
                $input['berkas'] = $fileName;
                File::delete(public_path('berkas/'.$oldData->berkas));

                $updateData = User::where('id', $id)->update($input);
                return redirect()->route('user.index')->with('success','Data Kerja Sama telah diperbaharui!!');


            }
        }
        
    }

    
    public function destroy($id)
    {
        //
        // dd($id);
        // File::delete(public_path('berkas/'.$this->findId($id)->berkas));
        $data = User::destroy($id);
        return redirect()->route('user.index')->with('deleted','Data Kerja Sama terhapus!!');
        
    }
}