<!DOCTYPE html>
<html>
<head>
    <title>tabla</title>
    <meta charset="utf-8">
</head>
<body>
  <form method="POST" action="02form.php">
    <H1>Has introducido el número <?php echo $_GET['numero']; ?> pero 
    has de poner del 1 al 25</H1>

    <input type="number" name="numero" id="" autofocus>
    <!-- <input type="submit" value="Send edad">  -->

    <input type="submit" value="Send"> 

  </form>
          
</body>


</html>