<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="/images/CodeLab.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Code Lab</title>
</head>
<body>
    
    
    <header>
        
        <img src="images/CodeLab.png" alt="Unser logo">

        <a class="reg" href="register.html">Regestrieren</a>
        <a class="login" href="login.html">Anmeldung</a>
        
    </header>


    <main class="no-nav">


        <div class="register">

            <h2 class="poppins-bold">Anmeldung</h2>

            <div id="reg-info">
                <form action="post" action="">

                <input class="info" type="text" name="username" placeholder="Benutzername" required>
                <!-- <input class="info" type="text" name="mail" placeholder="E-Mail" required> -->
                <input class="info" type="text" name="password" placeholder="Passwort" required>

                <div class="login-options">
                    <a href="pass-vergessen.html">Passwort vergessen</a>
                    <span> | </span>
                    <a href="register.html">Noch kein Konto</a>
                </div>
                
                <div class="button-container">
                    <button class="reg-submit" type="submit"><a href="">Anmelden</a></button>
                </div>

                </form>
            </div>
            

        </div>
        
    </main>







</body>
</html>