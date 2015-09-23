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
            <button type="submit" class="btn btn-default">Pay</button>
        </form>
        <br />
    </div>
</div>
@stop
