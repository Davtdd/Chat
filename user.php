<?php
$id = mysqli_connect("localhost","root","", "chat");
if(isset($_POST["bout"])){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mdp = $_POST["mdp"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    echo "$nom $prenom $mdp $email $role";
    // echo "$pseudo : $message";
    // insert pour introduire des element dans une base de donnee
    $req = "insert into user (nom, prenom ,mdp ,email, role ) values ('$nom', '$prenom','$mdp','$email','role')";
    $res = mysqli_query($id, $req);
    // mysqli_query pour executer la requete
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h3>Formulaire d'inscription</h3>
    <form action="" method="post" class="container">
    <?php
                $req = "SELECT * from user order by date asc";
                $res = mysqli_query($id, $req);
                while($ligne = mysqli_fetch_assoc($res)){
                    echo "<li class='mess'>$ligne[pseudo] : $ligne[message] : $ligne[date]</li>";
                    // echo "<li class='mess'>".$ligne["pseudo"].": ".$ligne["date"]."-". $ligne["message"]."</li>";



                }
               ?>




        <label for="" name="nom">Nom<input type="text" name="nom"></label> <br><br>
        <label for="" name="prenom">Prenom<input type="text" name="prenom"></label> <br><br>
        <label for="" name="role">Role<input type="text" name="role"></label> <br><br>
        <label for="" name="email">Email<input type="text" name="email"></label> <br><br>
        <label for="">Mots de passe<input type="password" name="mdp" id=""></label><br><br>
        <input type="submit" value="Envoyer" name="bout">



    </form>
</body>
</html>