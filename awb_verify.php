<?php
include_once('config.php');
include_once('template_parts/header.php');
include_once('functions.php');
?>

<?php
$awb = $_GET['awb'];
$query = "SELECT * FROM awb WHERE awb='$awb'";
echo "<h1><b> <center>Order Details</center> </b></h1> <br> <br>";
 
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
?>
<center><a class="btn btn-primary" href="/verify.php" role="button">Verify another</a></center>
<?php 
include_once('template_parts/footer.php');

?>