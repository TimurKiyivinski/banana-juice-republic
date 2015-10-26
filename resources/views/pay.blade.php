@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Your bill is $200</h1>
        </div>
        <form>
            <div class="form-group">
                <label for="form-no">Card Number</label>
                <input type="text" class="form-control" id="form-no" placeholder="xxxx xxxx xxxx xxxx">
            </div>
            <div class="form-group">
                <label for="form-cvc">CVC</label>
                <input type="text" class="form-control" id="form-cvc" placeholder="xxx">
            </div>
            <div class="form-group">
                <label for="form-date">Date</label>
                <input type="text" class="form-control" id="form-date" placeholder="dd yy">
            </div>
            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#payModal">Pay</a>
        </form>
        <br />
        <div class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="payModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="payModalLabel">Confirm payment of $200</h4>
                    </div>
                    <div class="modal-body">
                        Our system will charge your card and send your <b>personal</b> schedule to your email address.
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified">
                            <a href="#" data-dismiss="modal" aria-label="Close" class="btn btn-danger">Close</a>
                            <a href="{{ URL::to('/feedback') }}" class="btn btn-primary">Pay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
