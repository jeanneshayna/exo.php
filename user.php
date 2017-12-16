<?php
session_start();
$sid="user" || "admin";
session_id($sid);

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
    <form action="" method="post">
<fieldset>
    <legend>Session</legend>
    <span>Pseudo</span><input type="text" name="pseudo"> <br/>
    <span>Mot de passe</span><input type="password" name="password"><br/>
    <select name="sid">
        <option value="">Profil</option>
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select><br/>
              <input type="submit" name="connexion" value="connexion">
</fieldset>
    </form>
    </body>
</html>
    <?php
 if (isset($_POST["connexion"])) {
     extract($_POST);
     if ($sid=="") {
         echo 'veuillez choisir un profil';
     }
     if ($sid=="user") {
        if ($pseudo=="user" && $password=="user") {

            $_SESSION["$sid"]==header("location:user-login.php");
            echo $_SESSION["$sid"];
        }
        elseif ($pseudo=="admin" && $password=="admin") {
            echo"Vous n'avez pas les droits requis";
        }
        else {
            echo"Pseudo ou password incorrect";
        }
     }
     elseif ($sid=="admin") {
         if ($pseudo=="admin" && $password=="admin") {

            $_SESSION["$sid"]==header("location:admin-login.php");
            echo $_SESSION["$sid"];
        }
        elseif ($pseudo=="user" && $password=="user") {
            echo"Vous n'avez pas les droits requis";
        }
        else {
            echo"Pseudo ou password incorrect";
        }
     }
 }
?>

