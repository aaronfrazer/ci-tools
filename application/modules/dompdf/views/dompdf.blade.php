<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $data['title'] }}</title>
    @include('layout/header')
</head>
<body>
@include('layout/sidebar')

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>DomPDF Generation</h1>
                    <p>This button will generate a sample PDF document.</p>

                    <form name ="generatepdf" action="dompdf/generate_pdf" method="post">
                        <input type="submit" value="Generate">
                    </form>
                </div>
            </div>
        </div>

@include('layout/footer')
</body>
</html>