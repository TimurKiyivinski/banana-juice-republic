@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Our Accommodation picks</h1>
        </div>
        <div  class="grid js-masonry">
        @foreach($accommodations as $accommodation)
        <div class="col-xs-12 col-md-6 grid-itea">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            {{ $accommodation['name'] }}
                        </label>
                    </div>
                </div>
                <div class="panel-body" data-toggle="modal" data-target="#accommodationModal-{{ $accommodation['id'] }}">
                    <div class="col-xs-12 col-md-3">
                        <img width="300" height="300" src="{{ $accommodation['photo'] }}" class="img-responsive" alt="Image missing :(">
                    </div>
                    <div class="col-xs-12 col-md-9">
                        {{ substr($accommodation['text'], 0, 60) }}...
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </div>
        @foreach($accommodations as $accommodation)
        <div class="modal fade" id="accommodationModal-{{ $accommodation['id'] }}" tabindex="-1" role="dialog" aria-labelledby="accommodationModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="accommodationModalLabel">Accommodations</h4>
                    </div>
                    <div class="modal-body">
                        {{ $accommodation['text'] }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <a href="{{ $accommodation['url'] }}" class="btn btn-primary">View Page</a>
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
@section('script_extra')
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js"></script>
@stop
