@extends('layouts.app')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Pizza</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pizzaOrders.index') }}"> Back</a>
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
  
    <form action="{{ route('pizzaOrders.update',$pizzaOrder->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pizza of Name:</strong>
                    <select name="pizza_id" class="form-control">
                        @foreach($pizzas as $pizza) 
                            <option value="{{ $pizza->id }}">{{$pizza->pizza_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pizza Number:</strong>
                    <input type="text" name="number_of_pizza" value="{{ $pizzaOrder->number_of_pizza }}" class="form-control" placeholder="Pizza Number">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pizza Size:</strong>
                    <select name="pizza_size" class="form-control">
                        @foreach($pizzas as $pizza) 
                            <option value="{{ $pizza->id }}">{{$pizza->pizza_size}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pizza Status:</strong>
                    <label>
                        {{ App\Enums\Status::DELEVIRY }}
                        <input type="radio" name="status"
                        class="form-control" value="{{ App\Enums\Status::DELEVIRY }}"
                        {{ old('status', $pizzaOrder->status) == App\Enums\Status::DELEVIRY ? 'checked' : '' }}>
                    </label>
                    <label>
                        {{ App\Enums\Status::DISPATCHED }}
                        <input type="radio" name="status" 
                        class="form-control" 
                        value="{{ App\Enums\Status::DISPATCHED }}"
                        {{ old('status', $pizzaOrder->status) == App\Enums\Status::DISPATCHED ? 'checked' : '' }}
                        >
                    </label>
                    <label>
                        {{ App\Enums\Status::CANCELED }}
                        <input type="radio" name="status" class="form-control" value="{{ App\Enums\Status::CANCELED }}"
                        {{ old('status', $pizzaOrder->status) == App\Enums\Status::CANCELED ? 'checked' : '' }}
                        >
                    </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection