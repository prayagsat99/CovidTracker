<?php

	$jsonData= file_get_contents("https://api.covidindiatracker.com/state_data.json");
	$data= json_decode($jsonData, true);

	foreach ($data as $key => $value) {
		$days_count=count($value)-1;
		$days_count_prev=$days_count-1;
	}

?>