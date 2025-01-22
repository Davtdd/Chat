<?php
$id = mysqli_connect("localhost","root","", "chat");
if(isset($_POST["bout"])){
    $pseudo = $_POST["pseudo"];
    $message = $_POST["message"];
    // echo "$pseudo : $message";
    // insert pour introduire des element dans une base de donnee
    $req = "insert into messages (pseudo, message , date) values ('$pseudo', '$message',now())";
    $res = mysqli_query($id, $req);
    // mysqli_query pour executer la requete
}
// isset veut dire ce qui est definie ou existe  



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenue</h1>

        <div class="messages">
            <ul>
                <?php
                $req = "SELECT * FROM messages order by date desc";
                $res = mysqli_query($id, $req);
                while($ligne = mysqli_fetch_assoc($res)){
                    echo "<li class='mess'>$ligne[pseudo] : $ligne[message] : $ligne[date]</li>";
                    // echo "<li class='mess'>".$ligne["pseudo"].": ".$ligne["date"]."-". $ligne["message"]."</li>";



                }




               ?>
            </ul>
        </div>

        <div class="formulaire">
            <form action="" method="post">
                <input type="text" name="pseudo" placeholder="pseudo" required>
                <input type="text" name="message" placeholder="Messages" required>
                <input type="submit" value="Envoyer" name="bout">
                <br>
            </form>
        </div>
    </div>
    
    
    
    
    
    
    
    
    <?php














    ?>
    
</body>
</html>