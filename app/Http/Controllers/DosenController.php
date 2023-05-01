<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    
    public function index()
    {
        //

        return view('dosen.index',[
            'dosen' => Dosen::all(),
            
        ]);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    public function show(Dosen $dosen)
    {
        //
    }

    public function edit(Dosen $dosen)
    {
        //
    }

    
    public function update(Request $request, Dosen $dosen)
    {
        //
    }

   
    public function destroy(Dosen $dosen)
    {
        //
    }
}