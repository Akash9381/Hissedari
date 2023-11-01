<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;

class MyRefrenceSample implements FromCollection,WithHeadings,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $data;
    public function __construct()
    {
        $heading = ['Name','Mobile Number','Email'];
        $this->data = $heading;
    }

    public function headings(): array
    {
        return $this->data;
    }

    public function collection()
    {
        return collect([]);
    }
}
