@extends('app')

@section('content')
<div class="container">
    <div class="col-xs-12 well">
        <div class="form-group">
            <label for="token-input">Registration Token</label>
            <input id="token-input" type="text" class="form-control" placeholder="Example: 12345A0"/>
        </div>
        <a href="{{ $r_url }}" class="btn btn-success btn-block">Continue to {{ $r_name}}</a>
    </div>
</div>
@stop
