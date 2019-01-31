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

