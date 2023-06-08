<?php

namespace App\Http\Controllers;

use App\Models\Penelitian;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;

class PenelitianController extends Controller
{

    public function validateForm($req){
        $req->validate([
            'perihal'=> 'required',
            'berkas' => 'required|mimes:pdf',
        ]);
    }
    public function findId($id){
        $find = Penelitian::find($id);
        return $find;
    }

    public function index()
    {
        //
        // dd('test');
        return view('penelitian.index', ['data' => Penelitian::all()]);
    }

    
    public function create()
    {
        //

        return view('penelitian.create');
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
            $request->berkas->move(public_path('penelitian'), $fileName);
            $input['berkas'] = $fileName;
        }

        $kerjasama = Penelitian::create($input);
        return redirect()->route('pen.index')->with('success','Data Penelitian telah tersimpan!!');
    }

   
    public function show(Penelitian $penelitian)
    {
        //
    }

   
    public function edit($id)
    {
        //
        return view('penelitian.edit', ['data' => $this->findId($id)]);
    }

    
    public function update(Request $request, $id)
    {
        $oldData = $this->findId($id);
        $input = $request->except(['_token', '_method']);
        if($request->berkas == null){
            // dd($request);
            $this->validate($request, [
                'perihal'=> 'required',
            ]);
            // dd($input);
            $updateData = Penelitian::where('id', $id)->update($input);
            return redirect()->route('pen.index')->with('success','Data Penelitian telah diperbaharui!!');

        }else{
            // dd($input);

            $this->validateForm($request);
            if(is_file($request->berkas)){
                $fileName = date("d_F_Y").'_'.$request->berkas->getClientOriginalName();
                $request->berkas->move(public_path('berkas'), $fileName);
                $input['berkas'] = $fileName;
                File::delete(public_path('penelitian/'.$oldData->berkas));

                $updateData = Penelitian::where('id', $id)->update($input);
                return redirect()->route('pen.index')->with('success','Data Penelitian telah diperbaharui!!');


            }
        }
    }

 
    public function destroy($id)
    {
        //
        File::delete(public_path('penelitian/'.$this->findId($id)->berkas));
        $data = DB::table('penelitians')->where('id',$id)->delete();
        return redirect()->route('pen.index')->with('deleted','Data Penelitian terhapus!!');
    }
}