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
  
    <img src="cards.jpg" width="100%" height="1000">
  
  </header>  
    
  <main><center>
  
  <h1>
  WOULD YOU LIKE TO JOIN AN EXCLUSIVE POKER CLUB?<br>
  SIGN UP NOW!
  </h1>
  
  <br>
  
  <form id="form" action="registration.php" method="post">
    <h2>
    Username: <input type="text" name="username" maxlength=40><br>
    <br>
    Password: <input type="text" name="password" maxlength=40><br>
    <br>
    Email Address: <input type="text" name="email" maxlength=40><br>
    <br>
    Game Style: <input type="text" name="game" maxlength=40><br>
    <br>
    <input id="button" type="submit" value="RAISE!"><br>
    </h2>
  </form>
  
  <br>
  
  <form id="password" action="account.php" method="post">
  <h2>
  AREADY AN EXCLUSIVE PLAYER? JUST TYPE YOUR EMAIL TO GET EXCLUSIVE PASSWORD: <input type="text" name="email" maxlength=20><br>
  <br>
  </h2>
  <input id="button" type="submit" value="CALL!">
  </form>  
  
  </main>
    
  <footer><center>
  
    <img src="deck.jpg" width="100%" height="1000">
  
  </footer> 
    
  </body>

</html>