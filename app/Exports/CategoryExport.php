<?php

namespace App\Exports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class CategoryExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Category::all(['id', 'title', 'description']); // Selecting the fields to export

    }

    /**
     * Return the headings for the exported file
     *
     * @return array
     */
    public function headings(): array
    {
        return ['ID', 'Category Title', 'Category Description']; 
    }
}
