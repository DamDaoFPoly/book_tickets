<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('client.index');
    }
   
    public function movieList()
    {
        //
        return view('client.movie-list');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movies $movies)
    {
        //
        return view('client.detail');
    }

    public function ticket()
    {
        //
        return view('client.movie-ticket-plan');
    }

    public function seat()
    {
        //
        return view('client.movie-seat-plan');
    }

    public function popcorn()
    {
        //
        return view('client.popcorn');
    }

    public function checkout()
    {
        //
        return view('client.movie-checkout');
    }

    public function FormSignUp()
    {
        //
        return view('client.acount.sign-up');
    }

    public function FormSignIn()
    {
        //
        return view('client.acount.sign-in');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movies $movies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movies $movies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movies $movies)
    {
        //
    }
}
