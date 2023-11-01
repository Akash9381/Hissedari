<?php

namespace App\Exports;

use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Modules\CpPanel\Entities\CpReference;

class CpReferanceExcel implements FromCollection,WithHeadings,ShouldAutoSize
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
        return CpReference::where('user_id',Auth::user()->id)->select('name','number','email')->get();
    }
}
