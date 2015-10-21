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
            <div class="panel panel-primary" data-toggle="modal" data-target="#accommodationModal-{{ $accommodation['id'] }}">
                <div class="panel-heading">
                    <h4>{{ $accommodation['name'] }}</h4>
                </div>
                <div class="panel-body">
                    <div class="col-xs-12 col-md-3">
                        <img width="300" height="300" src="{{ $accommodation['photo'] }}" class="img-responsive" alt="Image missing :(">
                    </div>
                    <div class="col-xs-12 col-md-9">
                        {{ substr(strip_tags($accommodation['text']), 0, 60) }}...
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
                        <div id="carousel-{{ $accommodation['id'] }}" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                @for($i = 0; $i < count($accommodation['photos']); $i++)
                                <div class="item @if($i == 0) active @endif">
                                    <img width="100%" src="{{ $accommodation['photos'][$i] }}" alt="Image missing">
                                </div>
                                @endfor
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-{{ $accommodation['id'] }}" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-{{ $accommodation['id'] }}" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <br />
                        {!! $accommodation['text'] !!}
                        <br />
                        <small>Accommdates up to {{ $accommodation['people'] }} people.</small>
                        <br />
                        <small>*Pricing: RM {{ $accommodation['cost'] }} per night.</small>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group form-inline">
                        </div>
                        <div class="form-group form-inline">
                            <input type="text" class="form-control" placeholder="From: dd/mm/yyyy"></input>
                            <input type="text" class="form-control" placeholder="To: dd/mm/yyyy"></input>
                        </div>
                        <div class="form-group form-inline">
                            <label for="textbox-{{ $accommodation['id'] }}" >Reservations</label>
                            <input id="textbox-{{ $accommodation['id'] }}" type="text" class="form-control" placeholder="0"></input>
                            <a href="{{ $accommodation['url'] }}" class="btn btn-primary">View Page</a>
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
