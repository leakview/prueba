<?php

namespace App\Exports;

use App\Models\Alumnos;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
class rango3Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('alumnos')->whereBetween('nota_f', [7, 10])->get();
    }
}
