<?php

namespace App\Http\Controllers;

use App\Exports\ZakatExport;
use App\Models\Zakat as ModelsZakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class Zakat extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function data()
    {
        $kelas = DB::table('zakats')->select('kelas', 'id')->distinct()->get();
        return view('data', compact('kelas'));
    }
    public function datazakat(Request $request, $id)
    {
        $data = ModelsZakat::select('nama', 'jenis_kelamin', 'nominal')->where('kelas', $id)->get();
        $data2 = ModelsZakat::where('kelas', $id)->sum('nominal');
        $data3 = ModelsZakat::where('kelas', $id)->count();
        return view('data-zakat', compact('data', 'data2', 'data3'));
    }
    public function export($id)
    {
        $zakat = new ZakatExport;
        $zakat->id = $id;
        return Excel::download($zakat, 'test.xlsx');
    }
    public function home()
    {
        $data = ModelsZakat::all()->count();
        $data2 = ModelsZakat::sum('nominal');
        return view('dash', compact('data', 'data2'));
    }
    public function submit(Request $request)
    {
        ModelsZakat::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'nominal' => $request->berat,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);
        return redirect()->route('home');
    }
}
