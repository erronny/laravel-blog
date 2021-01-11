<?php

namespace App\Exports;

use App\Tenders;
use Maatwebsite\Excel\Concerns\FromCollection;

class TenderExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tenders::all();
    }
}
