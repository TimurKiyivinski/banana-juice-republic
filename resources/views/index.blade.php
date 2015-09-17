@extends('app')

@section('content')
<div class="container">
    {{--
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Some Conference
            </div>
            <div class="panel-body">
                jasfhldsjkahflka
            </div>
        </div>
    </div>
    --}}
    <div class="row">
        <div class="page-header">
            <h1>Society for Design and Innovation Technology<small>A little about us</small></h1>
        </div>
    </div>
    <div class="row">
        {{ Lipsum::text() }}
    </div>
    <div class="row">
        <br />
    </div>
    <div class="row">
        <div class="page-header">
            <h1>Bookings<small>Make your reservation today</small></h1>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="panel panel-default" data-toggle="modal" data-target="#registrationModal">
                <div class="panel-heading">
                Registration
                <span class="pull-right glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                </div>
                <div class="panel-body">
                    <img src="{{ asset('images/plain.png') }}" class="img-responsive" />
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
                        {{ Lipsum::text() }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="panel panel-default" data-toggle="modal" data-target="#accommodationModal">
                <div class="panel-heading">
                Accommodation
                <span class="pull-right glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                </div>
                <div class="panel-body">
                    <img src="{{ asset('images/plain.png') }}" class="img-responsive" />
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
                        {{ Lipsum::text() }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4" data-toggle="modal" data-target="#attractionModal">
            <div class="panel panel-default">
                <div class="panel-heading">
                Attraction
                <span class="pull-right glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                </div>
                <div class="panel-body">
                    <img src="{{ asset('images/plain.png') }}" class="img-responsive" />
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
                        {{ Lipsum::text() }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
