<?php

namespace App\Imports;

use App\Cni;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ExcelImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row=>$value) 
        {
            if($row > 0){
                //dd($value);
                Cni::create([
                        'numero' => $value[0],                       
                        'prenom' => $value[1],
                        'nom' => $value[2],
                        'genre' => $value[3],
                        'age' => $value[4],
                        'cni_numero' => $value[5],
                        'adresse' => $value[6],                        
                        'departement' => $value[7],
                        'telephone' => $value[8]
                     ]);
            }
        }
    }
}
