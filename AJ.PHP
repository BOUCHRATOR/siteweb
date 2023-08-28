<?php
    if(isset($_POST['retour'])){
      header("location:INDEX.HTML");
    exit;
    }
    
     if(isset($_POST['valider'])){
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
               
    $connexion=mysqli_connect("localhost","root","");
    if(!$connexion){echo "desole,la connexion est imposible";exit;}
    if(!mysqli_select_db($connexion,"restaurant")){echo "desole,acces a la base est imposible";exit;}
    
    $requete=mysqli_query($connexion,"INSERT INTO sweet VALUES  ( '$nom','$pre','$tel','$loc','$BANC','$tacos','$burger','$san','$pan','$piz')");
   
    
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