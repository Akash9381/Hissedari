<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Modules\CpPanel\Entities\CpReference;

class MyRefrenceImport implements ToCollection,WithHeadingRow,SkipsEmptyRows,WithChunkReading
{
    /**
    * @param Collection $collection
    */
    public $cp;
    
    public function __construct($cp)
    {
        $this->cp = $cp;
    } 
    public function collection(Collection $collection)
    {
        foreach($collection as $item){
            $get = CpReference::where('number', trim($item['mobile_number']))->first();
            if($get){
                CpReference::updateOrCreate(
                    [
                        'number' => trim($item['mobile_number'])
                    ],
                    [
                        'name' => trim($item['name']),
                        'email' => trim($item['email']),                        
                    ]
                );
            }else{
                $referance = new CpReference();
                $referance->user_id = $this->cp['user_id'];
                $referance->referral_code = $this->cp['referral_code'];
                $referance->name = trim($item['name']);
                $referance->number = trim($item['mobile_number']);
                $referance->email = trim($item['email']);
                $referance->save();
            }
            
        }
    }

    public function chunkSize(): int{
        return 100;
    }

    public function rules(): array{
        return [
            '*.name'          => 'required',
            '*.mobile_number' => 'required',
            '*.email'         => 'required|email'
        ];
    }
}
