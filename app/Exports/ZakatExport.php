<?php

namespace App\Exports;

use App\Models\Zakat;
use Maatwebsite\Excel\Concerns\FromCollection;

class ZakatExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public $id;
    public function collection()
    {
        return Zakat::select('nama', 'jenis_kelamin', 'nominal', 'kelas')->where('id', $this->id);
    }
}
