<?php 

try {
  $db = new PDO("mysql:host=localhost;dbname=fietsenmaker","root","");
  $password = password_hash("geheim", PASSWORD_DEFAULT);

  $query = $db->prepare("INSERT INTO gebruikers(username, password) VALUES ('ik', '" . $password . "')");
  if ($query->execute()){
    echo "De nieuwe gegevens zijn toegevoegd. ";
  } else{
    echo "Er is een fout opgetreden!";
  }
} catch(PDOException $e){
  die("Error!: " . $e->getMessage());
}

?>