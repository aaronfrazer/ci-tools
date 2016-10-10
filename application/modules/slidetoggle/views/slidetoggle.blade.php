<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Slide Toggle</title>
    @include('layout/header')
    <script type="text/javascript" language="javascript" src="{{ base_url('assets/public/js/slidetoggle.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ base_url('assets/public/css/slidetoggle.css') }}">
</head>
<body>
    @include('layout/sidebar')
    Here is content section 1
    <span class="toggle">
        <a href="#" style="cursor:pointer;">show hidden container</a>
    </span>
    <div class="hiddenDiv" style="border:#030 1px solid; background-color:#CEFFDB; width:400px;">
        Content I want to hide then slide into view for section 1
        <br/><br/>
        I can put any website elements I wish to in here, and style it any way I please.
    </div>
    <hr/>
    Here is content section 2

    <span class="toggle">
        <a href="#" style="cursor:pointer;" onClick="return false">show hidden container</a>
    </span>

    <div class="hiddenDiv" style="border:#06c 1px solid; background-color:#CEE7FF; width:400px;">
        Content I want to hide then slide into view for section 2
        <br/><br/>
        I can put any website elements I wish to in here, and style it any way I please.
    </div>
    <hr/>

@include('layout/footer')
</body>
</html>