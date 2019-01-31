<?php
include_once('config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Sho.Rt - The Best URL Shortener</title>
  </head>
  <body>

  <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
      <h3>







      <?php
        include_once('config.php');
        // Pentru a Genera un string(AWB) nou de 12 caratere si pentru a il insera in baza de date.
        // Trebuie doar sa folosesti echo generare_string_nimereala() pentru a crea un string nou, dar si
        // pentru a il insera in baza de date, poti schimba lungimea sirului daca intre acolade, scrii $lungime = 10 
        function  generare_string_nimereala($lungime = 12){
                    $caractere = '0123456789';
                    $lungime_caractere = strlen($caractere);
                    $string_nimereala = '';
        
                    for($i = 1; $i<=$lungime; $i++){
                        $string_nimereala .= $caractere[rand(0, $lungime_caractere-1)];
                    }
                    return $string_nimereala;
                }
        
                $awb =  generare_string_nimereala();
        
                
        
                $awb_insert = "INSERT INTO awb(awb,nume_prenume_expeditor,nume_prenume_destinatar,detalii_expeditor,detalii_destinatar,data,status) values('$awb','','','','','2019-02-03','')";
                
                // echo $awb_insert;
        
        
                $conn->query($awb_insert) or die(mysqli_error($conn));



      ?>
      
      









      </h3>
        
      </div>
      <div class="col-4 text-center">
     <?php   //Cand ne-am locat username-ul ?>
     
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>