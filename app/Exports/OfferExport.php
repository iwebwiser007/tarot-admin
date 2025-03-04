<?php

namespace App\Exports;

use App\Models\Offer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class OfferExport implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Offer::all(['id', 'title', 'description', 'start_date', 'end_date', 'discount', 'status', 'card_id']); // Selecting the fields to export
    }

    /**
     * Return the headings for the exported file
     *
     * @return array
     */
    public function headings(): array
    {
        return ['ID', 'Offer Title', 'Description', 'Start Date', 'End Date', 'Discount (%)', 'Status', 'Card ID']; // Column names for the Excel file
    }
}


