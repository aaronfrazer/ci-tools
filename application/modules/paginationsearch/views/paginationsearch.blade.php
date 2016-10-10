<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ $data['title'] }}</title>
	<style type="text/css">
		.bg-border {
			border: 1px solid #ddd;
			border-radius: 4px 4px;
			padding: 15px 15px;
		}
	</style>
	@include('layout/header')
</head>
<body>
@include('layout/sidebar')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 well">
            <?php
            $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
            ?>
            {{ form_open("paginationsearch/search", $attr) }}
            <div class="form-group">
                <div class="col-md-6">
                    <input class="form-control" id="book_name" name="book_name" placeholder="Search for Book Name..." type="text" value="{{ set_value('book_name') }}" />
                </div>
                <div class="col-md-6">
                    <input id="btn_search" name="btn_search" type="submit" class="btn btn-danger" value="Search" />
                    <a href="{{ base_url(). "paginationsearch/index" }}" class="btn btn-primary">Show All</a>
                </div>
            </div>
            {{ form_close() }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2 bg-border">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Book Name</th>
                    <th>Author Name</th>
                    <th>ISBN</th>
                </tr>
                </thead>
                <tbody>
                @for ($i = 0; $i < count($data['booklist']); ++$i)
                <tr>
                    <td>{{ ($data['page']+$i+1) }}</td>
                    <td>{{ $data['booklist'][$i]->name }}</td>
                    <td>{{ $data['booklist'][$i]->author }}</td>
                    <td>{{ $data['booklist'][$i]->isbn }}</td>
                </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{ $data['pagination'] }}
        </div>
    </div>
</div>



@include('layout/footer')
</body>
</html>