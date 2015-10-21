@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Our Local Attractions</h1>
        </div>
        <div  class="grid js-masonry">
        @foreach($attractions as $attraction)
        <div class="col-xs-12 col-md-6 grid-item">
            <div class="panel panel-info" data-toggle="modal" data-target="#attractionModal-{{ $attraction['id'] }}">
                <div class="panel-heading">
                    <h4>{{ $attraction['name'] or "Name" }}</h4>
                </div>
                <div class="panel-body">
                    <div class="col-xs-12 col-md-3">
                        <img src="{{ $attraction['photo'] }}" class="img-responsive" alt="Image missing :(">
                    </div>
                    <div class="col-xs-12 col-md-9">
                        {{ substr(strip_tags($attraction['text']), 0, 60) }}...
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </div>
        @foreach($attractions as $attraction)
        <div class="modal fade" id="attractionModal-{{ $attraction['id'] }}" tabindex="-1" role="dialog" aria-labelledby="attractionModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="attractionModalLabel">Attractions</h4>
                    </div>
                    <div class="modal-body">
                        <div id="carousel-{{ $attraction['id'] }}" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                @for($i = 0; $i < count($attraction['photos']); $i++)
                                <div class="item @if($i == 0) active @endif">
                                    <img width="100%" src="{{ $attraction['photos'][$i] }}" alt="Image missing">
                                </div>
                                @endfor
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-{{ $attraction['id'] }}" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-{{ $attraction['id'] }}" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <br />
                        {!! $attraction['text'] !!}
                        <br />
                        <small>*Pricing: RM {{ $attraction['cost'] }} per person.</small>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group form-inline">
                            <label for="textbox-{{ $attraction['id'] }}" >Reservations</label>
                            <input id="textbox-{{ $attraction['id'] }}" type="text" class="form-control" placeholder="0"></input>
                            <a href="{{ $attraction['url'] }}" class="btn btn-primary">View Page</a>
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
