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
		<header class="chapter_head">
			<div class="chapter">
				<h1 class="chap_title">Human resources</h1>
			</div>
			<div class="search">
				<i class="fa fa-plus right" aria-hidden="true" id="addIcon"></i>
				<input type="search" placeholder="search...">
				<i id="filter_call" class="fa fa-filter" aria-hidden="true" role="button"></i>
				<i class="right fa fa-search" aria-hidden="true" id="searchIcon"></i>
			</div>
		</header>
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
		<?php
			echo "<tbody>";
			include "hr-db.php";
				$link = mysqli_connect($host, $username, $userpassword, $database);
				$all_result=mysqli_query($link,"select * from personel");
				$n=mysqli_num_rows($all_result);
				for ($i=0; $i<$n; $i++)
				{
					$one_personel=mysqli_fetch_array($all_result);
					echo 
					'<tr class="inf" id='.$one_personel['ID'].'><td>'.$one_personel['LastName'].' '.$one_personel['FirstName'].'</td>'.
					'<td>'.$one_personel['DOB'].'</td>'.
					'<td>'.$one_personel['Division'].'</td>'.
					'<td>'.$one_personel['Department'].'</td>'.
					'<td>'.$one_personel['Position'].'</td></tr>';
				}
			echo "</tbody>";
		?>
		</table>
	</main>
	<aside id="filter_slide">
		<div class="slide_bar">
			<header class="filter_head">
				<h4 class="slide_title">Filter</h4>
			</header>
			<div class="main_slide_cont">
				<h4 class="select_title">Full name</h4>
				<select class="filter_selector" id="filter_name">
					<option value=""></option>
					<option value="Green">Green</option>
					<option value="Serj">Serj</option>
					<option value="Santa">Santa</option>
					<option value="Pupkin">Pupkin</option>
					<option value="Vasya">Vasya</option>
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
				<input type="submit" id="exe_filter">
			</div>
		</div>
	</aside>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="script/actions.js" defer></script>
	<script type="text/javascript" src="script/side_bar_call.js" defer></script>
	<script type="text/javascript" src="script/filter.js" defer></script>
</body>
</html>