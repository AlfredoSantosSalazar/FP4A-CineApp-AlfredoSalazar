<?php

namespace App\Http\Controllers;

use App\Entrances;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntrancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrances=DB::table('entrances')->paginate(10);
        return view('entrances.index', compact('entrances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entrances.create');
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
            'sala' => 'required',
            'prince' => 'required',
            'hourEntrance' => 'required'
        ]);

        Entrances::create($request->all());
        return redirect()->route('entrances.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entrances  $entrances
     * @return \Illuminate\Http\Response
     */
    public function show(Entrances $entrance)
    {
        return view('entrances.show', compact('entrance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entrances  $entrances
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrances $entrance)
    {
        return view('entrances.edit', compact('entrance'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entrances  $entrances
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrances $entrance)
    {
        $entrance->update($request->all());
        return redirect()->route('entrances.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entrances  $entrances
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrances $entrance)
    {
        $entrance->delete();
        return redirect()->route('entrances.index');
    }
}
