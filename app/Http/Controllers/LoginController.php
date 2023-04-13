<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class LoginController extends Controller
{
    
    public function viewLogin(){
        return view('login');
    }

     public function postLogin(Request $request){
        // dd($request);
        $request->validate([
            'nama_user' => 'required',
            'password' => 'required',
            'tipe' => 'required'
        ]);
        
        if($request->tipe == 'SuperAdmin'){
            $credentials = $request->only('nama_user', 'password');
            
            if(Auth::attempt($credentials)){
                // dd($credentials);
                return redirect()->intended('/')->withSuccess('Signed In');
            }
        }
        if($request->tipe == 'Admin'){
            $credentials = $request->only('nama_user', 'password');
            
            if(Auth::attempt($credentials)){
                // dd($credentials);
                return redirect()->intended('/')->withSuccess('Signed In');
            }
        }
        if($request->tipe == 'Dosen'){
            $credentials = $request->only('nama_user', 'password');
            
            if(Auth::attempt($credentials)){
                // dd($credentials);
                return redirect()->intended('/')->withSuccess('Signed In');
            }
        }


        // if($request->tipe == 'pelaksana'){
        //     $credentials = $request->only('email', 'password');
        //     // dd($credentials);
        //     $checkData = DB::table('pelaksanas')
        //                 ->where('email', $credentials['email'])
        //                 ->where('password', $credentials['password'])
        //                 ->first('email');
        //     if(!empty($checkData)){
        //         $saveSession = session([
        //                             'emailPlt' => $checkData->email,
        //                         ]);
        //         // dd(session('emailPlt'));
        //         return redirect('/riwayat_laporan_pelaksana')->withSuccess('Signed In');
        //     }
        //     // dd($checkData);
        // }
        
        return redirect('login')->withErrors('Login details are not valid');

    }
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}