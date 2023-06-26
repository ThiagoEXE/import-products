<?php

namespace App\Exports;

use App\Models\Products;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Products::select("id", "name", "description")->get();
    }

    public function headings(): array
    {
        return ["ID", "Name", "Description"];
    }
}
