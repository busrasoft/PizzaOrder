@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 7 CRUD Pizza</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pizzaSizes.create') }}"> Create New Pizza Size</a>
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
            <th>Pizza Size</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pizzaSizes as $pizzaSize)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pizzaSize->pizzaSize }}</td>
            <td>
                <form action="{{ route('pizzaSizes.destroy',$pizzaSize->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pizzaSizes.show',$pizzaSize->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pizzaSizes.edit',$pizzaSize->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $pizzaSize->links() !!}
      
@endsection