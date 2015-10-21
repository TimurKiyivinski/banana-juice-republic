@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Transport <small>Car Rentals</small>
                <div class="hidden-xs hidden-sm btn-group pull-right">
                    <a href="{{ URL::to('/login', ['type' => '1', 'reference' => 'transport'] ) }}" class="btn btn-primary">
                        Use Registration Token
                    </a>
                    <a href="{{ URL::to('/login', ['type' => '0', 'reference' => 'transport'] ) }}" class="btn btn-info">
                        Login with Facebook
                    </a>
                </div>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="jumbotron">
            <h1>Don't drive?</h1>
            <p>Hit up our Taxi hotline at 1800-SDIC-TAXI</p>
        </div>
        {!! $text !!}
    </div>
    <div class="row">
        <div class="page-header">
            <br/>
        </div>
        <div class="hidden-md hidden-lg well">
            <a href="{{ URL::to('/login', ['type' => '1', 'reference' => 'transport'] ) }}" class="btn btn-primary center-block">
                Use Registration Token
            </a>
            <a href="{{ URL::to('/login', ['type' => '0', 'reference' => 'transport'] ) }}" class="btn btn-info center-block">
                Login with Facebook
            </a>
        </div>
    </div>
</div>
@stop
