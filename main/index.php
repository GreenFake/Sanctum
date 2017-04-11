<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DataBase</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
	<header class="app_header">
		<div class="frame_app">
			<div class="app_title">
				<span class="icon" id="ham">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</span>
				<h1 class="sanctum">Sanctum Web Application</h1>
				<div id="chaper_menu">
					<h3 class="chapter" id="hr">Human resourses</h3>
					<h3 class="chapter" id="eq">Equipment</h3>
					<h3 class="chapter">Tags</h3>
					<h3 class="chapter">Certificates</h3>
				</div>
			</div>
			<div class="search">
				<input type="search" placeholder="search...">
				<button id="filter_call">
					<i class="fa fa-filter" aria-hidden="true"></i>
				</button>
			</div>
		</div>
	</header>
	<div class="main_frame">
		<iframe src="personal.php" name="chapter_container" id="chapter_selector"></iframe>
	</div>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" defer></script>
	<script type="text/javascript" src="script/actions.js" defer></script>
	<script type="text/javascript" src="jquery.table-filterable.js" defer></script>
	<script type="text/javascript" src="script/filter.js" defer></script>
	<script type="text/javascript" src="script/side_bar_call.js" defer></script>
</body>
</html>