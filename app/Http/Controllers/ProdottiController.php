<?php

namespace App\Http\Controllers;

use App\Models\Prodotti;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProdottiRequest;
use App\Http\Requests\UpdateProdottiRequest;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ProdottiController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            new Middleware('auth')
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodotti=Prodotti::all();

        return view('prodotti.index', compact('prodotti'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prodotti.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProdottiRequest $request)
    {
        Prodotti::create([
            'title'=>$request->title,
            'dev'=>$request->dev,
            'publisher'=>$request->publisher,
            'year'=>$request->year,
            'price'=>$request->price,
            'cover'=>$request->file('cover')->store('covers', 'public'),
            'user_id'=>Auth::user()->id

        ]);
        return redirect(route('homepage'))->with('message', 'Inserito con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodotti $prodotti)
    {
        return view('prodotti.show', compact('prodotti'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodotti $prodotti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProdottiRequest $request, Prodotti $prodotti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodotti $prodotti)
    {
        //
    }
}
