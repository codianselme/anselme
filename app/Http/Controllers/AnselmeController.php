<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Souscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use NumberToWords\NumberToWords;
use NumberToWords\Legacy\Numbers\Words;

class AnselmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentPage = 'index';

        // Créez une instance de Carbon pour l'année 2018
        $date2018 = Carbon::createFromDate(2018, 1, 1); 

        // Créez une instance de Carbon pour l'année courante
        $dateCourante = Carbon::now();

        // Calculez la différence en années
        $nombreAnnees = $date2018->diffInYears($dateCourante);



        // Créer une instance de NumberToWords
        // $numberToWords = new NumberToWords();

        // Obtenir un convertisseur de nombres en mots
        // $converter = $numberToWords->getConverter('fr');

        // Convertir le nombre en mots
        // $nombreAnneesEnLettres = $converter->toWords($nombreAnnees);

        return view('index', compact('currentPage', 'nombreAnnees'));
    }

    public function contact()
    {
        $currentPage = 'contact';
        return view('contact', compact('currentPage'));
    }

    public function about()
    {
        $currentPage = 'about';
        return view('about', compact('currentPage'));
    }

    public function sendMessage(Request $request)
    {
        $data = $request->validate([
            'w3lName' => 'required',
            'w3lSender' => 'required|email',
            'w3lSubject' => 'required',
            'w3lMessage' => 'required',
        ]);

        // Envoyer l'e-mail
        Mail::to('codianselme@gmail.com')->send(new \App\Mail\ContactMail($data));

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Le message a été envoyé avec succès!');
    }

    public function souscribe(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
        ]);

        try {
            // Envoyer l'e-mail
            Mail::to('codianselme@gmail.com')->send(new \App\Mail\Souscribe($data));

            // Sauvegarder l'e-mail dans la base de données
            \App\Models\Souscribe::create([
                'email' => $data['email'],
            ]);

            // Rediriger avec un message de succès
            return redirect()->back()->with('success', 'Le message a été envoyé avec succès et l\'e-mail a été sauvegardé!');
        } catch (\Exception $e) {
            //dd($e);
            // Gérer les erreurs d'envoi d'e-mail
            return redirect()->back()->with('error', 'Une erreur s\'est produite lors de l\'envoi du message ou de la sauvegarde de l\'e-mail.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
