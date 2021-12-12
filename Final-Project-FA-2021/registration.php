<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Final Project</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet"> 
  </head>

<body><center>

<header><center>
  
    <img src="deal.jpg" width="100%" height="1000">

</header>

<main>
  
  <h1>
  YOUR EXCLUSIVE ACCOUNT HAS BEEN CREATED!<br>
  <br>
  HOW MUCH WILL YOU LAY ON THE LINE TO BE A WINNER?
  <h1>

</main>

<footer><center>
  
  <img src="deck.jpg" width="100%" height="1000">

</footer>
  
  <?php

    $db =new PDO('mysql:host=mysql1-p2.ezhostingserver.com; dbname=citdemo','citelms','CIT4ever!');

    $stmt=$db->prepare("INSERT INTO raulpokerfinal (username,password,email,game) VALUES(:username,:password,:email,:game)");

    $stmt->bindParam(':username',$_POST['username']);
    $stmt->bindParam(':password',$_POST['password']);
    $stmt->bindParam(':email',$_POST['email']);
    $stmt->bindParam(':game',$_POST['game']);

    $stmt->execute();

    $email=$_POST["email"];
    
    $ofile=fopen("guests.txt","a+") or die("can't open file");
    fwrite($ofile,$email."\n");
    fclose($ofile);
  
  ?>

</body>