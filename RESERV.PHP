<?php
    if(isset($_POST['retour'])){
      header("location:INDEX.HTML");
    exit;
    }
    
     if(isset($_POST['valider'])){

         $nom=is_string($_POST['nom']);
     $pre=is_string($_POST['prenom']);
      $tel= is_string($_POST['tel']);
       $loc=is_string($_POST['loc']);
        $BANC=is_string($_POST['BAN']);
        $tacos=is_string($_POST['dat']);
         $burger=is_string($_POST['BAy']);
          $san=is_string($_POST['Bt']);
             $pan=is_string($_POST['BANS']);
             
               
    $connexion=mysqli_connect("localhost","root","");
    if(!$connexion){echo "desole,la connexion est imposible";exit;}
    if(!mysqli_select_db($connexion,"restaurant")){echo "desole,acces a la base est imposible";exit;}
    
    $requete=mysqli_query($connexion,"INSERT INTO reserv VALUES  ( '$nom','$pre','$tel','$loc','$BANC','$tacos','$burger','$san','$pan')");
   
    
    if(!$requete){
      echo "il ya un erreur";
    }
    mysqli_close($connexion);
    echo "<script> alert('votre commande et valider, bravo!!');</script>";
   header("Refresh: 0; url=INDEX.HTML");
}
 else{
   echo "Form not submitted!"; 
 }

  ?>