<?php
session_start();

if (!isset($_SESSION['firstname'])) {
    $_SESSION['msg'] = "You must be logged in first";
    header('location: Login.php');
}
include('crud.php');
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($db, "SELECT * FROM _ WHERE id=$id");

    if (count($record) == 1 ) {
        $n = mysqli_fetch_array($record);
        $name = $n['address'];
        $address = $n['phone_number'];
        $pickup_date = $n['pickup_date'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry form</title>
</head>
<body>
    <form method="post" action="server.php" >
        <div class="input-group">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        </div>
        <div class="input-group">
            <label>Address</label>
            <input type="text" name="name" value="<?php echo $address; ?>">
        </div>
        <div class="input-group">
            <label>Phone Number</label>
            <input type="text" name="phone_number" value="<?php echo $phone_number; ?>">
        </div>
        <div class="input-group">
            <label>Pickup date</label>
            <input type="datetime" name="pickup_date" value="<?php echo $pickup_date; ?>">
        </div>
        <div class="input-group">
                <?php if ($update == true): ?>
                    <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
                <?php else: ?>
                    <button class="btn" type="submit" name="save" >Save</button>
                <?php endif ?>
                </div>
    </form>

</body>
</html>
