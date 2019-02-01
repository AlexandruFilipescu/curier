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

    $query = "SELECT * FROM awb WHERE awb='$awb'";

    if ($result = $conn->query($query)) {

        if($result->num_rows > 0){
       
          while ($row = $result->fetch_assoc()) {
              $field1name = $row["nume_prenume_expeditor"];
              $field2name = $row["nume_prenume_destinatar"];
              $field3name = $row["detalii_expeditor"];
              $field4name = $row["detalii_destinatar"];
              $field5name = $row["awb"];
              $field6name = $row["data"];
              $field7name = $row["status"];
          }
       
          echo '<main role="main" class="container">';
      
      
          echo '<ul class="list-group">';
          echo '<list-group-item list-group-item-primary>Sender Name</li>';
            echo '<li class="list-group-item list-group-item-info">'.$field1name.'</li>';
          echo '<list-group-item list-group-item-primary>Reciever Name</li>';
            echo '<li class="list-group-item list-group-item-info">'.$field2name.'</li>';
          echo '<list-group-item list-group-item-primary>Sender Details</li>';
            echo '<li class="list-group-item list-group-item-info">'.$field3name.'</li>';
          echo '<list-group-item list-group-item-primary>Reciever Details</li>';
            echo '<li class="list-group-item list-group-item-info">'.$field4name.'</li>';
          echo '<list-group-item list-group-item-primary>Tracking Number</li>';
            echo '<li class="list-group-item list-group-item-info">'.$field5name.'</li>';
          echo '<list-group-item list-group-item-primary>Date</li>';
            echo '<li class="list-group-item list-group-item-info">'.$field6name.'</li>';
          echo '<list-group-item list-group-item-primary>Status</li>';
          echo '<li class="list-group-item list-group-item-info">'.$field7name.'</li>';
          echo '<list-group-item list-group-item-primary>Barcode</li>';
          echo '<li class="list-group-item list-group-item-info">'.generare_cod_bare().'</li>';
          echo '</ul>';
          
          echo '</main>';
      
      
        }
        else{
          echo'<h1>Order not found</h1>';
        }
      }
    
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