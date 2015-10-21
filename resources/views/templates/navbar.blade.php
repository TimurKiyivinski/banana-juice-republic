<nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="{{ URL::to('/') }}">
            <img class="navbar-logo" src="{{ asset('images/logo.png') }}"/>
        </a>
        <a class="navbar-brand hidden-xs hidden-sm" href="{{ URL::to('/') }}">
            {{ $title or "Swinburne Conference"}}
        </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('/') }}">
            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            Home
            </a></li>
            <li><a href="{{ URL::to('/register') }}">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            Register
            </a></li>
            <li><a href="{{ URL::to('/accommodation') }}">
            <span class="glyphicon glyphicon-plane" aria-hidden="true"></span>
            Accommodation
            </a></li>
            <li><a href="{{ URL::to('/attraction') }}">
            <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
            Attractions
            </a></li>
            <li><a href="{{ URL::to('/transport') }}">
            <span class="glyphicon glyphicon-road" aria-hidden="true"></span>
            Transport
            </a></li>
            <li><a href="{{ URL::to('/contact') }}">
            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            Contact Us
            </a></li>
        </ul>
    </div>
</div>
</nav>
