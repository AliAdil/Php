<?php 

function dd ($data){
     echo '<pre>';
     var_dump ($data);
     echo '</pre>';
 }

 function ageRest($age){
     if($age < 21){
         echo 'Tata Bye Bye You are to young to join this CLUB';
     }
     else
     echo 'TADA come on Come in WELLCOME!!';
 }