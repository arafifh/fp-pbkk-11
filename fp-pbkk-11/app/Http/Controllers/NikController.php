<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Pemilih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NikController extends Controller
{
    public function index() {
        return view('nik.form');
    }

    public function status1() {
        return view('nik.1');
    }

    public function status2() {
        return view('nik.2');
    }

    public function status3() {
        return view('nik.3');
    }

    public function checkNik(Request $request) {
        $nik = $request->input('nik');
        $user = Auth::user(); // User yang sedang login
        
        $pemilih = Pemilih::where('nik', $nik)->first();

        $logData = [
            'nik' => $nik,
            'status' => false,
            'pemilih_id' => null, // Initialize pemilih_id
        ];
        
        if ($pemilih != null) {
            if ($pemilih->tps == $user->tps) {
                $logData = [
                    'pemilih_id' => $pemilih->id,
                    'nik' => $pemilih->nik,
                    'name' => $pemilih->name,
                    'tps' => $pemilih->tps,
                    'status' => true,
                ];
                // dd($pemilih->name);
            } else {
                $logData = [
                    'pemilih_id' => $pemilih->id,
                    'nik' => $pemilih->nik,
                    'name' => $pemilih->name,
                    'tps' => $pemilih->tps,
                    'status' => false,
                ];
            }

            $log = Log::create($logData);
        } 
        else {
            Log::create($logData);
        }

        if ($logData['status'] == true) {
            return redirect()->route('nik.1')->with('success', 'NIK submitted successfully');
        } else if ($logData['status'] == false && $logData['pemilih_id'] != null) {
            return redirect()->route('nik.2')->with('success', 'NIK submitted successfully');
        } else {
            return redirect()->route('nik.3')->with('success', 'NIK submitted successfully');
        }
    }

    public function getNik() {
        $data = DB::select('SELECT pemilih_id, nik, name, tps, status FROM logs WHERE is_deleted = false ORDER BY id DESC');

        return view('nik.data', compact('data'));
    }
}
