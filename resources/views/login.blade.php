@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Register <small>We respect your privacy</small></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Facebook
                    <span class="pull-right glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                </div>
                <div class="panel-body">
                    <h4>Use your Facebook account to register</h4>
                    <img src="{{ asset('images/plain.png') }}" class="img-responsive" />
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Manually
                    <span class="pull-right glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                </div>
                <div class="panel-body">
                    <h4>Fill out our registration form manually</h4>
                    <img src="{{ asset('images/plain.png') }}" class="img-responsive" />
                </div>
            </div>
        </div>
    </div>
</div>
@stop
