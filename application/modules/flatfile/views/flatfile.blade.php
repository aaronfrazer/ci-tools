<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ $data['title'] }}</title>
	@include('layout/header')
</head>
<body>
@include('layout/sidebar')


Location of the <a href="{{ $data['fileloc'] }}">flat file</a>.
<br/><br/><hr/>
Hello user you can use this form to edit the writing on your live website
{{ form_open('flatfile/submit') }}
	{{ form_textarea('ta', str_replace('<br />', '', $data['file']), 'cols="64" rows="10"') }}
	<br/><br/>
	{{ form_submit('myBtn', 'Submit') }}
{{ form_close() }}
<br/><br/><hr/>

{{ $data['file'] }}


@include('layout/footer')
</body>
</html>