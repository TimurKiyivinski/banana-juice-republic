@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Our conference <small>Details</small><a href="{{ URL::to('/login') }}" class="pull-right btn btn-primary">Register</a></h1>
        </div>
    </div>
    <div class="row">
        <p>Speaker: Lipsum</p>
        {{ Lipsum::text() }}
    </div>
</div>
@stop
