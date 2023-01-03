<?php

namespace App\Exports;

use App\Models\Alumnos;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class alumnosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
     //return Alumnos::all();

    // return DB::table('alumnos')->where('nombre', 'raul')->get();
     return DB::table('alumnos')->get();    
    }
}
