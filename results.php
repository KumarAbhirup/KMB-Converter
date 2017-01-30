<!DOCTYPE html>
<html>
	<head>
			<title>Convert your number into KMB form</title>

			<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	<body>
	<div class="whole-page">
	<div class="answer">
		<?php
			$operational_number = $_GET['operational_number'];
			$kmb_number = array(
				'none' => $operational_number,
				'kilo' => $operational_number/1000,
				'million' => $operational_number/1000000,
				'billion' => $operational_number/1000000000,
			);
			$kmb_number['kilo'] = $kmb_number['kilo']."K";
			$kmb_number['million'] = $kmb_number['million']."M";
			$kmb_number['billion'] = $kmb_number['billion']."B";

			function get_the_kmb_number(){
				global $operational_number;
				global $kmb_number;
				if ($operational_number<1000){
					echo $operational_number;
				} else if($operational_number>=1000) if($operational_number<1000000){
					echo $kmb_number['kilo'];
				} else if($operational_number>=1000000) if($operational_number<1000000000){
					echo $kmb_number['million'];
				} else if($operational_number>=1000000000){
					echo $kmb_number['billion'];
				}
			}
			get_the_kmb_number();
		?>
	</div>
	</div>
	</body>
</html>