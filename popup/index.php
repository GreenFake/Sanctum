<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>popUp</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="frame">
		<div class="caller">
			<a href="#issue_pop" class="btn" id="issue_btn">ISSUE</a>
			<a href="#return_pop" class="btn" id="return_btn">RETURN</a>
		</div>
		<div class="modal" id="issue_pop">
			<div class="popup">
				<a class="close_btn" href="#">&times;</a>	
				<header>
					<h1>Issue #</h1>
				</header>
				<div class="inner_frame">
	<?php 

		$connection = mysqli_connect('127.0.0.1', 'root', '123', 'Components_DB');

		if ($connection == false) {
					echo "NO CONNECTION" . "<br>",
					mysqli_connect_error();
				die();
		} 

		$users = mysqli_query($connection, "SELECT * FROM people");
		$location = mysqli_query($connection, "SELECT * FROM location");

	 ?>
	 			<div class="top">
	 				<table id="issuer_info">
	 					<tr>
	 						<td>
	 							<h1 class="selector_title">Issuer:</h1>
	 							<select name="" id="">
	 							<option selected></option>

								<?php 
									foreach ($users as $name) {
								?>
									<option>
										<?php print_r($name["name"]); ?>
									</option>
								<?php
									}
								?>

								</select>
	 						</td>
	 					</tr>
	 					<tr>
	 						<td>
	 							<h1 class="selector_title">Location: </h1>
	 							<select name="" id="">
	 							<option selected></option>

								<?php 
									foreach($location as $place) {
								?>
									<option value="">
										<?php print_r($place["title"]); ?>
									</option>
								<?php 
									}
								?>

								</select>
	 						</td>
	 					</tr>
	 				</table>
	 				<table id="date_info">
	 					<tr>
	 						<td>
	 							<h1 class="selector_title">Issue date:</h1>
	 							<form action="">
	 								<input type="date">
	 							</form>
	 						</td>
	 					</tr>
	 					<tr>
	 						<td>
	 							<h1 class="selector_title">Return date: </h1>
								<form action="">
	 								<input type="date">
	 							</form>
	 						</td>
	 					</tr>
	 				</table>
	 			</div>
	 			<div class="main">
	 				<table>
						<tr>
							<th>Main tools</th>
							<th>Additional components</th>
							<th>Don't forget to take</th>
						</tr>
						<tr>
							<td>
								<form class="box_frame">
									<input type="checkbox" class="box">
									<h1 class="box_title">Instrument</h1>
								</form>
							</td>
							<td>
								<form action="" class="box_frame">
									<input type="checkbox" class="box">
									<h1 class="box_title">Izolenta</h1>
								</form>
								<select>
									<option value=""></option>
								</select>
							</td>
							<td>
								<form class="box_frame">
									<input type="checkbox" class="box">
									<h1 class="box_title">Batteries</h1>
								</form>
							</td>
						</tr>
						<tr>
							<td>
								<form class="box_frame">
									<input type="checkbox" class="box">
									<h1 class="box_title">Instrument</h1>
								</form>
							</td>
							<td>
								<form action="" class="box_frame">
									<input type="checkbox" class="box">
									<h1 class="box_title">Izolenta</h1>
								</form>
								<select>
									<option value=""></option>
								</select>
							</td>
							<td>
								<form class="box_frame">
									<input type="checkbox" class="box">
									<h1 class="box_title">Golova</h1>
								</form>
							</td>
						</tr>
						<tr>
							<td>
								<form class="box_frame">
									<input type="checkbox" class="box">
									<h1 class="box_title">Instrument</h1>
								</form>
							</td>
							<td>
								<form action="" class="box_frame">
									<input type="checkbox" class="box">
									<h1 class="box_title">Izolenta</h1>
								</form>
								<select>
									<option value=""></option>
								</select>
							</td>
							<td>
								<form class="box_frame">
									<input type="checkbox" class="box">
									<h1 class="box_title">Ruki</h1>
								</form>
							</td>
						</tr>
						<tr>
							<td>
								<form class="box_frame">
									<input type="checkbox" class="box">
									<h1 class="box_title">Instrument</h1>
								</form>
							</td>
							<td>
								<form action="" class="box_frame">
									<input type="checkbox" class="box">
									<h1 class="box_title">Izolenta</h1>
								</form>
								<select>
									<option value=""></option>
								</select>
							</td>
							<td>
								<form class="box_frame">
									<input type="checkbox" class="box">
									<h1 class="box_title">Mozgi</h1>
								</form>
							</td>
						</tr>
					</table>
	 			</div>
	 			<div class="bottom">
	 				<form action="" class="comment_frame">
	 					<input type="text" class="comment" placeholder="Comments...">
	 				</form>
	 				<button class="final_button">Issue Item</button>
	 			</div>

	<?php 
		mysqli_close($connection);
	 ?>
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" defer></script>
</body>
</html>