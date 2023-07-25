<?php

if (isset($_GET["promotion_id"])) {
	$promotion_id = $_GET["promotion_id"];

	if (!is_string($promotion_id)) {
		echo "Lỗi: promotion_id không hợp lệ.";
		exit();
	}

	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3000/api/habeauty/promotion/' . $promotion_id,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'DELETE',
		CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json',
		),
	));

	$response = curl_exec($curl);

	curl_close($curl);

	echo $response;

	header("Location: table_habeauty.php");
	exit();
} else {
	echo "Lỗi: Không có promotion_id được cung cấp.";
	exit();
}
