@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Our Local Attractions</h1>
        </div>
        <div  class="grid js-masonry">
        @foreach($foods as $food)
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-primary" data-toggle="modal" data-target="#foodModal-{{ $food['id'] }}">
                <div class="panel-heading">
                    <h4>{{ $food['name'] or "Name" }}</h4>
                </div>
                <div class="panel-body">
                    <div class="col-xs-12 col-md-3">
                        <img src="{{ $food['photo'] }}" class="img-responsive" alt="Image missing :(">
                    </div>
                    <div class="col-xs-12 col-md-9">
                        {{ substr(strip_tags($food['text']), 0, 60) }}...
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </div>
        @foreach($foods as $food)
        <div class="modal fade" id="foodModal-{{ $food['id'] }}" tabindex="-1" role="dialog" aria-labelledby="foodModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="foodModalLabel">Attractions</h4>
                    </div>
                    <div class="modal-body">
                        <div id="carousel-{{ $food['id'] }}" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                @for($i = 0; $i < count($food['photos']); $i++)
                                <div class="item @if($i == 0) active @endif">
                                    <img width="100%" src="{{ $food['photos'][$i] }}" alt="Image missing">
                                </div>
                                @endfor
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-{{ $food['id'] }}" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-{{ $food['id'] }}" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <br />
                        {!! $food['text'] !!}
                        <br />
                        <small>*Pricing: RM {{ $food['cost_min'] }} to {{ $food['cost_max'] }} per person.</small>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group form-inline">
                            <label for="textbox-{{ $food['id'] }}" >Reservations</label>
                            <input id="textbox-{{ $food['id'] }}" type="text" class="form-control" placeholder="0"></input>
                            <a href="{{ $food['url'] }}" class="btn btn-primary">View Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop
