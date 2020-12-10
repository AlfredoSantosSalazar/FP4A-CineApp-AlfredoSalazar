<?php

namespace App\Http\Controllers;

use App\Consumables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsumablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $consumables = DB::table('consumables')->paginate(10);
        return view('consumables.index', compact('consumables'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consumables.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        Consumables::create($request->all());
        return redirect()->route('consumables.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consumables  $consumable
     * @return \Illuminate\Http\Response
     */
    public function show(Consumables $consumable)
    {
        return view('consumables.show', compact('consumable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consumables  $consumable
     * @return \Illuminate\Http\Response
     */
    public function edit(Consumables $consumable)
    {
        return view('consumables.edit', compact('consumable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consumables  $consumable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consumables $consumable)
    {
        $consumable->update($request->all());
        return redirect()->route('consumables.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consumables  $consumable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consumables $consumable)
    {
        $consumable->delete();
        return redirect()->route('consumables.index');
    }
}
