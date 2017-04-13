<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Equipment</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style_equip.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
	<main>
		<header class="chapter_head">
			<div class="chapter">
				<h1 class="chap_title">Instruments</h1>
			</div>
			<div class="search">
				<i class="fa fa-plus right" aria-hidden="true" id="addIcon"></i>
				<input type="search" placeholder="search...">
				<i id="filter_call" class="fa fa-filter" aria-hidden="true" role="button"></i>
				<i class="right fa fa-search" aria-hidden="true" id="searchIcon"></i>
			</div>
		</header>
			<table class="info_table">
				<thead>
					<tr>
						<th class="row_title">
							Number
						</th>
						<th class="row_title">
							Name
						</th>
						<th class="row_title">
							Condition
						</th>
						<th class="row_title">
							Status
						</th>
						<th class="row_title">
							Location
						</th>
					</tr>
				</thead>
				<tr>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
				</tr>
				<tr>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
				</tr>
				<tr>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
				</tr>
				<tr>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
				</tr>
				<tr>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
					<td>test</td>
				</tr>
			</table>
		</main>
		<aside id="filter_slide">
			<div class="slide_bar">
				<header class="filter_head">
					<h4 class="slide_title">Filter</h4>
				</header>
				<div class="main_slide_cont">
					<h4 class="select_title">Full name</h4>
					<select class="filter_selector" name="" id="filter_name">
						<option value=""></option>
						<option value="">Green</option>
						<option value="">Serj</option>
						<option value="">Santa</option>
						<option value="">Pupkin</option>
						<option value="">Vasya</option>
					</select class="filter_selector">
					<h4 class="select_title">DOB</h4>
					<select class="filter_selector" name="" id="">
						<option value=""></option>
					</select class="filter_selector">
					<h4 class="select_title">Division</h4>
					<select class="filter_selector" name="" id="">
						<option value=""></option>
					</select class="filter_selector">
					<h4 class="select_title">Department</h4>
					<select class="filter_selector" name="" id="">
						<option value=""></option>
					</select class="filter_selector">
					<h4 class="select_title">Position</h4>
					<select class="filter_selector" name="" id="">
						<option value=""></option>
					</select class="filter_selector">
				</div>
			</div>
		</aside>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="script/actions.js" defer></script>
		<script type="text/javascript" src="script/side_bar_call.js" defer></script>
		<script type="text/javascript" src="script/filter.js" defer></script>
</body>
</html>