<?php
include_once('config.php');
include_once('template_parts/header.php');

?>



<main role="main" class="container">

<div class="starter-template">
  <h1>Quicksilver Express Courier </h1>
  <img class="logo" src="\img\QS_logo.png">  
</div>
<div class="row buttons-row">
  <a href="create.php">
  <button type="button" class="btn btn-primary button">Place order</button>
  </a>
  <a href="verify.php">
  <button type="button" class="btn btn-primary button">Verify order</button>
  </a>
</div>

</main><!-- /.container -->

<?php 
include_once('template_parts/footer.php');

?>