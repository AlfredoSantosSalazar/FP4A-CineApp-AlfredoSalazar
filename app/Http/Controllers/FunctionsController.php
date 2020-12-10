<?php
namespace App\Http\Controllers;
use App\Functions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FunctionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $functions=DB::table('functions')->paginate(2);
        return view('functions.index', compact('functions')); 
   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('functions.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Functions::create($request->all());
        return redirect()->route('functions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Functions  $functions
     * @return \Illuminate\Http\Response
     */
    public function show(Functions $function)
    {
        return view('functions.show', compact('function'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Functions  $functions
     * @return \Illuminate\Http\Response
     */
    public function edit(Functions $function)
    {
        return view('functions.edit', compact('function'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Functions  $function
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Functions $function)
    {
        $request->validate(
            [
            'nombre'      => 'required',
            'start'   => 'required',
            'end'    => 'required',
            'available'     => 'required',
            'type'      => 'required'
            ]
                    );
            
                    $function->update($request->all());
                    return redirect()->route('functions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Functions  $functions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Functions $function)
    {
        $function->delete();
        return redirect()->route('functions.index');
    }
}
