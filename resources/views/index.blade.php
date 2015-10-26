@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Society for Design and Innovation Technology <small>A little about us</small></h1>
        </div>
    </div>
    <div class="row">
        {{ $main_text }}
    </div>
    <div class="row">
        <br />
    </div>
    <div class="row">
        <div class="page-header">
            <h1>Bookings <small>Make your reservation today</small></h1>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="panel panel-success" data-toggle="modal" data-target="#registrationModal">
                    <div class="panel-heading">
                    Registration
                    <span class="pull-right glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                    </div>
                    <div class="panel-body">
                        <img src="{{ $img_register }}" class="img-responsive" />
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="panel panel-info" data-toggle="modal" data-target="#accommodationModal">
                    <div class="panel-heading">
                    Accommodation
                    <span class="pull-right glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                    </div>
                    <div class="panel-body">
                        <img src="{{ $img_accommodation }}" class="img-responsive" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4" data-toggle="modal" data-target="#attractionModal">
                <div class="panel panel-success">
                    <div class="panel-heading">
                    Attraction
                    <span class="pull-right glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                    </div>
                    <div class="panel-body">
                        <img src="{{ $img_attraction }}" class="img-responsive" />
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4" data-toggle="modal" data-target="#eateriesModal">
                <div class="panel panel-info">
                    <div class="panel-heading">
                    Eateries
                    <span class="pull-right glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                    </div>
                    <div class="panel-body">
                        <img src="{{ $img_eateries }}" class="img-responsive" />
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4" data-toggle="modal" data-target="#transportModal">
                <div class="panel panel-success">
                    <div class="panel-heading">
                    Transport
                    <span class="pull-right glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                    </div>
                    <div class="panel-body">
                        <img src="{{ $img_transport }}" class="img-responsive" />
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registrationModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="registrationModalLabel">Register</h4>
                    </div>
                    <div class="modal-body">
                        {!! $register_text !!}
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified">
                            <a href="#"  class="btn btn-danger" data-dismiss="modal">Close</a>
                            <a href="{{ URL::to('/register') }}" class="btn btn-primary">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="accommodationModal" tabindex="-1" role="dialog" aria-labelledby="accommodationModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="accommodationModalLabel">Accommodations</h4>
                    </div>
                    <div class="modal-body">
                        {!! $accommodation_text !!}
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified">
                            <a href="#" class="btn btn-danger" data-dismiss="modal">Close</a>
                            <a href="{{ URL::to('/accommodation') }}" class="btn btn-primary">Book</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="attractionModal" tabindex="-1" role="dialog" aria-labelledby="attractionModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="attractionModalLabel">Attractions</h4>
                    </div>
                    <div class="modal-body">
                        {!! $attraction_text !!}
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified">
                            <a href="#" class="btn btn-danger" data-dismiss="modal">Close</a>
                            <a href="{{ URL::to('/attraction') }}" class="btn btn-primary">Book</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="eateriesModal" tabindex="-1" role="dialog" aria-labelledby="eateriesModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="eateriesModalLabel">Eateries</h4>
                    </div>
                    <div class="modal-body">
                        {!! $eateries_text !!}
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified">
                            <a href="#" class="btn btn-danger" data-dismiss="modal">Close</a>
                            <a href="{{ URL::to('/food') }}" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="transportModal" tabindex="-1" role="dialog" aria-labelledby="transportModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="transportModalLabel">Transport</h4>
                    </div>
                    <div class="modal-body">
                        {!! $transport_text !!}
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified">
                            <a href="#" class="btn btn-danger" data-dismiss="modal">Close</a>
                            <a href="{{ URL::to('/transport') }}" class="btn btn-primary">Book</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
