<?php
include_once('config.php');
include_once('src/BarcodeGenerator.php');
include_once('src/BarcodeGeneratorHTML.php');
include_once('src/BarcodeGeneratorSVG.php');

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



        
        function generare_cod_bare(){
            global $awb;
            $generator = new Picqer\Barcode\BarcodeGeneratorSVG();
            return $generator->getBarcode($awb, $generator::TYPE_CODE_128);
      }

      echo generare_cod_bare();


      ?>

