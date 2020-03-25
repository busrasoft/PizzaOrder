@extends('layouts.app')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Pizza</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pizzas.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('pizzas.update',$pizza->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pizza Name:</strong>
                    <input type="text" name="pizza_name" value="{{ $pizza->pizza_name }}" class="form-control" placeholder="Pizza Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pizza Flavor:</strong>
                    <input type="text" name="pizza_flavor" value="{{ $pizza->pizza_flavor }}" class="form-control" placeholder="Pizza Flavor">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pizza Size:</strong>
                    <input type="text" name="pizza_size" value="{{ $pizza->pizza_size }}" class="form-control" placeholder="Pizza Size">
                    <select name="pizza_size" class="form-control">
                        @foreach($pizzaSizes as $pizza) 
                            <option value="{{ $pizza->id }}">{{$pizza->pizzaSize}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection