<?php

namespace App\Http\Controllers;

use App\PizzaSize;
use Illuminate\Http\Request;

class PizzaSizeController extends Controller
{
     /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzaSizes = PizzaSize::latest()->paginate(5);
        return view('pizzaSizes.index', compact('pizzaSizes'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pizzaSize = PizzaSize::get();
        return view('pizzaSizes.create') ->with('pizzaSizes', $pizzaSize); 
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
            'pizzaSize' => 'required',
        ]);

        PizzaSize::create($request->all());
        return redirect()->route('pizzaSizes.index')
        ->with('success','Pizza Size created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PizzaSize  $pizzaSize
     * @return \Illuminate\Http\Response
     */
    public function show(PizzaSize $pizzaSize)
    {
        return view('pizzaSizes.show',compact('pizzaSize'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PizzaSize  $pizzaSize
     * @return \Illuminate\Http\Response
     */
    public function edit(PizzaSize $pizzaSize)
    {
        return view('pizzaSizes.edit',compact('pizzaSize'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PizzaSize  $pizzaSize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PizzaSize $pizzaSize)
    {
        $request->validate([
            'pizzaSize' => 'required',
        ]);

        $pizzaSize->update($request->all());
        return redirect()->route('pizzaSizes.index')
        ->with('success','Pizza size created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PizzaSize  $pizzaSize
     * @return \Illuminate\Http\Response
     */
    public function destroy(PizzaSize $pizzaSize)
    {
        $pizzaSize->delete();
        return redirect()->route('pizzaSizes.index')
        ->with('success','Pizza size deleted successfully');
    }
}
