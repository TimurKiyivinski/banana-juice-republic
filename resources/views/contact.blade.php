@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Need more information? <small>Talk to us</small></h1>
        </div>
        <div class="jumbotron">
            <h1>Email</h1>
            <p>info@sdic.swinburne.edu.my</p>
            <hr />
            <h1>Phone</h1>
            <p>+601-23456789</p>
            <h1>Feedback</h1>
            <a href="{{ URL::to('feedback') }}" class="btn btn-success">Tell us what you think</a>
        </div>
        <br />
    </div>
</div>
@stop
