<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Kerjasama, Penelitian, Pengabdian};
class DashboardController extends Controller
{
    
    public function index()
    {
        //

        $kj = Kerjasama::count();
        $pn = Penelitian::count();
        $png = Pengabdian::count();
        // dd($kj);
        return view('dashboards.index', 
                    [
                        'tKj' => $kj,
                        'tPn' => $pn,
                        'tPng' => $png
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