<?php
echo "process_edit_promotion.php is being called!";
?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$promotion_id = $_POST["promotion_id"];
	$promotion_status = $_POST["promotion_status"];

	$data = array(
		"promotion_status" => $promotion_status,
	);

	$json_data = json_encode($data);

	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3000/api/habeauty/promotion/' . $promotion_id,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'PUT',
		CURLOPT_POSTFIELDS => $json_data,
		CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json',
		),
	));

	$response = curl_exec($curl);

	if ($response === false) {
		echo "Cập nhật thông tin không thành công!";
		echo "Error: " . curl_error($curl);
	} else {
		header("Location: table_habeauty.php");
		exit;
	}

	curl_close($curl);
}
?>
