<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Twitter Goodies</title>
    @include('layout/header')
    <script type="text/javascript" language="javascript" src="{{ base_url('assets/public/js/twitter.js') }}"></script>
</head>
<body>
@include('layout/sidebar')


<h4>Enter a Twitter URL to view tweets</h4>
<strong>URL:</strong> http://www.twitter.com/<input type="text" id="url" />
<br/><br/>
<button type="button" id="submit">View Tweets!</button>
<hr/>

<div id="feed"></div>


@include('layout/footer')
</body>
</html>