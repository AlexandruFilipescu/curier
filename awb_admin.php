<?php
include_once('config.php');
include_once('template_parts/header.php');

?>

<main role="main" class="container">

<div class="starter-template">
<div class="jumbotron">
<h1 class="display-4">Change order status here</h1>
<hr>

<html>
<body>

<?php
if(isset($_GET['awb'])) {
    $awb=$_GET['awb'];
    
}
?>

<form action="/awb_admin.php" method='POST'>
  <select class="btn btn-primary" name="Change_order_status">
    <option value="Order_status">Order status</option>
    <option value="Order_piched_up">Order piched up</option>
    <option value="Destination_reached">Destination reached</option>
    <option value="Delivered_to_customer">Delivered to customer</option>
  </select>
  <br>
  </form>

<?php

if(isset($_POST['validate_status'])) {
    $status = $_POST['status'];
    $insert_status = "INSERT into awb (status) values ('$status')";
    if($conn->query($insert_status) ) {
        header("Location: awb_admin.php");
    }
}
?>


</body>
</html>
<hr>
<div>
<center><a class="btn btn-primary" href="/awb_admin.php" role="button">Validate status</a></center>
</div>

</main><!-- /.container -->





<?php 
include_once('template_parts/footer.php');

?>