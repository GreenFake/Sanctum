<!DOCTYPE html>
<html>
<head>
	<title>HR</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body>
	<div class="header">
		<h1 class="subheader">Human Resources</h1>
		<h1><i class="right fa fa-filter" aria-hidden="true" id="filtericon"></i></h1>
		<h1><i class="right fa fa-search" aria-hidden="true" id="searchicon"></i></h1>
		<input type="search" name="search" id="search" placeholder="Search...">
		<h1><i class="fa fa-plus right" aria-hidden="true" id="addicon"></i></h1>
	</div>
	<div class="table">
		<table>
			<thead>
				<tr>
					<th>Full Name</th>
					<th>DOB</th>
					<th>Division</th>
					<th>Department</th>
					<th>Position</th>
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
	'<tr class="somefield" id='.$one_personel['ID'].'><td>'.$one_personel['LastName'].' '.$one_personel['FirstName'].'</td>'.
	'<td>'.$one_personel['DOB'].'</td>'.
	'<td>'.$one_personel['Division'].'</td>'.
	'<td>'.$one_personel['Department'].'</td>'.
	'<td>'.$one_personel['Position'].'</td></tr>';
}
echo "</tbody>";
?>
		</table>
	</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$(".somefield").click(function(){
			window.id=$(this).attr("id");
			$.ajax({
				url:"cv.php",
				method:"POST",
				dataType:"html",
				data:{id:id},
				success: function(result){
        			$("body",window.parent.document).append(result);
				}
			})
		})
	})
</script>