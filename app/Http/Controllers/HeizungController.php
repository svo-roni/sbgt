<?php

namespace App\Http\Controllers;

use App\Heizung;
use App\fragen;
use App\Antworten;
use Illuminate\Http\Request;

class HeizungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Fragen sammeln
        $fragen = fragen::all();
        $antworten = Antworten::all();
        return view('heizung.index', ['fragen' => $fragen, 'antworten' => $antworten]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Neue Offertenanfrage erstellen
        $heizung = new Heizung;
        return view('heizung.create', ['heizung' => $heizung ]);
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
        $heizung = new \App\Heizung;

        // populate the model with the form data
        $car->make = $request->make;
        $car->model = $request->model;

        // save the model to create a new object in the database
        if (!$heizung->save()) {
          $errors = $heizung->getErrors();
          return redirect()
                ->action('HeizungController@create')
            ->with('errors', $errors)
            ->withInput();
        }

        // success!
        return redirect()
          ->action('HeizungController@create')
          ->with('message', 'Your '. $heizung->make . ' '
                    . $heizung->model . ' has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Heizung  $heizung
     * @return \Illuminate\Http\Response
     */
    public function show(Heizung $heizung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Heizung  $heizung
     * @return \Illuminate\Http\Response
     */
    public function edit(Heizung $heizung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Heizung  $heizung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Heizung $heizung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Heizung  $heizung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Heizung $heizung)
    {
        //
    }
}
