<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>My laundry</title>
</head>
<body>
    <?php if (isset($_SESSION['message'])): ?>
        <div class="msg">
            <?php 
                echo $_SESSION['message']; 
                unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>
    <?php $results = mysqli_query($db, "SELECT * FROM _"); ?>
<table class="table">
  <thead>
    <tr>
      <th>Address</th>
      <th>Phone Number</th>
      <th>Pickup date</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    
    <?php while($row = fetch_array($result)){ ?> 
        <tr>
            <td><?php $row['address']; ?></td>
            <td><?php $row['phone_number']; ?></td>
            <td><?php $row['pickup_date']; ?></td>
            <td>
                <a class="edit" href="laundryform.php?edit=<?php echo $row['id']; ?>">Edit</a>
                <a class="delete" href="delete.php?=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
   
  </tbody>
</table>
</body>
</html>