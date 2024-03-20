<?php

namespace App\Exports;

use App\Models\Zakat;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class ZakatExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public $id;
    public function view(): View
    {
        return view('export', [
            'export' => Zakat::where('kelas',  $this->id)->get()
        ]);
    }
}
