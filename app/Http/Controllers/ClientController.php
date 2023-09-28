<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client; 

class ClientController extends Controller
{
    //

    public function index(){
        $data = Client::get();
       // return $data;
       return view('client-list',compact('data'));
    }
    public function ajouterClient(){
        return view('ajouter-client');
    }
    public function saveClient(Request $request){
        
        $request->validate([
            'nom'=> 'required',
            'email'=> 'required|email',
            'télephone'=> 'required',
            'adresse'=> 'required',
        ]);
        $nom= $request->nom;
        $email= $request->email;
        $télephone= $request->télephone;
        $adresse= $request->adresse;

    $stu = new Client();
    $stu->nom = $nom;
    $stu->email = $email;
    $stu->télephone = $télephone;
    $stu->adresse = $adresse;
    $stu->save();

    return redirect()->back()->with('success','Client ajouté avec succées');


    }

    public function editClient($id){
        $data = Client::where('id','=',$id)->first();
        //dd($data);
        return view('edit-client',compact('data'));
    }
    public function updateClient(Request $request){
        $request->validate([

            'nom'=> 'required',
            'email'=> 'required',
            'télephone'=> 'required',
            'adresse'=> 'required',

        ]);
        $id = $request->id;
        $nom = $request->nom;
        $email= $request->email;
        $télephone= $request->télephone;
        $adresse= $request->adresse;

        Client::where('id','=',$id)->update([
            'nom'=> $nom,
            'email'=> $email,
            'télephone'=> $télephone,
            'adresse'=> $adresse,

        ]);


        return redirect('client-list');
    }
    public function deleteClient($id){
        Client::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Client supprimé avec succés');
    }
}
