@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Our Accommodation picks</h1>
        </div>
        @foreach($attractions as $attraction)
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-primary" data-toggle="modal" data-target="#attractionModal-{{ $attraction['id'] }}">
                <div class="panel-heading">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            {{ $attraction['name'] }}
                        </label>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-xs-12 col-md-3">
                        <img src="{{ $attraction['photo'] }}" class="img-responsive" alt="Image missing :(">
                    </div>
                    <div class="col-xs-12 col-md-9">
                        {{ $attraction['text'] }}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="attractionModal-{{ $attraction['id'] }}" tabindex="-1" role="dialog" aria-labelledby="attractionModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="attractionModalLabel">Accommodations</h4>
                    </div>
                    <div class="modal-body">
                        {{ $attraction['text_long'] }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <a href="#" class="btn btn-primary">View Page</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="well col-xs-12">
            <a href="{{ $r_url }}" class="btn btn-success btn-block">Continue to {{ $r_name}}</a>
        </div>
    </div>
</div>
@stop
