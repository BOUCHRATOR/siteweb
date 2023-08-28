<?php
    if(isset($_POST['retour'])){
      header("location:INDEX.HTML");
    }
    $nom=$_POST['nom'];
     $pre=$_POST['prenom'];
      $tel=$_POST['tel'];
       $loc=$_POST['loc'];
        $BANC=$_POST['BAN'];
        $tacos=$_POST['poler'];
         $burger=$_POST['po'];
          $san=$_POST['p'];
             $pan=$_POST['pol1'];
              $piz=$_POST['pol2'];
          $sal =  $_POST['pol3'];
           $souc = $_POST['pol4'];
          $frit=  $_POST['pol5'];
            $pan1=  $_POST['pol6'];
     if(isset($_POST['valider'])){
      $connexion=mysqli_connect("localhost","root","");
    if(!$connexion){echo "desole,la connexion est imposible";exit;}
    if(!mysqli_select_db($connexion,"restaurant")){echo "desole,acces a la base est imposible";exit;}
    $requete=mysqli_query($connexion,"INSERT INTO rest VALUES( '$nom','$pre','$tel','$loc','$BANC','$tacos','$burger','$san','$pan','$piz', '$sal' ,'$souc' ,'$frit','$pan1')");
    if(!$requete){
      echo "il ya un erreur";
    }
    mysqli_close($connexion);
    echo"<script>alert('votre commande et valider, bravo!!');</script>";
   header("Refresh: 0; url=INDEX.HTML");
}
 else{
   echo "Form not submitted!"; 
 }
   ?>