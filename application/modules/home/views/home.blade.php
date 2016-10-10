<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	@include('layout/header')
</head>
<body>
@include('layout/sidebar')

	<div id="container">
		<h1>Welcome to CodeIgniter!</h1>

		<div id="body">
			<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

			<p>If you would like to edit this page you'll find it located at:</p>
			<code>application/views/welcome_message.php</code>

		</div>

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>

	<script type="text/javascript" language="javascript" src="{{ base_url('assets/public/js/home.js') }}"></script>

@include('layout/footer')
</body>
</html>