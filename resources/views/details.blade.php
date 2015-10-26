@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>About you</h1>
        </div>
        <form>
            <div class="form-group">
                <label for="form-name">Name</label>
                <input type="text" class="form-control" id="form-name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="form-email">Email</label>
                <input type="text" class="form-control" id="form-email" placeholder="Address">
            </div>
            <div class="form-group">
                <label for="form-address">Address</label>
                <input type="text" class="form-control" id="form-address" placeholder="Address">
            </div>
            <div class="form-group">
                <label for="form-origin">Nationality</label>
                <input type="text" class="form-control" id="form-origin" placeholder="Nationality">
            </div>
        </form>
        <br />
        <div class="well col-xs-12">
            <a href="{{ $r_url }}" class="btn btn-success btn-block">Continue to {{ $r_name}}</a>
        </div>
    </div>
</div>
@stop
