<?php

namespace App\Exports;

use App\Models\Alumnos;
use Maatwebsite\Excel\Concerns\FromCollection;

class unionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Alumnos::all();
    }
}
