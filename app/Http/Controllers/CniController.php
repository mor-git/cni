<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cni;
//use Excel;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ExcelImport;
use App\Imports\CniImport;

class CniController extends Controller
{
    //
  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() 
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $alldata = Cni::all();
        return view('cni.index',['allCni' => $alldata]);

    }

    public function show(){
        return view("cni.add");
    }
    public function recherchePage(){
        return view("cni.recherche");
    }
    public function rechercheSexe(Request $request){
        
        
        $users = Cni::where([
            ['genre', '=', $request->input('genre')],
            ['departement', '=', $request->input('departement')],
        ])->get();
        
        return view("cni.rechercheResultat",['cnis'=> $users]);
    }
    public function rechercheAge(Request $request){

        $users = Cni::where([
            ['age', '>', $request->input('anneeDebut')],
            ['age', '<', $request->input('anneeFin')],
            ['departement', '=', $request->input('departement')],
        ])->get();
        
        // dd($users);
        return view("cni.rechercheResultat",['cnis'=> $users]);
    }

    public function recherche(Request $request){
      
        $cnis= Cni::where('departement', 'like', '%'.$request->text.'%' )->get();
        $html="";
        foreach($cnis as $cni)
        {
           $html = $html."<tr>";
           $html = $html." <td>$cni->numero</td>
           <td>$cni->nom</td>
           <td> $cni->prenom</td>
           <td> $cni->genre</td>
           <td> $cni->age</td>
           <td> $cni->adresse</td>
           <td> $cni->telephone</td>
           <td>$cni->cni_numero</td>
           <td>$cni->departement</td>";
           $html = $html."</tr>";
        }
        return $html;
    }

    public function add(Request $request){
       $cni = new Cni();
        dd($request);
       $cni->numero = $request->numero;
       $cni->nom = $request->nom;
       $cni->prenom = $request->prenom;
       $cni->genre =  $request->genre;
       $cni->age =$request->age;
       $cni->cni_numero = $request->cni_numero;
       $cni->adresse = $request->adresse;
       $cni->telephone = $request->telephone;
       $cni->departement=$request->departement;
    

       $cni->save();
        
       return redirect('cni');
    }

    public function upload(Request $request)
    {
         $path = $request->file('select_file');
         Excel::import(new ExcelImport, $path);
         return redirect('/cni');
    }



}
