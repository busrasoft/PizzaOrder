@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Pizza</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pizzas.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pizza Flavor:</strong>
                {{ $pizza->flavorPizza }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pizza Number:</strong>
                {{ $pizza->numberPizza }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pizza Size:</strong>
                {{ $pizza->sizePizza }}
            </div>
        </div>
    </div>
@endsection