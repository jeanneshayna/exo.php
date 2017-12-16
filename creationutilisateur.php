
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	if (isset($_POST['valider'])) {
		extract($_POST);
		$fin= "fin \r\n";
		function Genere_Password($size)
  {
	   $characters = array(0, 1, 2, 3, 4, 5, 6, "a", "b", "c", "d");
	   for($i=0;$i<$size;$i++)

	  {
		$password = ($i%2) ? strtoupper($characters[array_rand($characters)]) : $characters[array_rand($characters)];
	   }
	     return $password;
  }
    $mon_mot_de_passe = Genere_Password(8);
    
    $f = "fichiers.txt";

    $monfichier = fopen($f, "a");
    $existe=false;
        for($i=0; $i<10; $i++)
                        {
                            $monfichier = fgets($monfichier);
                            $donnee = explode("-",$monfichier);
                            $login0=strval($donnee[0]);
                            if($login==strval($login0))
                            {
                                $nbre_de_login++;
                            }
                        }
                        fclose($monfichier);
                        if(isset($nbre_de_login) && ($nbre_de_login>=1))
                        {
                            echo"Désolé ce nom d'utilisateur existe déja, Svp choisisez un autre";
                        }
                        else
                        {
                            $_SESSION['new']='new_visiteur';
                            $_SESSION['new_profil'] = $profil;
                            $_SESSION['new_login'] = $login;
                            header("location: user.php");
                        }
        
}
 fclose($monfichier);

 
   

 ?>
	<form method="POST">
		<table>
		<tr>
			<td>Login</td>
			<td><input type="text" name="login"></td>
		</tr>
		<tr>
			<td>Profil</td>
			<td><select name="choix">
				<option value="user">User</option>
				<option value="admin">Admin</option>
			</select></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="valider" value="CREER">
			</td>
		</tr>
	</table>
	<a href="inscription.php">Se Connecter</a>
	</form>

	
</body>
</html>