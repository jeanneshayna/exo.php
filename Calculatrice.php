
<!DOCTYPE html>


<html>
    <head>
        <title> Calculatrice </title>

    </head>
    <body>

<form method="POST" action="Calculatrice.php">

 <p>Nombre 1<input type="text" name="n1"></p>
 <p>Nombre 2<input type="text" name="n2"></p>
 <select name= "choix" >
     <option value=""> Choisissez une operation </option>
        <option value="1">Addition </option>
        <option value="2"> Soustraction </option>
        <option value="3"> Multiplication </option>
        <option value="4"> Division </option>
        <option value="5"> Modulo </option>
</select>
    <input type= "submit" name="submit" value= "Calculer">
    <input type= "reset" name="reset" value= "Effacer">
</form>
<?php

 extract($_POST);
  if (isset($submit)) {
      switch ($choix) {
          case 1:
         $res=$n1+$n2;
          echo "la somme de $n1 et $n2 = $res";
          break; 
          case 2:
         $res=$n1-$n2;
          echo "La difference de $n1 et $n2 = $res";
          break;
          case 3:
         $res=$n1*$n2;
          echo "Le somme multiplication de $n1 et $n2 = $res";
          break;
         case 4:
         $res=$n1/$n2;
          echo "La somme division de $n1 et $n2 = $res";
          break;
          case 5:
          $res=$n1%$n2;
          echo " La restante de $n1 et $n2 = $res";
          break;

        }
  }
   
  ?>
 <form action="user.php" method="post">
  <input type="submit" name="deconnexion" value="deconnexion">
  </form>
    </body>
</html>



