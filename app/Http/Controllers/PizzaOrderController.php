<?php

namespace App\Http\Controllers;

use App\PizzaOrder;
use Illuminate\Http\Request;
use App\Pizza;
use Illuminate\Support\Facades\Auth;

class PizzaOrderController extends Controller
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
        $pizzaOrders = PizzaOrder::paginate(5);
        return view('pizzaOrders.index',compact('pizzaOrders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pizza = Pizza::get();
        return view('pizzaOrders.create')
        ->with('pizzas', $pizza); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $id = Auth::id();
        $request->validate([
            'pizza_id' => 'required',
            'number_of_pizza' => 'required',
            'pizza_size' => 'required',
            'status' => 'required',
        ]);
        $request['user_id'] = Auth::id();  // adding current authenticated user
        
        PizzaOrder::create($request->all());
        return redirect()->route('pizzaOrders.index')
        ->with('success','Pizza order created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PizzaOrder  $pizzaOrder
     * @return \Illuminate\Http\Response
     */
    public function show(PizzaOrder $pizzaOrder)
    {
        return view('pizzaOrders.show',compact('pizzaOrder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PizzaOrder  $pizzaOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(PizzaOrder $pizzaOrder)
    {
        return view('pizzaOrders.edit',compact('pizzaOrder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PizzaOrder  $pizzaOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PizzaOrder $pizzaOrder)
    {
        $request->validate([
            'pizzaFlavor' => 'required',
            'number_of_pizza' => 'required',
            'pizza_size' => 'required',
            'status' => 'required',
            'email' => 'required',
            'customerName' => 'required',
            'customerPhone' => 'required',
            'customerAddress' => 'required',
        ]);

        $pizzaOrder->update($request->all());
        return redirect()->route('pizzaOrders.index')
        ->with('success','Pizza order created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PizzaOrder  $pizzaOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(PizzaOrder $pizzaOrder)
    {
        $pizzaOrder->delete();
        return redirect()->route('pizzaOrders.index')
        ->with('success','Pizza order deleted successfully');
    }
}
