@extends('app')

@section('content')
<div class="container">
    <div class="col-xs-12 well">
        <div class="form-group">
            <label for="token-input">Click to log in</label>
            <a href="#" class="btn btn-success btn-block">Login</a>
        </div>
        <a href="{{ $r_url }}" class="btn btn-success btn-block">Continue to {{ $r_name}}</a>
    </div>
</div>
@stop
