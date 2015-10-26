@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Taxis and Car Rentals</h1>
        </div>
        <div  class="grid js-masonry">
        @foreach($transports as $transport)
        <div class="col-xs-12 col-md-6 grid-item">
            <div class="panel panel-info" data-toggle="modal" data-target="#transportModal-{{ $transport['id'] }}">
                <div class="panel-heading">
                    <h4>{{ $transport['name'] }}</h4>
                </div>
                <div class="panel-body">
                    <div class="col-xs-12 col-md-3">
                        <img width="300" height="300" src="{{ $transport['photo'] }}" class="img-responsive" alt="Image missing :(">
                    </div>
                    <div class="col-xs-12 col-md-9">
                        {{ substr(strip_tags($transport['text']), 0, 60) }}...
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </div>
        @foreach($transports as $transport)
        <div class="modal fade" id="transportModal-{{ $transport['id'] }}" tabindex="-1" role="dialog" aria-labelledby="transportModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="transportModalLabel">Transport</h4>
                    </div>
                    <div class="modal-body">
                        <div id="carousel-{{ $transport['id'] }}" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                @for($i = 0; $i < count($transport['photos']); $i++)
                                <div class="item @if($i == 0) active @endif">
                                    <img width="100%" src="{{ $transport['photos'][$i] }}" alt="Image missing">
                                </div>
                                @endfor
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-{{ $transport['id'] }}" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-{{ $transport['id'] }}" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <br />
                        {!! $transport['text'] !!}
                        <br />
                        <small>*Pricing: RM {{ $transport['cost'] }} per day.</small>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="From: dd/mm/yyyy"></input>
                            <input type="text" class="form-control" placeholder="To: dd/mm/yyyy"></input>
                            <input id="textbox-{{ $transport['id'] }}" type="text" class="form-control" placeholder="Amount: 1"></input>
                        </div>
                        <div class="btn-group btn-group-justified">
                            <a href="#" data-dismiss="modal" aria-label="Reserve" class="btn btn-success">Reserve</a>
                            <a href="{{ $transport['url'] }}" class="btn btn-primary">View Page</a>
                        </div>
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
