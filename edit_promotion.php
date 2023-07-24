<?php
$promotion_id = $_GET["promotion_id"];
$promotion_status = $_GET["promotion_status"];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Chỉnh sửa khuyến mãi</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Chỉnh sửa khuyến mãi</h2>
    <form method="post" action="process_edit_promotion.php" id="editPromotionForm">
      <input type="hidden" id="promotion_id" name="promotion_id" value="<?php echo $promotion_id; ?>">
      <div class="form-group">
        <label for="promotion_status_edit">Status</label>
        <input type="text" class="form-control" id="promotion_status_edit" name="promotion_status" value="<?php echo $promotion_status; ?>" required>
      </div>
      <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
  </div>

</body>
</html>
