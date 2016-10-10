<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Agent</title>
    @include('layout/header')
</head>
<body>
@include('layout/sidebar')


{{ $data['agent'] }}

<h2>You are using: <em>{{ $data['browser'] }} - {{ $data['os'] }}</em></h2>


@include('layout/footer')
</body>
</html>