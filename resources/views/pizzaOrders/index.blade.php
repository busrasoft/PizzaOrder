@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 7 CRUD Pizza</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pizzaOrders.create') }}"> Create New Pizza Order</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Pizza Flavor</th>
            <th>Pizza Number</th>
            <th>Pizza Size</th>
            <th>Pizza Status</th>
            <th>Customer Email</th>
            <th>Customer Name</th>
            <th>Customer Phone</th>
            <th>Customer Address</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pizzaOrders as $pizza)
        
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pizza->pizza->pizza_flavor }}</td>
            <td>{{ $pizza->number_of_pizza }}</td>
            <td>{{ $pizza->pizza_size }}</td>
            <td>{{ $pizza->status }}</td>
            <td>{{ $pizza->user->email }}</td>
            <td>{{ $pizza->user->name }}</td>
            <td>{{ $pizza->user->phone }}</td>
            <td>{{ $pizza->user->address }}</td>
            <td>
                <form action="{{ route('pizzaOrders.destroy',$pizza->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pizzaOrders.show',$pizza->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pizzaOrders.edit',$pizza->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $pizzaOrders->links() !!}
      
@endsection