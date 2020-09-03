<?php

namespace App\Imports;

use App\Cni;
use Maatwebsite\Excel\Concerns\ToModel;
use DB;

class CniImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
        DB::table('cnis')->insert(['nom'=>$row['0'],'prenom'=>$row['1'],'genre'=>$row['2'],'age'=>$row['3'],'cni_numero'=>$row['4'],'adresse'=>$row['5'],'telephone'=>$row['6'],'departement'=>$row['7']]);
        // return new Cni([
        //     //
        //     'nom' =>$row['nom'],
        //     'prenom' =>$row['prenom'],
        //     'genre' =>$row['genre'],
        //     'age' =>$row['age'],
        //     'cni_numero' =>$row['cni_numero'],
        //     'adresse' =>$row['adresse'],
        //     'telephone' =>$row['telephone'],
        //     'departement' =>$row['departement']
        // ]);
    }
}
