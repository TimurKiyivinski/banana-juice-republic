@extends('app')

@section('head_extra')
    <link rel="stylesheet" href="{{ asset('css/summernote-bs3.css') }}">
@stop

@section('content')
<div class="container">
    <div class="page-header">
        <h1>What do you think? <small>Your feedback helps!</small></h1>
    </div>
    <div class="col-xs-12">
        <form>
            <div class="form-group">
                <label>Feedback</label>
                <div class="form-control" id="summernote">
                    Be honest.
                </div>
            </div>
            <div class="form-group">
                <label for="form-cvc">Please select the statement that you most relate to.</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    The site was easy to navigate and provides ample information.
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    The site was easy to navigate but lacks ample information.
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                    The site was hard to navigate but provides ample information.
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
                    The site was hard to navigate and lacks ample information.
                    </label>
                </div>
            </div>
        </form>
        <a href="{{ $r_url }}" class="btn btn-success btn-block">Continue to {{ $r_name}}</a>
    </div>
</div>
@stop

@section('script_extra')
<script>
$(document).ready(function() {
      $('#summernote').summernote();
      $('.note-codable').hide();
});
</script>
@stop
