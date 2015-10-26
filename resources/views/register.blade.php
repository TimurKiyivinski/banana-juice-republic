@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Our conference <small>Details</small>
                <div class="hidden-xs hidden-sm btn-group pull-right">
                    <a href="{{ URL::to('/details') }}" class="btn btn-primary">
                        Register
                    </a>
                    <a href="{{ URL::to('/login', ['type' => '0', 'reference' => 'details'] ) }}" class="btn btn-info">
                        Login with Facebook
                    </a>
                </div>
            </h1>
        </div>
    </div>
    <div class="row">
        {!! $text !!}
    </div>
    <div class="row">
        <div class="page-header">
            <br/>
        </div>
        <div class="hidden-md hidden-lg well">
            <a href="{{ URL::to('/details') }}" class="btn btn-primary center-block">
                Register
            </a>
            <a href="{{ URL::to('/login', ['type' => '0', 'reference' => 'details'] ) }}" class="btn btn-info center-block">
                Login with Facebook
            </a>
        </div>
    </div>
</div>
@stop
