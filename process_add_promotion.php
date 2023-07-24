<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3000/api/habeauty/promotion',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => json_encode($_POST),
		CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json',
		),
	));

	$response = curl_exec($curl);

	if ($response === false) {
		echo "Error: " . curl_error($curl);
	} else {
		header("Location: table_habeauty.php");
		exit;
	}

	curl_close($curl);
}
?>
