<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Pemilih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PemilihController extends Controller
{
    public function index() {
        return view('pemilih.form');
    }

    public function createPemilih(Request $request) {
        $request->validate([
            'nik' => 'required|numeric|digits:16',
            'name' => 'required',
            'tps' => 'required',
        ]);

        Pemilih::create([
            'nik' => $request->nik,
            'name' => $request->name,
            'tps' => $request->tps,
        ]);

        return redirect()->route('pemilih.data')->with('success', 'Pemilih created successfully');
    }

    public function getPemilih() {
        $data = DB::select('SELECT nik, name, tps FROM pemilihs WHERE is_deleted = false ORDER BY id');

        return view('pemilih.data', compact('data'));
    }

    public function getPemilihById($id) {
        $data = DB::select('SELECT nik, name, tps, FROM pemilihs WHERE id = ? AND is_deleted = false', [$id]);

        return view('pemilih.data-by-id', compact('data'));
    }

    public function editPemilih($id) {
        $data = Pemilih::find($id);
    
        return view('pemilih.edit', compact('data'));
    }
    
    public function updatePemilih(Request $request, $id) {
        $request->validate([
            'nik' => 'required|numeric|digits:16',
            'name' => 'required',
            'tps' => 'required',
        ]);
    
        $data = Pemilih::find($id);
        $data->update($request->all());
    
        return redirect()->route('pemilih.data')->with('success', 'Pemilih updated successfully');
    }
    
    public function deletePemilih($id) {
        $data = Pemilih::find($id);
        $data->update([
            'is_deleted' => true,
            'deleted_at' => now(),
        ]);

        return redirect()->route('pemilih.data')->with('success', 'Pemilih deleted successfully');
    }
}
