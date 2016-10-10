<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $data['title'] }}</title>
    @include('layout/header')
    <script type="text/javascript" language="javascript" src="{{ base_url('assets/public/js/slider.js') }}"></script>
</head>
<body>
@include('layout/sidebar')

    <br />
    <div class="row">
        <div class="col-sm-4">
            <input type="range" min="0" max="100" value="50" step="10" onchange="sliderChange(this.value)" />
        </div>
    </div>

    Slider Value = <span id="sliderStatus">50</span>


@include('layout/footer')
</body>
</html>