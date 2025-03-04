<?php

namespace App\Exports;

use App\Models\Card;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CardExport implements FromCollection, WithHeadings
{
    /**
     * Return the collection of data to be exported
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Card::all(['id', 'name', 'affirmation_text']); // Selecting the fields to export
    }

    /**
     * Return the headings for the exported file
     *
     * @return array
     */
    public function headings(): array
    {
        return ['ID', 'Card Name', 'Affirmation Text']; // Column names for the Excel file
    }
}

