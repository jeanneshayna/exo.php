
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Page d'accueil</title>
      <style type="text/css">
      	body{
      		background-image:url(black-wallpaper-kpop.jpg);
      		text-align: center;
      		
      	}
      	form{
      		border: solid 10px white ;
      		margin-left: 30%;
      		margin-right:30%;
      		border-radius: 15px;

      	}
      </style>
    </head>
    <body>
    	<h2>Bienvenue sur le formulaire d'Inscription</h2>
    <form method="POST" action="pagedaccueil.php">
        Login <input type="login" name="mail" placeholder="e-mail"/> <br/><br/>
        Profil <select name="profil" id="profil">
         <option value="">User</option>
         <option value="">Admin</option>
         </select><br/><br/>
         <input type="submit" value="Creer"/>
         