<?php

namespace App\Exports;

use App\Bukum;
use Maatwebsite\Excel\Concerns\FromCollection;

class JenisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bukum::all();
    }
}
