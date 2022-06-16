<?php

namespace App\Http\Controllers;

use App\Models\Gebruikers;
use Illuminate\Http\Request;

class GebruikersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Gebruikers::all();
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
     * @param  \App\Models\Gebruikers  $gebruikers
     * @return \Illuminate\Http\Response
     */
    public function show(Gebruikers $gebruikers)
    {
        return $gebruikers;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gebruikers  $gebruikers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gebruikers $gebruikers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gebruikers  $gebruikers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gebruikers $gebruikers)
    {
        //
    }
}
