<?php


namespace Alsace7004\Formulaire\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Alsace7004\Formulaire\Models\Formulaire;

class FormulaireController extends Controller{

    public function index(){

        return view('formulaire::index');
    }

    public function store(Request $request){
        $data = $request->only(['nom','prenom','telephone','email','adresse']);
        $validator = Validator::make($data,[
            'nom'       =>'required|string|min:2',
            'prenom'    =>'required|string|min:2',
            'telephone' =>['required','unique:formulaires','regex:/^(\d{8})$/'],
            'email'     =>'required|email|unique:formulaires,email',
            'adresse'   =>'required|string|min:2',
        ],[
            'nom.required'          =>'Veuillez remplir ce champ',
            'nom.min'               =>'Trop court...',
            'prenom.required'       =>'Veuillez remplir ce champ',
            'prenom.min'            =>'Trop court...',
            'telephone.required'        =>'Veuillez remplir ce champ',
            'telephone.unique'          =>'Ce numero de telephone existe déjà',
            'telephone.regex'           =>'Veuillez entrer un numero de téléphone valide',
            'email.required'        =>'Veuillez remplir ce champ',
            'email.email'           =>'Veuillez entrer une adresse mail valide',
            'email.unique'          =>'Ce adresse email existe déjà',
            'adresse.required'          =>'Veuillez remplir ce champ',
            'adresse.min'          =>'Trop court...',
        ]); 
        if($validator->fails()){
            //->withInput()->withErrors($validator);
            //return $validator->fails();
            //return redirect()->route('contact.index')->with('success','Erreur Erreur Erreur');
            //return Redirect::back()->withErrors($validator);
           
               return redirect()->back()->withInput()->withErrors($validator);
        }
        //dd($request->all());
        Formulaire::create($data);

        return redirect()->route('contact.index')->with('success','Nouvelle adresse ajouté avec success');
    }
}


?>