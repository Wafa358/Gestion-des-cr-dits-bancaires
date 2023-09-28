<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use Illuminate\Http\Request;

class AgenceController extends Controller
{
    //
    public function index(){
        $data = Agence::get();
        return view('agence.agence_list',compact('data'));
    }
    public function ajouterAgence(){
        //dd('test');
        return view('agence.ajouter_agence');
    }
    public function saveAgence(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'nom' => 'required',
            'localisation' => 'required',
            'adresse' => 'required',
        ]);
        $agence = new Agence();
        $agence->nom = $request->nom;
        $agence->localisation = $request->localisation;
        $agence->adresse = $request->adresse;
        $agence->save();
        return redirect()->back()->with('success','Agence ajoutée avec succées');




        
    }
    public function editAgence($id){
        $data = Agence::where('id','=',$id)->first();
        return view('agence.edit_agence',compact('data'));
    }
    public function updateAgence(Request $request){

        $request->validate([
            'nom' =>'required',
            'localisation' =>'required',
            'adresse' =>'required',



        ]);
        Agence::where('id','=',$request->id)->update([
            'nom' =>$request->nom,
            'localisation' =>$request->localisation,
            'adresse' =>$request->adresse,





        ]);
        return redirect()->back()->with('success','Mise à jour des agences');
    }
    public function deleteAgence($id){

        $data = Agence::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Agence supprimée avec succées');

    }
}
