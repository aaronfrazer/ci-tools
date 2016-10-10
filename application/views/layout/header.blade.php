<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap Core CSS -->
<link href="{{ base_url('assets/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{ base_url('assets/css/simple-sidebar.css') }}" rel="stylesheet">

<!-- Need some way to always grab the latest from jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#menu-toggle" class="btn btn-default navbar-brand" id="menu-toggle">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </a>
            <a class="navbar-brand" href="{{ base_url('home') }}">WebSiteName</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tools
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ base_url('slidetoggle') }}" title="An example of jQuery SlideToggle.">Slide Toggle</a></li>
                        <li><a href="{{ base_url('googlemap') }}" title="A Google map with a location in an iFrame.">Google Map</a></li>
                        <li><a href="{{ base_url('twitter') }}" title="A page that allows a person to enter a twitter URL and view its feed.">Twitter Feed</a></li>
                        <li><a href="{{ base_url('clock') }}" title="A clock that runs in realtime.">Clock</a></li>
                        <li><a href="{{ base_url('flatfile') }}" title="A page that reads and stores data into a text file.">Flat File</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">JavaScript
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ base_url('slider') }}" title="A JavaScript slider that changes from 0 - 100.">Slider</a></li>
                    </ul>
                </li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
            <div class="col-sm-3 col-md-3">
                <form class="navbar-form navbar-right" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<br/><br/>