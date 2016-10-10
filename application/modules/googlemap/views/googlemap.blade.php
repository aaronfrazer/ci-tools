<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Google Map</title>
    @include('layout/header')
</head>
<body>
@include('layout/sidebar')

<h4>This map is rendered by using iFrame and google map as the source.</h4>

<hr/>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3059.5433437388306!2d-77.65193828433962!3d39.929234479424736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c99e8110bcaab7%3A0xcd8388d669c8164b!2s438+7th+St%2C+Chambersburg%2C+PA+17201!5e0!3m2!1sen!2sus!4v1465712365773" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

@include('layout/footer')
</body>
</html>