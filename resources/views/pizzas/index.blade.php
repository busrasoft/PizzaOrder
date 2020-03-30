@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 7 CRUD Pizza</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pizzas.create') }}"> Create New pizza</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">

        <tr>
            <th>No</th>
            <th>Pizza Flavor</th>
            <th>Pizza Number</th>
            <th>Pizza Size</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pizzas as $pizza)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pizza->pizza_name }}</td>
            <td>{{ $pizza->pizza_flavor }}</td>
            <td>{{ $pizza->pizza_size }}</td>
            <td>
                <form action="{{ route('pizzas.destroy',$pizza->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pizzas.show',$pizza->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pizzas.edit',$pizza->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $pizzas->links() !!}
      
@endsection