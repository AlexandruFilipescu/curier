<?php
include_once('config.php');
include_once('template_parts/header.php');

?>



<main role="main" class="container">

<div class="starter-template">
<div class="jumbotron">
  <h1 class="display-4">Tracking Number</h1>
  <p class="lead">Insert the tracking number</p>
  <hr>
  <form action="awb_verify.php" method="get">
  <input type="text" name="awb"><br><br>
  <button class="btn btn-primary" type="submit" name="report">Verify</button>
</form>
</div>
</div>

</main><!-- /.container -->

<?php 
include_once('template_parts/footer.php');

?>