<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $data['title'] }}</title>
    <link rel="stylesheet" type="text/css" href="{{ base_url('assets/public/css/clock.css') }}">
    @include('layout/header')
</head>
<body>
@include('layout/sidebar')

<div id="clockDisplay" class="clockStyle">1</div>


<script type="text/javascript" language="javascript" src="{{ base_url('assets/public/js/clock.js') }}"></script>

@include('layout/footer')
</body>
</html>