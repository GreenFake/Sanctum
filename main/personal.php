<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personal</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style_pers.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
	<main>
		<div class="chapter">
			<h1 class="chap_title">Human resources</h1>
		</div>
		<table id="personal_table" class="info_table">
			<thead>
				<tr>
					<th class="row_title">
						Full name
					</th>
					<th class="row_title">
						DOB
					</th>
					<th class="row_title">
						Division
					</th>
					<th class="row_title">
						Department
					</th>
					<th class="row_title">
						Position
					</th>
				</tr>
		</thead>
			<tr class="inf">
				<td>Green</td>
				<td>test</td>
				<td>test</td>
				<td>test</td>
				<td>test</td>
			</tr>
			<tr class="inf">
				<td>Serj</td>
				<td>test</td>
				<td>test</td>
				<td>test</td>
				<td>test</td>
			</tr>
			<tr class="inf">
				<td>Santa</td>
				<td>test</td>
				<td>test</td>
				<td>test</td>
				<td>test</td>
			</tr>
			<tr class="inf">
				<td>Pupkin</td>
				<td>test</td>
				<td>test</td>
				<td>test</td>
				<td>test</td>
			</tr>
			<tr class="inf">
				<td>Vasya</td>
				<td>test</td>
				<td>test</td>
				<td>test</td>
				<td>test</td>
			</tr>
			<tr class="inf">
				<td>test</td>
				<td>test</td>
				<td>test</td>
				<td>test</td>
				<td>test</td>
			</tr>
			<tr class="inf">
				<td>test</td>
				<td>test</td>
				<td>test</td>
				<td>test</td>
				<td>test</td>
			</tr>
			<tr class="inf">
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="script/actions.js" defer></script>
	<script type="text/javascript" src="script/jquery.table-filterable.js"></script>
	<script type="text/javascript" src="script/filter.js"></script>
	<script type="text/javascript" src="script/side_bar_call.js" defer></script>
</body>
</html>