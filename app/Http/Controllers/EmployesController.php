<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use Illuminate\Http\Request;
use App\Models\Employes;


class EmployesController extends Controller
{
    //
    public function index(){
        $data = Employes::get();
        return view('employes_list',compact('data'));
    }
    public function ajouterEmployes(){

        $agence = Agence::all();
        return view('ajouter_employes',compact('agence'));
    }
    public function saveEmployes(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'prenom' =>'required',
            'nom' => 'required',
            'email' => 'required',
            'télephone' => 'required',
            'adresse' => 'required',
        ]);
        $employes = new Employes();
        $employes->prenom = $request->prenom;
        $employes->nom = $request->nom;
        $employes->email = $request->email;
        $employes->télephone = $request->télephone;
        $employes->adresse = $request->adresse;
        $employes->agence_id = $request->agence_id;

        $employes->save();
        return redirect()->back()->with('success','Employé ajouté avec succées');




        
    }
    public function editEmployes($id){
        $data = Employes::where('id','=',$id)->first();
        $agence = Agence::all();
        return view('edit_employes',compact('data','agence'));
    }
    public function updateEmployes(Request $request){

        $request->validate([
            'prenom' =>'required',
            'nom' =>'required',
            'email' =>'required',
            'télephone' =>'required',
            'adresse' =>'required',



        ]);
        Employes::where('id','=',$request->id)->update([
            'prenom' =>$request->prenom,
            'nom' =>$request->nom,
            'email' =>$request->email,
            'télephone' =>$request->télephone,
            'adresse' =>$request->adresse,
            'agence_id' => $request->agence_id,
        ]);
        return redirect()->back()->with('success','Mise à jour des employés');
    }
    public function deleteEmployes($id){

        $data = Employes::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Employé supprimé avec succées');

    }
}
