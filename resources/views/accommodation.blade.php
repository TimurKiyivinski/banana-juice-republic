@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Accommodation <small>Feel at home</small>
                <div class="hidden-xs hidden-sm btn-group pull-right">
                    <a href="{{ URL::to('/login', ['type' => '1', 'reference' => 'accommodation'] ) }}" class="btn btn-primary">
                        Use Registration Token
                    </a>
                    <a href="{{ URL::to('/login', ['type' => '0', 'reference' => 'accommodation'] ) }}" class="btn btn-info">
                        Login with Facebook
                    </a>
                </div>
            </h1>
        </div>
    </div>
    <div class="row">
        {{ $text }}
    </div>
    <div class="row">
        <div class="page-header">
            <br/>
        </div>
        <div class="hidden-md hidden-lg well">
            <a href="{{ URL::to('/login', ['type' => '1', 'reference' => 'accommodation'] ) }}" class="btn btn-primary center-block">
                Use Registration Token
            </a>
            <a href="{{ URL::to('/login', ['type' => '0', 'reference' => 'accommodation'] ) }}" class="btn btn-info center-block">
                Login with Facebook
            </a>
        </div>
    </div>
</div>
@stop
