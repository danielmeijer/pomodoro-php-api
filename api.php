<?php
include "includes/functions.php";

// If you doesn't want authentication, just comment $token
//$token="dbfsdbsfdh";

if(isset($token)) {
	$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$verifyToken= parse_url($url, PHP_URL_QUERY);

	if ($verifyToken == "token=".$token) {
		pomodoro();
	}
	else{
		$response = array(
		'status' => false,
		'data' => 'Forbidden. Token Invalid'
		);
		echo json_encode($response);
	}
}else {
  pomodoro();
}

?>
