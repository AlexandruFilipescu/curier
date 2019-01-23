<?php

include_once('config.php');
include_once('template_parts/header.php');

?>

<main role="main" class="container">

<div class="starter-template">
  <img class="logo-create" src="\img\QS_logo.png">  
</div>

<form method="POST">
  <div class="form-group">
    <label for="exampleInputName">Nume si prenume expeditor</label>
    <input type="text" class="form-control"  placeholder="Nume si prenume expeditor" name="nume_expeditor">
  </div>
  <div class="form-group">
    <label for="exampleInputName">Nume si prenume destinatar</label>
    <input type="text" class="form-control"  placeholder="Nume si prenume destinatatar" name="nume_destinatar">
  </div>
  <div class="form-group">
    <label for="exampleInputDetails">Detalii expeditor</label>
    <input type="text" class="form-control detalii"  placeholder="Localitatea" name="localitate_expeditor">
    <br>
    <input type="text" class="form-control detalii"  placeholder="Judetul" name="judet_expeditor">
    <br>
    <input type="text" class="form-control detalii"  placeholder="Strada" name="strada_expeditor">
    <br>
    <input type="text" class="form-control detalii"  placeholder="Nr" name="numar_strada_expeditor">
  </div>
  <div class="form-group">
    <label for="exampleInputDetails">Detalii destinatar</label>
    <input type="text" class="form-control detalii"  placeholder="Localitatea">
    <br>
    <input type="text" class="form-control detalii"  placeholder="Judetul">
    <br>
    <input type="text" class="form-control detalii"  placeholder="Strada">
    <br>
    <input type="text" class="form-control detalii"  placeholder="Nr">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1" name="agree">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="create">Submit</button>
</form>

</main><!-- /.container -->
