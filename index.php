<!DOCTYPE html>
<html lang="en">
<head>
	<title>Encoders Unlimited</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="shortcut icon" type="image/png" href="images/icon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
.image_respons{
	max-width:100%;
	height:auto;
}
</style>
</head>
<body>
	<div class="container-fluid">
		<img src="images/header.jpg" class="image_respons" alt="Encoders Unlimited">
	</div>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<!-- corona live cases heading -->
								<tr class="row100 head">
									<th class="cell100 column1">LAST CORONA UPDATE</th>
									<th class="cell100 column2">STATES</th>
									<th class="cell100 column3">CONFIRM CASE</th>
									<th class="cell100 column4">ACTIVE</th>
									<th class="cell100 column5">RECOVERED</th>
									<th class="cell100 column6">DEATHS</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<!-- fetch data from API -->
								<?php
								// URL
									$url = "https://api.covid19india.org/data.json";
									$result = file_get_contents($url);
									$data = json_decode($result,true);
									//echo "<pre>";
									//print_r($data);
									$state_count = count($data['statewise']);

									$i = 0;
									while($i < $state_count)
									{
								?>

								<tr class="row100 body">
									<!-- show data from API -->
									<td class="cell100 column1"><?php echo $data['statewise'][$i]['lastupdatedtime'] ?></td>
									<td class="cell100 column2"><?php echo $data['statewise'][$i]['state'] ?></td>
									<td class="cell100 column3"><?php echo $data['statewise'][$i]['confirmed'] ?></td>
									<td class="cell100 column4"><?php echo $data['statewise'][$i]['active'] ?></td>
									<td class="cell100 column5"><?php echo $data['statewise'][$i]['recovered'] ?></td>
									<td class="cell100 column5"><?php echo $data['statewise'][$i]['deaths'] ?></td>
								</tr>

								<?php
										$i++;
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<img src="images/footer.jpg" class="image_respons" alt="Encoders Unlimited">
	</div>


	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});	
	</script>
	<script src="js/main.js"></script>

</body>
</html>