<?php
include ("config.php");

?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="Content-Language" content="pl" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="signup.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />

    <title>Zarejestruj się</title>
  </head>
  <body>
    <div class="nav">
      <input type="checkbox" id="nav-check" />
      <div class="nav-header">
        <div class="nav-title">Costa</div>
      </div>
      <div class="nav-btn">
        <label for="nav-check">
          <span></span>
          <span></span>
          <span></span>
        </label>
      </div>

      <div class="nav-links">
      <a href="../ndex.html">Strona główna</a>
        <a href="../product.html" >O produkcie</a>
        <a href="../api.html" >Cennik</a>
        <!-- <a href="" target="_blank">lorem</a>
        <a href="" target="_blank">lorem</a> -->
        <!-- <button type="button" class="sign" id="signin">Zaloguj się</button> -->
      </div>
    </div>
    <!-- start registration -->
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form method="post" action="signup.php">
          <h1>Załóz konto</h1>
          <div class="social-container">
            <a href="#" target="_blank" class="social"
              ><i style="color: blue" class="fab fa-facebook"></i
            ></a>

            <a href="#" target="_blank" class="social"
              ><i style="color: red" class="fab fa-google"></i
            ></a>
          </div>
          <span>lub uzupełnij ponizszy formularz</span>
          <input type="text" name="username" placeholder="Wpisz swoje imię" value='<?php echo $username; ?>'/>
          <input type="email" name="email" placeholder="Wpisz adres e-mail" value="<?php echo $email; ?>" />
          <input type="password" placeholder="Wpisz hasło" name="password_1"/>
          <input type="password" placeholder="Powtórz hasło" name="password_2"/>
          <button type= "submit" class="su" name="reg_user">Zarejestruj się</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form method="post" action="sign.php">
          <h1>Zaloguj się</h1>
          <div class="social-container">
            <a href="#" target="_blank" class="social"
              ><i style="color: blue" class="fab fa-facebook"></i
            ></a>

            <a href="#" target="_blank" class="social"
              ><i style="color: red" class="fab fa-google"></i
            ></a>
          </div>
          <span>lub uzyj swojego konta</span>
          <input type="text" name="username" placeholder="Wpisz swój login" />
          <input type="password" name="password" placeholder="Wpisz hasło" />
          <a href="#">Zapomniałem hasła</a>
          <button class="si" name="login_user" type="submit">Zaloguj się</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Cześć!</h1>
            <p>
              Sprawdź czy nie czeka na Ciebie niespodzianka dzięki której
              zrealilzujesz swój cel.
            </p>
            <button class="ghost" id="signIn">Zaloguj się</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Dzień dobry</h1>
            <p>
              Od rozpoczęcia zmiany w stylu zycia dzieli Ciebie krok. Jezeli
              jesteś gotowy/wa kliknij
            </p>
            <button class="ghost" id="signUp">Zarejestruj się</button>
          </div>
        </div>
      </div>
    </div>
    <!-- stop -->
    <footer>
      <h5>Costa &copy;</h5>
    </footer>
    <script src="signup.js"></script>
    <script src="news.js"></script>
  </body>
</html>
