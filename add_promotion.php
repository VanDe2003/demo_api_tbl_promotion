<!DOCTYPE html>
<html>
<head>
  <title>Add Promotion</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Add New Promotion</h2>
    <form method="post" action="process_add_promotion.php">
      <div class="form-group">
        <label for="promotion_id">ID:</label>
        <input type="text" class="form-control" id="promotion_id" name="promotion_id" required>
      </div>
      <div class="form-group">
        <label for="promotion_name">Name:</label>
        <input type="text" class="form-control" id="promotion_name" name="promotion_name" required>
      </div>
      <div class="form-group">
        <label for="promotion_start_time">Start Time:</label>
        <input type="text" class="form-control" id="promotion_start_time" name="promotion_start_time" required>
      </div>
      <div class="form-group">
        <label for="promotion_end_time">End Time:</label>
        <input type="text" class="form-control" id="promotion_end_time" name="promotion_end_time" required>
      </div>
      <div class="form-group">
        <label for="promotion_describe">Describe:</label>
        <input type="text" class="form-control" id="promotion_describe" name="promotion_describe" required>
      </div>
      <div class="form-group">
        <label for="promotion_status">Status:</label>
        <input type="text" class="form-control" id="promotion_status" name="promotion_status" required>
      </div>
      <button type="submit" class="btn btn-primary">Add Promotion</button>
    </form>
  </div>
</body>
</html>
