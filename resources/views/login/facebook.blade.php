@extends('app')

@section('content')
<div class="container">
    <div class="col-xs-12 well">
        <form>
            <div class="form-group">
                <label for="form-no">Email</label>
                <input type="text" class="form-control" id="form-no" placeholder="example@email.com">
            </div>
            <div class="form-group">
                <label for="form-cvc">Password</label>
                <input type="password" class="form-control" id="form-cvc" placeholder="******">
            </div>
        </form>
        <a href="{{ $r_url }}" class="btn btn-success btn-block">Continue to {{ $r_name}}</a>
    </div>
</div>
@stop
