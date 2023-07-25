<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Promotion Data</h2>
    <a href="add_promotion.php" class="btn btn-primary">Thêm khuyến mãi</a>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Start Time</th>
          <th>End Time</th>
          <th>Describe</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "beauti";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT promotion_id, promotion_name, promotion_start_time, promotion_end_time, promotion_describe, promotion_status FROM promotion";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $row["promotion_id"] . "</td>";
		echo "<td>" . $row["promotion_name"] . "</td>";
		echo "<td>" . $row["promotion_start_time"] . "</td>";
		echo "<td>" . $row["promotion_end_time"] . "</td>";
		echo "<td>" . $row["promotion_describe"] . "</td>";
		echo "<td>" . $row["promotion_status"] . "</td>";
		echo "<td>
          <a href='edit_promotion.php?promotion_id=" . $row["promotion_id"] . "&promotion_status=" . $row["promotion_status"] . "' class='btn btn-primary'>Sửa</a>
          <a href='process_delete_promotion.php?promotion_id=" . $row["promotion_id"] . "' class='btn btn-danger' onclick=\"return confirm('Bạn có chắc chắn muốn xóa khuyến mãi này?')\">Xóa</a>
          </td>";
		echo "</tr>";
	}
} else {
	echo "<tr><td colspan='7'>No data available</td></tr>";
}

$conn->close();
?>
   </tbody>
 </table>
</div>
</body>
</html>
